<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Kaisr::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }

        return view('page.tenan.tabel');
    }
}
