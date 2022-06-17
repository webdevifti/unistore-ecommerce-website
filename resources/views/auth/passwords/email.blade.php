{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Password Reset</title>
	<!--favicon-->
	<link rel="icon" href="{{ asset('admin_assets/images/favicon-32x32.png') }}" type="image/png" />
	<!-- loader-->
	<link href="{{ asset('admin_assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('admin_assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/css/icons.css') }}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/css/app.css') }}" />
</head>

<body class="bg-forgot">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-forgot d-flex align-items-center justify-content-center">
			<div class="card shadow-lg forgot-box">
				<div class="card-body p-md-5">
					<div class="text-center">
						<img src="{{ asset('admin_assets/images/icons/forgot-2.png') }}" width="140" alt="" />
					</div>
					<h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
					<p class="text-muted">Enter your registered email ID to reset the password</p>
                    <form  method="POST" action="{{ route('password.email') }}">
                        @csrf
					<div class="mb-3 mt-4">
						<label class="form-label">Email Address</label>
						<input type="text" name="email" class="form-control  @error('email') is-invalid @enderror form-control-lg radius-30" value="{{ old('email') }}" placeholder="example@user.com" />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="d-grid gap-2">
						<button type="submit" class="btn btn-primary btn-lg radius-30">Send</button>
						 <a href="{{ route('login') }}" class="btn btn-light radius-30"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
					</div>
                </form>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>
