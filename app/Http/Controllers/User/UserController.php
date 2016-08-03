<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Auth;

class UserController extends Controller {
  public function create() {
    return view('user.create');
  }

  public function store(Request $request) {
    $this->validate($request, [
      'name' => 'required',
      'password' => 'required'
    ]);
    $input = $request->all();
    Auth::user()->create($input);
    Session::flash('flash_message', 'User successfully added!');
    return redirect()->back()->withInput();
  }

  public function listall() {
    $users = User::all();
    //$users = Redis::get('users');
    return view('user.list', array('lstUser' => $users));
  }
}