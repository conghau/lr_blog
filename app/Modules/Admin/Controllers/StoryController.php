<?php
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 04/08/2016
 * Time: 15:29
 */

namespace App\Modules\Admin\Controllers;


use App\Http\Controllers\AdminController;
use App\Models\Story;

class StoryController extends AdminController {
  function index() {
    $stories = Story::paginate(10);
    return view('Admin::Story.index', ['stories' => $stories]);
  }
}