<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function userroles(){
        $users =User::paginate(9);
        return view('admin.userroles')->with('users',$users);
    }

    public function editrole(Request $request, $id)
    {
      $users = User::findOrFail($id);
      return view('admin.editrole')->with('users' ,$users);
    }
    public function updaterole(Request $request, $id){
        $users=User::find($id);
        $users->name =$request->input('name');
        $users->usertype = $request->input('usertype');
        $users->update();
        return redirect('/userroles')->with('status', 'Your data is update');
    }

    public  function deleterole($id)
    {
        $users= User::findOrFail($id);
        $users->delete();
        return redirect('/userroles')->with('status', 'Your data is Deleted');

    }
}
