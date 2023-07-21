<?php

namespace App\Http\Controllers\Admin;

// use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KasController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return view('pages.admin.kas.list');
        }
        return view('pages.admin.kas.main');
    }
}
