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
                <h2>All Students List.</h2>
                <a href="/newStudent" class="btn btn-success btn-sm mb-3">Add New</a>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>View</th>
                    <th>Delete</th>
                    <th>Update</th>

                </tr>
                @foreach($data as $id=>$student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->city}}</td>
                    <td>{{$student->phone}}</td>
                    <td><a class='btn btn-primary' href="{{route('view.student',$student->id)}}">View</a></td>
                    <td><a class='btn btn-danger' href="{{route('delete.student',$student->id)}}">Delete</a></td>
                    <td><a class='btn btn-warning' href="{{route('updateStudent.page',$student->id)}}">Update</a></td>


                </tr>
                @endforeach
            </table>    
            
        </col-6>
        </row>
    </div>
    
</body>
</html>