
@extends('layouts.app')
<section id="home">
@section('content')

<style>
    html{
        scroll-behavior: smooth;
    }
    .title{
        padding-top: 5rem;
    }
    .input label{
        font-size: 25px;
        color: #413e3e;
        margin-top: 40px;
    }
    

    input[type=text],  input[type=email], textarea{
    width: 100%;
    padding: 10px 17px;
    margin:4px 0;
    box-sizing: border-box;
    font-size: 20px;
    }
    .line{
        text-decoration: line-through;
        text-decoration-color: #b4d11f;
        font-style: italic;
    }

    .container-grid-2 a {
    background-color: #b4d11f;
    border: 1px solid #b4d11f;
    text-decoration: none;
    color: #ffffff;
    padding: 12px 30px;
    text-transform: uppercase;
    font-size: 20px;
}

.container-grid-2 a:hover {
    color: #666;
    border: 1px solid #b4d11f;
    background-color: transparent;
    transition: 0.25s ease-in-out;
}

.section-why-us .icon-why-us {
    padding: 30px;
    font-size: 30px;
    border-radius: 20px 20px 5px;
    color: #b4d11f;
    box-shadow: 0px 5px 10px #b4d11f;
}
.green-txt{
    color: #b4d11f;
}
</style>

    <!-- Hero background & content on top of hero background -->
    <div id="hero-container">
        <div class="hero-wrapper">
            <h1> <span class="line">BOBONG PROGRAMMER </span> <br> <span >TAGATIMPLA NG KAPE</span><br> <span class="orange-txt">TAGAHUGAS NG PLATO</span></h1>

            <div class="btn-wrapper">
                <a href="">Let's connect</a>
                <a href="#portfolio">View Portfolio</a>
            </div>
        </div>
    </div>
</section>
    
<section id="about">
    <div class="header-section">
        <h2 class="dark big title">Team</h2>
        
        <hr>
    </div>

    <!-- Meet the team section -->
    <div class="container-grid-2">
        <div>
            <img class="img-team" src="{{ URL('storage/team-section-home.jpg')}}" alt="">
        </div>
        <div>
            <h2>
                Who we are OKAY
            </h2>

            <h3 class="purple-txt">
                BOBONG PROGRAMMER
            </h3>

            <ol>
                <li>Taga gawa ng website gamit ang simple php, html, css at JS</li>
                <li>Taga timpla ng kape sa teacher namin</li>
                <li>taga hugas ng pinggan pag walang maisip</li>
                <li>naglalaro ng ibat ibang games</li>
            </ol>
            
            <div class="btn-wrapper">
                <a href="">About</a>
            </div>
        </div>
    </div>
</section>

<!-- 4 grid layout skills on homepage -->
    <!-- Every div is a grid item -->
    <section id="portfolio">
        <div class="header-section">
            <h2 class="dark big title">Portfolio</h2>
            
            
            <hr>
             <p>Ito ung mga nagagawa ko para sa school shit</p>
        </div>
        
        <div class="container-grid-4">
     
            <div>
                <img src="{{ asset('storage/icon-box.jpg')}}" alt="">
                <h2>
                    Web Design
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur!
                </p>
            </div>
    
            <div>
                <img src="{{ URL('storage/icon-box.jpg')}}" alt="">
                <h2>
                    Web Development
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur!
                </p>
            </div>
    
            <div>
                <img src="{{ URL('storage/icon-box.jpg')}}" alt="">
                <h2>
                    Product Design
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur!
                </p>
            </div>
    
            <div>
                <img src="{{ URL('storage/icon-box.jpg')}}" alt="">
                <h2>
                    Creative Thinker
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur!
                </p>
            </div>
        </div>
    
       
    </section>
    
    
  <section id="skills">
    <div class="header-section">
        <h2 class="dark big title">Skills</h2>

        <hr>
    </div>

    <!-- Section of skills -->
  
    <div class="section-why-us">
        <div>
            <i class="fas fa-edit icon-why-us"></i>            
            <h2>
                Best Surgeon of the class
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </p>
        </div>

        <div>
            <i class="fas fa-code icon-why-us"></i>            
            <h2>
                Front-end web developer
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </p>
        </div>

       

        <div>
            <i class="fas fa-file-code icon-why-us"></i>  
            
            <h2>
                Back-end Web developer
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </p>
        </div>
        <div>
            <i class="far fa-keyboard icon-why-us"></i>   
            <h2>
                Optional Maintenance
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </p>
        </div>
        
        <div>
            <i class="fas fa-calculator icon-why-us"></i>      
            <h2>
                Analytical Calculation
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </p>
        </div>
        
        <div>
            <i class="fas fa-globe icon-why-us"></i>            
            <h2>
                Web Master Tools
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            </p>
        </div>
    </div>
</section>


<section id="contact">
    <div class="header-section">
        <h2 class="dark big title">Contact Us</h2>
        
        <hr>
    </div>

    <!-- Meet the team section -->
    <div class="container-grid-2">
        <div>
            <div style="margin-top: -20px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1529.6529190195492!2d125.35111726741005!3d6.750401008939298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f9b0fc5943dba7%3A0xa90bed4343632836!2sUniversity%20of%20Mindanao%20-%20Digos!5e1!3m2!1sen!2sph!4v1621688455204!5m2!1sen!2sph" width="650" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
            </div>
        </div>
        <div>
            <h3 class="">
                 Keep in Touch
            </h3>
            <p>
                Email us with any questions or inquiries or call (+639)38-966-7121. We would be happy to answer your questions and set up a meeting with you.
            </p>
            
            <div class="input">
                <label for="name">Name</label>
                <br>
                <input type="text" name="name">
                <br>
                <label for="email">Email</label>
                <br>
                <input type="email" name="email">
                <br>
                <label for="message">Message</label>
                <br>
                <textarea name="message" id="" rows="3"></textarea>
            </div>
            
            
            <div class="btn-wrapper">
                <a href="">Send</a>
            </div>
        </div>
    </div>
</section>


@endsection