<?php

namespace App\Http\Controllers\Admin;

// use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PendapatanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return view('pages.admin.pendapatan.list');
        }
        return view('pages.admin.pendapatan.main');
    }
}
