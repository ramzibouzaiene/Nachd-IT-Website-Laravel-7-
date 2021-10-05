@extends('frontend.layout')
@section('content')

<header class="page-header parallax-window bg_img dark_overlay" data-src="img/breadcrumbs/elements.jpg">
        <div class="container breadcrumbs-wrapper">
            <div class="breadcrumbs d-flex flex-column justify-content-center">
                <h1 class="title">Les Offres De Stage</h1>
                <div>
                    <ul class="breadcrumbs-list d-flex">
                        <li>
                            <a href="{{ route('layout') }}">Accueil</a>
                        </li>
                        <li>
                            <a href="#">Offre</a>
                        </li>
                        <li>
                            <a href="#">Stage</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- [4] Elements -->
    <section class="white-section blog-section single-post-section">
        <div class="container"
             data-aos="fade"
             data-aos-anchor-placement="top-bottom"
             data-aos-easing="ease-in-out"
             data-aos-duration="800">
            <div class="row">
                <div class="col single-post-wrapper">
                    <div class="post-content">
                        <a href="{{ route('intern1') }}">PFE 2021<a>
                        <p class="text-part">NACHD IT Startup ouvre ses portes aux projets de fin d'études pour l'année universitaire 2020-2021 Vous voulez ?
                            Travailler au sein d'une équipe dynamique
                            </p>
                        
    </section>



@endsection