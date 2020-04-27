<!DOCTYPE html>
<html lang="en">
    {{ assets.outputCss() }}
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>

    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" method="POST" autocomplete="off" action="{{url('/session/login')}}">
                        <span class="login100-form-title">Login</span><br>
                        <div class="wrap-input100 validate-input">
                            <label for="email">E-mail</label>
                            <input class="input10" type="email" name="email" placeholder="123@example.com" required>
                            <span class="symbol-input100"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <label for="password">Password</label>
                            <input class="input10" type="password" name="password" required>
                            <span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">Sign In</button>
                        </div>
                        <div class="text-center p-t-23 p-b-70">
                            <span class="txt3">Don't have an account yet?</span>
                                <a class="txt3" href="{{url('user/register')}}">
                                    Create your account
                                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                </a>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </body>

</html>