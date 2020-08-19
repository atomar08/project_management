<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    function index()
    {
         $data = DB::select("select users.user_id, users.user_name, tasks.task_id from users, tasks where users.user_id = tasks.uid");
        return view('user_view', compact('data'));
    }
}
?>