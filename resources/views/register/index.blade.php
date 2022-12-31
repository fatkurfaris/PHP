@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-6">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center mt-4">Registration Form</h1>
            <form>
          
              <div class="form-floating">
                <input type="text" class="form-control rounded-top" id="name" placeholder="Name" name="name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <label for="password">Password</label>
              </div>

              <div class="form-floating ">
                <input type="email" class="form-control rounded-bottom" id="email" placeholder="Email" name="email">
                <label for="email">Email</label>
              </div>
              
              <div class="checkbox mb-3">
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>

            </form>
            <small class="d-block text-center mt-3">
                Already registered?
                <a href="/login">Login Now!!</a>
            </small>
          </main>
          
    </div>
</div>



@endsection