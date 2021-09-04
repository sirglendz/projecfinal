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

    <!-- 4 grid layout skills on homepage -->
    <!-- Every div is a grid item -->
    <div class="container-grid-4">
        <div>
            <img src="img/icon-box.jpg" alt="">
            <h2>
                Web Design
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur!
            </p>
        </div>

        <div>
            <img src="img/icon-box.jpg" alt="">
            <h2>
                Web Development
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur!
            </p>
        </div>

        <div>
            <img src="img/icon-box.jpg" alt="">
            <h2>
                Product Design
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur!
            </p>
        </div>

        <div>
            <img src="img/icon-box.jpg" alt="">
            <h2>
                Creative Thinker
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur!
            </p>
        </div>
    </div>

@endsection