<!-- Navigation -->
<style>
    ul li a:hover{
        color:orange;
        padding: 4px;
        background: rgb(214, 214, 219);   
    text-decoration: underline;
    }
    .nav-bar{
        background: #dbd9d9;
    }
    .logo img{
        width: 130px;
    }
    .logo{
    display: block;
    position: absolute;
    left: 80px;
    top: -50px;
    
    
}
</style>
<nav class="top-menu-container nav-bar">
    <div class="logo">
        <a href="#home"><img src="storage/logo.png" alt="" title="Logo personal portfolio"></a>
        {{-- <a href="#home">
            <img 
            src="storage/logo.png";
            alt="Logo personal portfolio"
            title="Logo personal portfolio"
            />
        </a> --}}
    </div>

    <ul>
        <li>
            {{-- <a href="/" class="{{ request()->is('/') ? 'active' : ''}}">Home</a> --}}
            <a href="#home">Home</a>
        </li>
        <li>
            {{-- <a href="about" class="{{ request()->is('about') ? 'active' : ''}}">About</a> --}}
            <a href="#about">About</a>
        </li>
        <li>
            {{-- <a href="portfolio"  class="{{ request()->is('portfolio') ? 'active' : ''}}">Portfolio</a> --}}
            <a href="#portfolio">Portfolio</a>
        </li>
        <li>
            {{-- <a href="skills" class="{{ request()->is('skills') ? 'active' : ''}}">Achievement</a> --}}
            <a href="#skills">Skills</a>
        </li>
        <li>
            {{-- <a href="contact" class="{{ request()->is('contact') ? 'active' : ''}}">Contact</a> --}}
            <a href="#contact">Contact</a>
        </li>
    </ul>
</nav>