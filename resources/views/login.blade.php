@extends('master')
@section('title', 'Customer Login')
@section('content')
    <hr class="offset-lg hidden-xs">
    <hr class="offset-md">

    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 md-padding">
          <h1 class="align-center">Returning Customer</h1>
          <br>

          <form class="signin" action="index.php" method="post">
            <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
            <br>
            <input type="password" name="password" value="" placeholder="Password" required="" class="form-control" />
            <br>

            <button type="submit" class="btn btn-primary">Sign In</button>
            <a href="#forgin-password" data-action="Modal-ForgotPassword" class="xs-margin">Password recovery ></a>
            <br><br>

            <p>
              If you already have an account with us, please login.
            </p>
            <hr class="offset-xs">

            <a href="#facebook" class="btn btn-facebook"> <i class="ion-social-facebook"></i> Login with Facebook </a>
            <hr class="offset-sm">

            <p>
              Don't have an account? Create one now! <a href="{{ route('signup.page') }}"> Registration > </a>
            </p>

          </form>
        </div>
      </div>
    </div>
    <br><br>
    <br class="hidden-xs">
    <br class="hidden-xs">
@endsection