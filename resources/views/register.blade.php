@extends('layout.app')

@section('content')
<div class="container">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3  mt-30 ">
    <div class="container h-100  ">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card " style="border-radius: 15px;">
            <div class="card-body p-5">
              <h1 style="text-align: center;">Register</h1>

              <form action="{{route('registerUser')}}" method="POST">
                @csrf
                <div class="mb-3">

                  <!-- <div class="form-floating mb-3">
  <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
  @error('email')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
</div> -->
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter you name">
                  @error('name')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>
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
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1" placeholder="Enter your password">
                  @error('password')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control @error('re-password') is-invalid @enderror" name="re-password" id="exampleInputPassword1" placeholder="Re-enter your password">
                  @error('re-password')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                </div>
                <div class=" d-grid gap-2 col-6 mx-auto">
                  <button type="submit" class="btn btn-primary mt-3 ">Register </button>
                </div>
                <p class="text-center text-muted mt-3 mb-0">Already have an account? <a href="{{route('login')}}" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection