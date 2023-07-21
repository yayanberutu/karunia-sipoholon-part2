<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $hotel = Hotel::where('name', 'like', '%' . $request->keyword . '%')
                ->orWhere('description', 'like', '%' . $request->keyword . '%')
                ->orWhere('price', 'like', '%' . $request->keyword . '%')
                ->orWhere('stock', 'like', '%' . $request->keyword . '%')
                ->orWhere('category', 'like', '%' . $request->keyword . '%')
                ->orWhere('room', 'like', '%' . $request->keyword . '$')
                ->paginate(10);
            return view('pages.admin.hotel.list', compact('hotel'));
        }
        return view('pages.admin.hotel.main');
    }

    public function create()
    {
        return view('pages.admin.hotel.create');
    }

    public function store(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'room' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validators->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validators->errors()->first(),
            ]);
        }

        $file = $request->file('cover');
        $filename = $file->getClientOriginalName();
        $file->move('images/hotel', $filename);

        Hotel::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'room' => $request->room,
            'price' => $request->price,
            'stock' => $request->stock,
            'cover' => $filename,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil menambahkan Data baru',
            'redirect' => route('admin.hotel.index')
        ]);
    }

    public function show(Hotel $hotel)
    {
        return view('pages.admin.hotel.show', compact('hotel'));
    }

    public function edit(Hotel $hotel)
    {
        return view('pages.admin.hotel.edit', compact('hotel'));
    }

    public function update(Request $request, Hotel $hotel)
    {
        $validators = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'room' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|',
        ]);

        if ($validators->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validators->errors()->first(),
            ]);
        }

        if ($request->hasFile('cover')) {
            $old_file = public_path('images/hotel/' . $hotel->cover);
            if (file_exists($old_file)) {
                unlink($old_file);
            }
            $file = $request->file('cover');
            $filename = $file->getClientOriginalName();
            $file->move('images/hotel', $filename);
        }

        $hotel->update([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'room' => $request->room,
            'price' => $request->price,
            'stock' => $request->stock,
            'cover' => $filename,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil merubah Data',
            'redirect' => route('admin.hotel.index')
        ]);
    }

    public function destroy(Hotel $hotel)
    {
        $file = public_path('images/hotel/' . $hotel->cover);
        if (file_exists($file)) {
            unlink($file);
        }

        $hotel->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil menghapus Data',
        ]);
    }
}
