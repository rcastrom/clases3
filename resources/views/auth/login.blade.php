<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(["resources/js/app.js", "resources/css/app.scss"])
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="row" style="margin-top: 45px">
                <div class="col-md-12 col-md-offset-4">
                    <h4>Login | Veterinaria El Cachorro</h4><br>
                    <form action="{{route('auth.check')}}" method="post">
                        @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                        @endif

                        @csrf
                        <div class="form-group mb-3">
                            <label for="correo">Correo</label>
                            <input type="email" name="correo" id="correo" class="form-control"
                                   placeholder="Indique su correo para ingresar">
                            <span class="text-danger">@error('correo'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contra">Contraseña</label>
                            <input type="password" name="contra" id="contra" class="form-control"
                                   placeholder="Escriba su contraseña">
                            <span class="text-danger">@error('contra'){{$message}}@enderror</span>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mb-3">Ingresar</button>
                        <br>
                        <a href="{{route('auth.registro')}}">No cuento con usuario, crear cuenta</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

