<?php

namespace App\Http\Controllers\Admin;

// use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kas;
use Illuminate\Support\Facades\Validator;

class KasController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kas = Kas::all();
            return view('pages.admin.kas.list', compact('kas'));
        }

        return view('pages.admin.kas.main');
    }

    public function filter(Request $request)
    {
        if ($request->ajax()) {
            $filter = $request->input('filter');

            $query = Kas::query();

            if ($filter === 'in') {
                $query->where('in_out', 'in');
            } elseif ($filter === 'out') {
                $query->where('in_out', 'out');
            }

            $kas = $query->get();

            return view('pages.admin.kas.list', compact('kas'));
        }

        return view('pages.admin.kas.main');
    }

    public function show(Kas $kas)
    {
        // Lakukan operasi atau tampilkan informasi detail dari data kas $kas
        return view('pages.admin.kas.show', compact('kas'));
    }
}
