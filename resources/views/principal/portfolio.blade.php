@extends('layouts.internal.main')
@section('content')

    <div class="container gallery-container">

        <h1 style="margin-top: 180px;">Galeria de fotos</h1>

        <p class="page-description text-center">Melhores momentos</p>

        <div class="tz-gallery">

            <div class="row">
                <div class="col-sm-6 col-md-4" >
                    <a class="lightbox" href="{{ asset('principal/images/gallery/1.jpeg') }}">
                        <img src="{{ asset('principal/images/gallery/1.jpeg') }}" style="width: 462px; margin-left: -300px; height: 364px;" alt="Park">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ asset('principal/images/gallery/2.jpeg') }}">
                        <img src="{{ asset('principal/images/gallery/2.jpeg') }}" style="width: 462px; margin-left: -180px; height: 500px;" alt="Bridge">
                    </a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a class="lightbox" href="{{ asset('principal/images/gallery/3.jpeg') }}">
                        <img src="{{ asset('principal/images/gallery/3.jpeg') }}"  style="width: 594px; margin-left: -5px; height: 500px;" alt="Tunnel">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ asset('principal/images/gallery/4.jpeg') }}">
                        <img src="{{ asset('principal/images/gallery/4.jpeg') }}"  style="width: 462px; margin-left: -305px; height: 610px; margin-top: -99px;" alt="Coast">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ asset('principal/images/gallery/5.jpeg') }}">
                        <img src="{{ asset('principal/images/gallery/5.jpeg') }}"  style="    width: 462px; margin-left: -180px; height: 513px; margin-top:40px;" alt="Rails">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ asset('principal/images/gallery/6.jpeg') }}">
                        <img src="{{ asset('principal/images/gallery/6.jpeg') }}"  style="width: 462px; margin-left: -6px; height: 541px; margin-top: 41px;" alt="Traffic">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ asset('principal/images/gallery/7.jpeg') }}">
                        <img src="{{ asset('principal/images/gallery/7.jpeg') }}"  style="width: 462px; margin-left: -308px; height: 500px; margin-top: -14px;" alt="Rocks">
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="../images/sky.jpeg">
                        <img src="../images/sky.jpeg" alt="Sky">
                    </a>
                </div>
            </div>

        </div>

    </div>

@endsection
