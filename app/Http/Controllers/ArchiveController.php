<?php

namespace App\Http\Controllers;

use App\Archive;
use App\Block;
use App\Folder;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function index() {
        $data = Archive::all();
//        $q = $data->folders();

        return view('index', compact('data'));
    }
}
