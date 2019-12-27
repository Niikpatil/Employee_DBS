<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="app flex-row align-items-center bg-gray-200">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group">
                    <div class="card p-4 shadow">
                        <div class="card-body">
                                <h1>Login</h1>
                                <p class="text-muted">Sign In to your account</p>
                            <form method="POST" action="{{ route('login') }}">
                            @csrf

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon-user"></i>
                                        </span>
                                    </div>
                                    <input id="email" type="text" placeholder="eMail"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" placeholder="Password" id="password" 
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div> <br>

                                {{-- <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary px-4 shadow">Login</button>
                                    </div>
                                    <div class="col-6 text-right">
                                        {{-- <button type="button" class="btn btn-link px-0">Forgot password?</button> --}}
                                        {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif --}}
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="card shadow text-white bg-instagram py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <h2>Sign up</h2>
                                <p>New user register Here</p><br>
                                <a class="btn btn-outline-danger active mt-3 shadow" href="/register" type="button">Register Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
