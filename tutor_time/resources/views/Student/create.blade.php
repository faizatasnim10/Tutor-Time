@extends('layouts.main')
@section('content')
<h1 align='center'>Student SignUp</h1>
<div align='center'>
<form action="" method="post">
    {{@csrf_field()}}
    Name : <input type="text" value="{{old('name')}}" name="name"> </br><br>
    @error('name')
        <span class="text-danger">{{$message}}</span><br><br>
    @enderror
    Email : <input type="text" value="{{old('email')}}" name="email"> </br><br>
    @error('email')
        <span class="text-danger">{{$message}}</span><br><br>
    @enderror
    Password: <input type="password" name="password"></br><br>
    @error('password')
        <span class="text-danger">{{$message}}</span><br><br>
    @enderror
    Confirm Password : <input type="password" name="conf_password"></br><br>
    @error('conf_password')
        <span class="text-danger">{{$message}}</span><br><br>
    @enderror
    Gender : <input type="radio" value="male" name="gender"> Male  <input type="radio" value="female" name="gender"> Female  </br><br>
    @error('gender')
        <span class="text-danger">{{$message}}</span><br><br>
    @enderror
    Dob :<input type="date" name="dob"> </br></br>
    @error('dob')
    <span class="text-danger">{{$message}}</span><br></br>
    @enderror
    Phone Number : <input type="text" value="{{old('email')}}" name="phone number"></br></br>
    @error('phone number')
        <span class="text-danger">{{$message}}</span><br></br>
    @enderror    
    <input type="submit" value="Create">
</form>
</div>
@endsection
