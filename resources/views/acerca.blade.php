@extends('layout.plantilla')

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
                    <h3>Acerca de nosotros</h3>
                    <p>Porque entendemos que sus mascotas forman parte de su familia,
                        usted permítanos demostrarle que recibirán el mejor trato, atención
                        y cariño que ellos se merecen.
                    </p>
                </div>
            </div>
        </div>
    </section>




@endsection
