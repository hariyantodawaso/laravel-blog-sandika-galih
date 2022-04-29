@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                <form>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-2">
                    Not Registered? <a class="text-decoration-none" href="/register">Register Now!</a>
                </small>
            </main>
        </div>
    </div>
@endsection
