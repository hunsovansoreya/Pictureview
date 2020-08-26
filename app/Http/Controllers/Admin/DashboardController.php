<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        $uniqueRole = DB::table('users')->where('id', $id)->value('usertype');

        if($uniqueRole === 'SOREYA') {

            return redirect('/dashboard')->with('status', 'this role cannot be deleted');
        }

        $users->usertype = $request->input('usertype');

        $users->update();
        return redirect('/userroles')->with('status', 'Your data is update');
    }

    public  function deleterole($id)
    {
        $users= User::findOrFail($id);
        $uniqueRole = DB::table('users')->where('id', $id)->value('usertype');
        if($uniqueRole === 'SOREYA') {
            return redirect('/dashboard')->with('status', 'this role cannot be deleted');
        }
        $users->delete();
        return redirect('/userroles')->with('status', 'Your data is Deleted');

    }
}
