@extends('layouts.auth')
@section('content')
    <div class="row mt-5 pt-5">
        <div class="col-md-12 ">
            <h3>Register to the Task Tracking MIS</h3>
            <div class="card">
                <div class="card-header bg-secondary">
                    <h5 class="text-center text-light">Register</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        {{-- Input Field EMail Address --}}
                        <div class="form-group my-1">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email"
                                class="form-control
                                @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" placeholder="Email Address"autocomplete="email" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- Input Field Full Name --}}
                        <div class="form-group my-1">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name"
                                class="form-control
                                @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" placeholder="User Name" autocomplete="username" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- Input Field Password --}}
                        <div class="form-group my-1">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password"
                                class="form-control
                            @error('password') is-invalid @enderror"
                                value="{{ old('password') }}" placeholder="Password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- Input Field Confirm Password --}}
                        <div class="form-group my-1">
                            <label for="password">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control" autocomplete="new-password" required>

                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        {{-- Buttons to launch Register and back to Login Page --}}
                        <div class="row">
                            {{-- Login Page  --}}
                            <div class="col-md-6">
                                <div class="form-grou my-1">
                                    <button type="submit" class="btn btn-warning float-start">Register</button>
                                </div>
                            </div>
                            {{-- Link to Login Page --}}
                            <div class="col-md-6">
                                <a href="{{ route('login') }}" class="btn btn-dark float-end my-1">Go to login</a>

                            </div>

                        </div>


                </div>
                </form>



            </div>
        </div>
    </div>




    </div>
@endsection
