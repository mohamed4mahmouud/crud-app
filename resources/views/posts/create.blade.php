@extends('layouts.app')
 @section('title','Form Create User')
<body>

    @section('content')


<form method="POST" action="{{ route('posts.store') }}" class="form-inline">
   @csrf
    <div class="form-group mr-2">
        <label for="title" class="mr-2">Title:</label>
        <input type="text" name="title" id="title" class="form-control form-control-sm" value="{{ old('title') }}" >
    </div>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group mr-2">
        <label for="Body" class="mr-2">Body:</label>
        <input type="text" name="body" id="Body" class="form-control form-control-sm" value="{{ old('body') }}">
    </div>

    @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="user_id">
        <option selected>Select User</option>
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection


</body>
</html>
