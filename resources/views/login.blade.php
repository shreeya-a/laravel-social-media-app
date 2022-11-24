@extends('layout.app')
<!-- . use huncha blade ma instead of / for path -->

@section('content')

@if(Session::has('fail')) -->
 {{Session::get('fail')}}
<div class="alert alert-danger" role="alert">
{{Session::get('fail')}}
</div>
@endif
<div class="container">


  <div class="mask d-flex align-items-center h-100 gradient-custom-3  mt-30 ">
    <div class="container h-100  ">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <!-- @if(Session::has('fail'))
          <div class="alert alert-warning d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
              <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div>
              An example warning alert with an icon
              {{Session::get('fail')}}

            </div>
          </div>
          @endif -->
          <div class="card " style="border-radius: 15px;">
            <div class="card-body p-5">
              <h1 style="text-align:center ;">Login</h1>
              <form action="{{route('loginUser')}}" method="post">

                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@gmail.com">
                  @error('email')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1" placeholder="Password">
                  @error('password')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control @error('confirm-password') is-invalid @enderror" name="confirm-password" id="exampleInputPassword1" placeholder="Re-enter Password">
                  @error('confirm-password')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>

                <div class=" d-grid gap-2 col-6 mx-auto">
                  <button type="submit" class="btn btn-primary">Submit</button>

                </div>
                <p class="text-center text-muted mt-3 mb-0">Don't have an account? <a href="{{route('register')}}" class="fw-bold text-body"><u>Register here</u></a></p>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection