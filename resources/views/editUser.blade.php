<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> Edit Student</title>
</head>

<body>
    <x-header />
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-10">
                <div class="card bg-light">
                    <div class="card-body">
                        <h4 class="card-title"> Welcome back <b><u><i>{{$SingleStudent->name}}</i></u></b> Upgrade your information</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('todo.update', [$SingleStudent->id])}}">
                            @csrf
                            <div class="mb-3">
                                <label for="studentName" class="form-label">Name</label>
                                <input type="text" pattern="[A-Za-z .]{3,30}" name="name" value="{{$SingleStudent->name}}" class="form-control" id="studentName" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email Address</label>
                                <input type="email" name="email" value="{{$SingleStudent->email}}" pattern="[A-Za-z_0-9]{3,}@[A-Za-z_0-9]{3,}[.][A-Za-z.]{2,}" autocomplete="off" minlength="5" maxlength="40" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="mb-3">
                                <label for="stuNumber" class="form-label">Number</label>
                                <input type="text" value="{{$SingleStudent->number}}" name="number" pattern="[a-zA-Z0-9-]{6,14}" class="form-control" autocomplete="off" id="stuNumber">
                            </div>
                            <div class="mb-3">
                                <label for="stuClass" class="form-label">Enter your class</label>
                                <input type="text" value="{{$SingleStudent->class}}" name="class" pattern="[0-9a-zA-Z ]{1,20}" class="form-control" autocomplete="off" id="stuClass">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>