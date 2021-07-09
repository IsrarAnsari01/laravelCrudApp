<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <x-header />
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-4">
                <div class="d-grid gap-2">
                    <a href="add_new_student" class="btn btn-block btn-success"> Enroll With us </a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body bg-light">
                        <h3>Enrolled Students</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <table class="table table-dark table-striped">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Number</td>
                        <td>Class</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    @foreach($SavedStudends as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->number}}</td>
                        <td>{{$student->class}}</td>
                        <td><a href="edit_student/{{$student->id}}" class="btn btn-success">Edit</a></td>
                        <td><a href="delete_student/{{$student->id}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>

</html>