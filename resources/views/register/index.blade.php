@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Create account</h1>
                <form action="/register" method="post">
                    @CSRF
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="Name" value="{{ old('name') }}" required>
                        <label for="floatingInput">Name</label>
                        <div class="invalid-tooltip">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                            id="username" placeholder="Username" value="{{ old('username') }}" required>
                        <label for="floatingInput">Username</label>
                        <div class="invalid-tooltip">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                        <div class="invalid-tooltip">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            id="password" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                        <div class="invalid-tooltip">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">Register</button>

                    <small class="d-block text-center mt-3"> Already registered? <a href="/signin">Sign in</a></small>
                    <p class="text-body-secondary mt-3 mb-3 ">&copy; 2017–2023</p>
                </form>
            </main>
        </div>
    </div>
@endsection
