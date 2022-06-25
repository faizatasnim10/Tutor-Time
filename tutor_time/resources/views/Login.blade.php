@extends('layouts.main')
@section('content')
<h1 align='center'>Login Page</h1>
<h2 align='center'>
<input type="radio" value="Student" name="type"> Student  <input type="radio" value="Teacher" name="type"> Teacher</h2>
<div align='center'>
<form action="" method="post">
    {{@csrf_field()}}
    Email : <input type="text" value="{{old('email')}}" name="email"> </br><br>
    @error('email')
        <span class="text-danger">{{$message}}</span><br><br>
    @enderror
    Password: <input type="password" name="password"></br><br>
    @error('password')
        <span class="text-danger">{{$message}}</span><br><br>
    @enderror
    <input type="submit" value="Login"><br><br>
    <a href="{{ url('/Student/password/reset') }}">Forgot Your Password?</a>
</form>
</div>
@endsection