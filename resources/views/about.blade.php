@extends('layouts.app')

@section('content')

    <!-- Hero background & content on top of hero background -->
    <div id="hero-container">
        <div class="hero-wrapper">
            <h1>Multi-Disciplinary <br> <span class="line">Designer</span> <span class="orange-txt">Developer</span></h1>

            <div class="btn-wrapper">
                <a href="">Let's connect</a>
                <a href="">View Portfolio</a>
            </div>
        </div>
    </div>



    <div class="header-section">
        <h2 class="dark big">Team</h2>
        
        <hr>
    </div>

    <!-- Meet the team section -->
    <div class="container-grid-2">
        <div>
            <img class="img-team" src="{{ URL('storage/team-section-home.jpg')}}" alt="">
        </div>
        <div>
            <h2>
                Who we are
            </h2>

            <h3 class="orange-txt">
                dasdasd
            </h3>

            <p>
                Whether you require distribution or fulfillment, defined freight forwarding, or a complete supply chain solution, we are here for you.
            </p>
            
            <div class="btn-wrapper">
                <a href="">About</a>
            </div>
        </div>
    </div>



@endsection