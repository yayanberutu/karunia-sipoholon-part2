<?php

namespace App\Http\Controllers\Admin;

// use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PengeluaranController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return view('pages.admin.pengeluaran.list');
        }
        return view('pages.admin.pengeluaran.main');
    }

    public function create()
    {
        return view('pages.admin.pengeluaran.create');
    }
}
