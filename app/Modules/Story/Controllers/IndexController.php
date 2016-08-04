<?php
namespace App\Modules\Story\Controllers;

use \App\Http\Controllers\Controller;
use \App\Models\Story;
use \App\Models\SubscriberStory;
use Illuminate\Http\Request as Request;

;

class IndexController extends Controller {
  function index() {
    return View('layouts.today_is_gift');
  }

  function listStory() {
    $stories = Story::paginate(10);
    return View('Story::list', ['stories' => $stories]);
  }

  function postSubscriber(Request $request) {
    $input = $request->all();
    SubscriberStory::create($input);
    Session::flash('flash_message', 'User successfully added!');
    return redirect()->back()->withInput();
  }

}