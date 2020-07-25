<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ListimageController extends Controller
{
    public function index()
    {
        $listimage = Image::paginate(10);
        return view('admin.listimage')->with('listimage', $listimage);
    }
}
