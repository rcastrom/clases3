@extends('layout.admin')

@section('content')
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="{{asset('images/foto1.jpg')}}" alt="">
                    <div class="text-content">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{route('citas.update',$cita->id)}}" method="post">
                        <fieldset>
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="mascota">Nombre de la mascota</label>
                                <input type="text" name="mascota" id="mascota" value="{{$cita->mascota}}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="dia">Día</label>
                                <input type="date" class="form-control"
                                       name="dia" id="dia" value="{{$cita->dia}}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="hora">Hora</label>
                                <input type="time" class="form-control"
                                       name="hora" id="hora" value="{{$cita->hora}}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Modificar cita</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection


