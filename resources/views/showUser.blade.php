<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <row>
           
            <col-6>
            <table class="table table-bordered table-striped">
                <h2 class="">All User List.</h2>
                <a href="/newUser" class="btn btn-success btn-sm mb-3">Add New</a>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>View</th>
                    <th>Delete</th>
                    <th>Update</th>

                </tr>
                @foreach($data as $id=>$user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->age}}</td>                    
                    <td>{{$user->phone}}</td>
                    <td><a class='btn btn-primary' href="{{route('view.user',$user->id)}}">View</a></td>
                    <td><a class='btn btn-danger' href="{{route('delete.user',$user->id)}}">Delete</a></td>
                    <td><a class='btn btn-warning' href="{{route('update.user',$user->id)}}">Update</a></td>


                </tr>
                @endforeach
            </table>    
                {{$data->links()}}
        </col-6>
        </row>
    </div>
    
</body>
</html>