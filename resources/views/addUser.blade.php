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
                <h3>Add new User.</h3>
                {{-- @if ($errors->any())
                <ul class="alert alert-danger" style="list-style-position:inside;">
                    @foreach ($errors->all() as $error)
                       <li>{{$error}}</li> 
                    @endforeach
                </ul>
                @endif --}}

                <form action="{{route('insertUser')}}" method="POST">
                    @csrf
                <div class="form-group">
                    <label class="form-lable">Name</label>
                    <input type="text" value="{{old("name")}}" class="form-control @error('name')is-invalid @enderror" name="name" id="">
                    <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label class="form-lable">Email</label>
                    <input type="text" value="{{old("email")}}" class="form-control @error('email') is-invalid @enderror" name="email" id="">
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label class="form-lable">Age</label>
                    <input type="text" value="{{old('age')}}" class="form-control @error('age') is-invalid @enderror" name="age" id="">
                    <span class="text-danger">
                        @error('age')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                
                <div class="form-group">
                    <label class="form-lable ">Phone</label>
                    <input type="text" value="{{old('phone')}}" class="form-control @error('phone') is-invalid @enderror" name="phone" id="">
                    <span class="text-danger">
                        @error('phone')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group mt-3">                    
                    <input type="submit" class="btn btn-primary" name="submit" value="submit">
                </div>

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>