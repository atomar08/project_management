<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProjectController extends Controller
{
    function index()
    {
        $data = DB::select("select project_name, count(task_id) as total_task_count from projects, tasks where projects.project_id=tasks.pid group by projects.project_id");
        return view('project_view', compact('data'));
    }
}
?>

