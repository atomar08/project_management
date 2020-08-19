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
     <h3 align="center">Select Users and User Names of the Associated Tasks</h3>
     <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
           <thead>
            <tr>
                <th>User Id</th>
                <th>User Name</th>
                <th>Task Id</th>
                
            </tr>
           </thead>
           <tbody>
           @foreach($data as $user)
           <tr>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->user_name}}</td>
            <td>{{ $user->task_id}}</td>
            </tr>

            @endforeach

           </tbody>
       </table>
   </div>
  </div>
 </body>
</html>
