<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TaskController extends Controller
{
    function index()
    {
        $projectId = Input::get("project_id");
        
        $data = DB::select("select tasks.pid, tasks.task_id, users.user_id, users.user_name from tasks, users  where tasks.pid='$projectId' and tasks.uid=users.user_id");
        return view('task_view', compact('data'));
    }
}
?>