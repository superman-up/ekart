<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="background-color: seagreen;" >
    <div class="container">
        <div class="row mt-5">
            <div class="col-4"></div>
            <div class="col-4 card m-2 p-3 bg-dark text-white">
                <h3>Update User Data.</h3>
                <form action="{{route('update.UserData',$data->id)}}" method="POST" >
                    @csrf
                <div class="form-group">
                    <label class="form-lable">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$data->name}}">
                </div>
                <div class="form-group">
                    <label class="form-lable">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$data->email}}">
                </div>
                <div class="form-group">
                    <label class="form-lable">Age</label>
                    <input type="text" class="form-control" name="age" value="{{$data->age}}">
                </div>                
                <div class="form-group">
                    <label class="form-lable">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                </div>
                <div class="form-group mt-3">                    
                    <input type="submit" class="btn btn-primary" name="submit" value="Update">
                </div>

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>