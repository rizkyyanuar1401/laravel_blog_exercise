@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif

            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
                <form>
                    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72"
                        height="57">

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                    <small class="d-block text-center mt-3"> Not registered? <a href="/register">Register Now!</a></small>
                    <p class="text-body-secondary mt-3 mb-3 ">&copy; 2017–2023</p>
                </form>
            </main>
        </div>
    </div>
@endsection
