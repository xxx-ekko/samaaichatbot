<!DOCTYPE html>
<html lang="en">
<!-- adminlogin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<!-- adminlogin.blade.php -->

<head>
    <title>samAIchatbot - Admin Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>


<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{ asset('images/chatbotsama2.jpg') }}');">

            <div class="wrap-login100">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="login100-form validate-form" action="{{ route('admin.login.submit') }}" method="POST">
                    @csrf
                    <span class="login100-form-logo">
                        <i class="fa-solid fa-user-shield"></i> <!-- Icône représentant l'administrateur -->
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Connexion Administrateur
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Entrez votre email">
                        <input class="input100" type="email" name="email" placeholder="Email" required>
                        <span class="focus-input100" data-placeholder="&#9993;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Entrez votre mot de passe">
                        <input class="input100" type="password" name="mot_de_passe" placeholder="Mot de passe" required>
                        <span class="focus-input100" data-placeholder="&#xf024;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Se connecter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>