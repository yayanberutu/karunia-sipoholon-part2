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
}
