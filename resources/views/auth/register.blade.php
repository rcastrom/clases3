@php
    use Illuminate\Support\Facades\Session;
@endphp

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
                <h4>Creación de cuenta | Veterinaria El Cachorro</h4><br>
                <form action="{{route('auth.new')}}" method="post">

                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
                        </div>
                    @endif

                    @csrf
                    <div class="form-group mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control"
                               placeholder="Escriba por favor su nombre" value="{{old('nombre')}}">
                        <span class="text-danger">@error('nombre'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="appat">Primer apellido</label>
                        <input type="text" name="appat" id="appat" class="form-control"
                               placeholder="Escriba su primer apellido" value="{{old('appat')}}">
                        <span class="text-danger">@error('appat'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="apmat">Segundo apellido</label>
                        <input type="text" name="apmat" id="apmat" class="form-control"
                               placeholder="Escriba su segundo apellido"  value="{{old('apmat')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="correo">Correo</label>
                        <input type="email" name="correo" id="correo" class="form-control"
                               placeholder="Indique su correo por favor" value="{{old('correo')}}">
                        <span class="text-danger">@error('correo'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="tel">Teléfono</label>
                        <input type="text" name="tel" id="tel" class="form-control"
                               placeholder="Teléfono celular para contacto"  value="{{old('tel')}}">
                        <span class="text-danger">@error('tel'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="contra">Contraseña</label>
                        <input type="password" name="contra" id="contra" class="form-control"
                               placeholder="Escriba su contraseña">
                        <span class="text-danger">@error('contra'){{$message}}@enderror</span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-3">Ingresar</button>
                    <br>
                    <a href="{{route('auth.login')}}">Ya estoy registrado, ingresar</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
