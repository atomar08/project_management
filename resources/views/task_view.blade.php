<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 - Join Multiple Table</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Select All Task and Assigned User of A Project</h3>
     <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
           <thead>
            <tr>
                <th>Task Project Id</th>
                <th>Task Id</th>
                <th>User Id</th>
                <th>User Name</th>
            </tr>
           </thead>
           <tbody>
           @foreach($data as $task)
           <tr>
            <td>{{ $task->pid }}</td>
            <td>{{ $task->task_id }}</td>
            <td>{{ $task->user_id }}</td>
            <td>{{ $task->user_name}}</td>
            </tr>
            @endforeach

           </tbody>
       </table>
   </div>
  </div>
 </body>
</html>
