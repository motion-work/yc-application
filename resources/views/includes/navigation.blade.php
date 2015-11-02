<!-- Menu -->
<nav class="navbar navbar-default" role="navigation" id="nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-reorder"></i>
            </button>
            <a class="navbar-brand" href="auth/logout">
                <h5>{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }} <i class="fa fa-sign-out"></i> </h5>
            </a>
        </div>

        <div class="collapse navbar-collapse navbar-right" id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="#home">Start <span class="sr-only">start</span></a></li>
                <li><a href="#about">Über mich</a></li>
                <li><a href="#resume">Lebenslauf</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#video">Video</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>