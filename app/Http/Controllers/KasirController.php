<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index(Request $request)
    {
        $data = Kasir::latest()->get();
        return view('page.kasir.tabel', compact('data'));
    }
}
