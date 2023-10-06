@extends('templates.header')

@section('contenido-principal')

<div id="planifica-instrucciones bg-secondary">
    <h2>Bienvenido a la sección de Planifica tu visita</h2>
    <p>Aquí encontrarás información sobre las actividades disponibles y cómo disfrutar de tu visita.</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-3">
            <div class="card">
                <img src="{{ asset('images/MHNV.png') }}" class="card-img-top" alt="Actividad 1">
                <div class="card-body">
                    <h5 class="card-title">Actividad 1</h5>
                    <p class="card-text">
Durante esta actividad, los visitantes tendrán la oportunidad de explorar las diversas galerías y exposiciones de nuestro museo mientras desentrañan los secretos de civilizaciones pasadas y descubren tesoros históricos que han perdurado a lo largo del tiempo. Esta es una oportunidad para aprender, interactuar y emocionarse con el pasado que ha dado forma a nuestro mundo actual.

</p>
                    <a href="#" class="btn btn-primary">Continuar</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-3">
            <div class="card">
                <img src="{{ asset('images/MHNV.png') }}" class="card-img-top" alt="Actividad 2">
                <div class="card-body">
                    <h5 class="card-title">Actividad 2</h5>
                    <p class="card-text">Durante esta actividad, los visitantes tendrán la oportunidad de explorar las diversas galerías y exposiciones de nuestro museo mientras desentrañan los secretos de civilizaciones pasadas y descubren tesoros históricos que han perdurado a lo largo del tiempo. Esta es una oportunidad para aprender, interactuar y emocionarse con el pasado que ha dado forma a nuestro mundo actual.</p>
                    <a href="#" class="btn btn-primary">Continuar</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-3">
            <div class="card">
                <img src="{{ asset('images/MHNV.png') }}" class="card-img-top" alt="Actividad 3">
                <div class="card-body">
                    <h5 class="card-title">Actividad 3</h5>
                    <p class="card-text">Durante esta actividad, los visitantes tendrán la oportunidad de explorar las diversas galerías y exposiciones de nuestro museo mientras desentrañan los secretos de civilizaciones pasadas y descubren tesoros históricos que han perdurado a lo largo del tiempo. Esta es una oportunidad para aprender, interactuar y emocionarse con el pasado que ha dado forma a nuestro mundo actual.
</p>
                    <a href="#" class="btn btn-primary">Continuar</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-3">
            <div class="card">
                <img src="{{ asset('images/MHNV.png') }}" class="card-img-top" alt="Actividad 3">
                <div class="card-body">
                    <h5 class="card-title">Actividad 4</h5>
                    <p class="card-text">Durante esta actividad, los visitantes tendrán la oportunidad de explorar las diversas galerías y exposiciones de nuestro museo mientras desentrañan los secretos de civilizaciones pasadas y descubren tesoros históricos que han perdurado a lo largo del tiempo. Esta es una oportunidad para aprender, interactuar y emocionarse con el pasado que ha dado forma a nuestro mundo actual.
</p>
                    <a href="#" class="btn btn-primary">Continuar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container-fluid bg-dark">
        <div class="d-flex flex-wrap align-items-center text-white" style="background-color: #000; color: #fff;">
            <div class="image-container flex-grow-1">
                <img src="{{ asset('images/Footer.png') }}" alt="Descripción de la imagen" class="img-fluid">
            </div>
            <div class="column-footer flex-grow-1">
                <ul>
                    <li><i class="fa fa-envelope"></i> Dirección: Condell 1546, Valparaíso, Chile.</li>
                    <li><i class="fa fa-phone"></i> Tel: +56322175380 | E-mail: mhnv@museoschile.gob.cl</li>
                    <li><i class="fa fa-map-marker"></i> Atención Ciudadana | Términos y condiciones de uso</li>
                    <li> Servicio Nacional del Patrimonio Cultural</li>
                </ul>
            </div>
        </div>
    </div>
</footer>

@endsection
