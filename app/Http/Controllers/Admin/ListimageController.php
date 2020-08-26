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
        $i=0;
        $listimage = Image::orderBy('created_at','desc')->paginate(10);

        return view('admin.listimage' ,compact('listimage', $listimage,'i'));
    }

    public function search(Request $request)
    {

        $search = $request->get('search');

        $listimage = DB::table('images')->where('name','LIKE', '%' . $search . '%')->paginate(5);
        return view('admin.listimage', ['listimage' => $listimage]);
    }

}
