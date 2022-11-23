@extends('layout.app')
<!-- . use huncha blade ma instead of / for path -->

@section('content')
<div class="container">
<h1>Login</h1>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    @error('email')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1">
    @error('password')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection