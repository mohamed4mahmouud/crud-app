<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title','Form Create User')</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')


<form method="POST" action="{{ route('users.store') }}" class="form-inline">
   @csrf
    <div class="form-group mr-2">
        <label for="username" class="mr-2">Username:</label>
        <input type="text" name="username" id="username" class="form-control form-control-sm" >
    </div>
    <div class="form-group mr-2">
        <label for="email" class="mr-2">Email:</label>
        <input type="email" name="email" id="email" class="form-control form-control-sm">
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection


</body>
</html>
