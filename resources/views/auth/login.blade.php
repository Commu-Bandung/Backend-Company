@extends('layouts.app')

@section('content')

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Commu For Company</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Styles -->


        <link href="/bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet">

        <link href="/bootstrap-social-gh-pages/assets/css/bootstrap.css" rel="stylesheet">
        <link href="/bootstrap-social-gh-pages/assets/css/font-awesome.css" rel="stylesheet">
        <link href="/bootstrap-social-gh-pages/assets/css/docs.css" rel="stylesheet" >

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                              <div class="col-md-6">
                                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                                  @if ($errors->has('email'))
                                                      <span class="help-block">
                                                          <strong>{{ $errors->first('email') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                            <div class="content">

                              <br> </br>


                              <a href="{{ url('/auth/facebook') }}" class="btn btn-block btn-social btn-facebook">
                                <span class="fa fa-facebook"></span> Sign in with Facebook
                              </a>
                                    <br>
                              <a href="{{ url('/auth/twitter') }}" class="btn btn-block btn-social btn-twitter">
                                <span class="fa fa-twitter"></span> Sign in with Twitter
                              </a>
                                    <br>
                              <a href="{{ url('/auth/google') }}" class="btn btn-block btn-social btn-google">
                                <span class="fa fa-google"></span> Sign in with Google
                              </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
