
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="app flex-row align-items-center bg-gray-200">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4 bg-instagram shadow-lg">
                    <div class="card-body p-4">
                                <div class="text-center"> <h2 class="text-light">Sign_Up</h2> <br> </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                </div>
                                <input  type="text" id="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="email" id="email" placeholder="eMail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                </div>
                                <input type="password" id="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                </div>
                                <input type="password" placeholder="Repeat password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-danger shadow-sm"> <strong> Create Account </strong> </button>
                                {{-- <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button> --}}
                            </div><br>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

