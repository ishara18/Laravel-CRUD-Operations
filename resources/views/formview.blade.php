<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>CRUD Operations</title>
</head>
<body>
    <div class="text-center" style="padding-bottom: 25px;">
        <h1>Laraval CRUD Operations</h1>
    </div>

<form method="POST" action="/insertdata">
@csrf
    <div class="row justify-content-md-center">
        <div class="form-outline col-sm-4">
            <input type="text" id="nic" class="form-control" name="nic" placeholder="NIC"/>
        </div>
    </div>
    <br>

    <div class="row justify-content-md-center">
        <div class="form-outline col-sm-4">
            <input type="text" id="name" class="form-control" name="name" placeholder="Name"/>
        </div>
    </div>
    <br>

    <div class="row justify-content-md-center">
        <div class="form-outline col-sm-4">
            <input type="email" id="email" class="form-control" name="email" placeholder="Email"/>
        </div>
    </div>
    <br>

    <div class="text-center">
    <button type="submit" class="btn btn-primary " style="padding-left: 50px; padding-right: 50px">Add details to Database</button>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
</form>
<hr>

<table class="table table-dark">
    <tr>
        <th>NIC</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    @foreach($databasedata as $newsfeed)
    <tr>
        <td>{{$newsfeed->nic}}</td>
        <td>{{$newsfeed->name}}</td>
        <td>{{$newsfeed->email}}</td>
        <td>
        <a href="" class="btn btn-warning">Update</a>
        <a href="/deletedata/{{$newsfeed->id}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>
