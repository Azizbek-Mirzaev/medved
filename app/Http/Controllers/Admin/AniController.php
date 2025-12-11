<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Annissa;
use Illuminate\Http\Request;

class AniController extends Controller
{
        public function index()
    {
         $anis = Annissa::get();

        // dd($article);
        return view('admin.annisa.index');
    }
}
