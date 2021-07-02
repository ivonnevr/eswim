
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrarse - ESwim</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
    <script
        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
        defer
    ></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                            @csrf

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="name" :value="old('name')" required autofocus autocomplete="name"
                                        id="name" placeholder="Nombre completo">
                                        @error('name')
                                            <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                                        @enderror
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        name="email" :value="old('email')" required
                                        id="email" placeholder="Correo electrónico">
                                        @error('email')
                                            <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                                        @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            name="password" required autocomplete="new-password"
                                            id="password" placeholder="Contraseña">
                                            @error('password')
                                                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            name="password_confirmation" required autocomplete="new-password"
                                            id="password_confirmation" placeholder="Repita la contraseña">
                                            @error('password_confirmation')
                                                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                                            @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    {{ __('Register') }}
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('¿Ya está registrado? Inicie sesión') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>