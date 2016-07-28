<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Session;
use App\User;

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
    User::create($input);
    Session::flash('flash_message', 'User successfully added!');
    return redirect()->back()->withInput();
  }

  public function listall() {
    $lstUser = User::all();
    return view('user.list', array('lstUser' => $lstUser));
  }
}