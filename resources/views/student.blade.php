<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:beige;">
    <div class="container py-5 bg-dark my-5" style="border-radius: 5px;">
        <div class="row">
            <div class="col-3">
                
            </div>
            <div class="col-6 card bg-primary">
            <div class="card-body p-4 mt-3 text-white">
                
                @foreach($data as $id=> $student)
                <h2>ID: {{$student->id}}</h2>
                <h2>Name: {{$student->name}}</h2>
                <h2>Email: {{$student->email}}</h2>
                <h2>Age: {{$student->age}}</h2>
                <h2>City: {{$student->city}}</h2>
                <h2>Phone: {{$student->phone}}</h2>  
                <a href="{{route('records')}}" class="btn btn-warning">Back</a>                    
                
            @endforeach
            </div>
            </div>
        </div>
    </div>
    
</body>
</html>