@extends('master')

@section('content')

        <!-- Main -->
    <section class="main" id="home">
        <div class="page">
            <div class="wrapper">
                <div class="container">
                    <h1 class="heading">Natthakit Khamso</h1>
                    <p>
                        <span class="rotate">Informatiker, 3. Lehrjahr, Applikationsentwickler</span>
                    </p>
                </div>
                <div class="arrow-down">
                    <a class="scroll" href="#about" id="scroll"><i class="fa fa-angle-double-down"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Über mich -->
    <section id="about" class="section section-solid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="section-title">Über mich</h3>
                    <div class="section-title-border"></div>
                </div>
            </div>

            <div class="row mt20">
                <div class="col-sm-4 wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0s">
                    <img src="assets/img/logo/bewerbungsfoto_square.png" class="img-responsive about-img" />
                </div>
                <div class="col-sm-8 wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0s">
                    <p class="lead">
                        Nunc eget congue dui, in venenatis elit. Nam purus urna,
                        mollis a dolor nec, rutrum gravida tellus.
                    </p>
                    <p>
                        Aenean purus libero, egestas sed nisl sed, posuere fermentum tortor.
                        Mauris vitae orci nisl. Phasellus dapibus dapibus tincidunt. Integer
                        nec risus blandit, scelerisque diam eget, luctus urna. In pulvinar
                        vel arcu in pretium. Vestibulum vitae purus mi. Mauris in luctus quam,
                        ac placerat tortor. Quisque malesuada blandit rhoncus. Sed sit amet
                        suscipit velit. Nullam massa augue, bibendum eu dolor pretium, rutrum.
                    </p>
                    <p>
                        Sed dignissim fermentum elit. Integer placerat massa tincidunt, sodales
                        risus id, volutpat ante. Suspendisse mattis vestibulum nibh, vel mattis
                        enim commodo vehicula. Phasellus non lectus aliquam diam dignissim imperdiet
                        at dapibus lectus.
                    </p>
                    <p>
                        Sed dignissim fermentum elit. Integer placerat massa tincidunt, sodales
                        risus id, volutpat ante. Suspendisse mattis vestibulum nibh, vel mattis
                        enim commodo vehicula. Phasellus non lectus aliquam diam dignissim imperdiet
                        at dapibus lectus.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Lebenslauf -->
    <section id="resume" class="section section-solid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="section-title">Lebenslauf</h3>
                    <div class="section-title-border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <ul class="v-timeline mt50">
                        <li>
                            <h3 class="v-heading wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s"><i class="fa fa-paper-plane-o"></i> Absolvierte Qualiprojekte</h3>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.4s" datetime="2013-04-18"><span>Momentan</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-1"><i class="fa fa-minus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.4s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-1">Ruby on Rails Entwickler bei Netnear IT</a></h4>
                                <p id="toggle-1" class="collapse in">Safe Plattform weiterentwickeln</p>
                            </div>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.4s" datetime="2013-04-18"><span>10. September 2015</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-0"><i class="fa fa-plus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.4s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-0">ICT Skills 2015</a></h4>
                                <p id="toggle-0" class="collapse">Swisscom Stand - Standbetreuung, Kurzprojekt bei Julien Hautle</p>
                            </div>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.1s" datetime="2013-04-16 21:30"><span>Januar 2015 - Juli 2015</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-2"><i class="fa fa-plus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.1s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-2">PHP Entwickler bei Banking Trends & Innovation</a></h4>
                                <p id="toggle-2" class="collapse">Fintech Startups Portal aufgebaut</p>
                            </div>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.2s" datetime="2013-04-17"><span>April 2014 - Dezember 2014</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-3"><i class="fa fa-plus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.2s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-3">C# Entwickler bei Campaigning & Dialog Design</a></h4>
                                <p id="toggle-3" class="collapse">CRM Monitor betrieben und weiterwentwickelt</p>
                            </div>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.2s" datetime="2013-04-17"><span>20./21. September 2014</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-4"><i class="fa fa-plus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.2s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-4">Swiss Skills Bern 2014</a></h4>
                                <p id="toggle-4" class="collapse">Standbetreuung, Kurzprojekt bei Julien Hautle</p>
                            </div>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.2s" datetime="2013-04-17"><span>März 2014</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-5"><i class="fa fa-plus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.2s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-5">Testing Next Version Of Swisscom iO</a></h4>
                                <p id="toggle-5" class="collapse">Kurzprojekt beim Swisscom iO Team</p>
                            </div>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.2s" datetime="2013-04-17"><span>12. - 14. September 2013</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-6"><i class="fa fa-plus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.2s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-6">Move In Christmas</a></h4>
                                <p id="toggle-6" class="collapse">Shop Bubenbergplatz Verkaufsberatung, Kurzprojekt</p>
                            </div>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.2s" datetime="2013-04-17"><span>August 2013 - Februar 2014</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-7"><i class="fa fa-plus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.2s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-7">1st/2nd Level Support - Swisscom Service Desk</a></h4>
                                <p id="toggle-7" class="collapse">Technischer Kundensupport für interne Mitarbeiter</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="v-timeline mt50">
                        <li>
                            <h3 class="v-heading wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s"><i class="fa fa-graduation-cap"></i> Schulbildung</h3>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.3s" datetime="2013-04-18"><span>2012 - 2013</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-8"><i class="fa fa-plus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.3s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-8">Berufsvorbereitendes Schuljahr BFF Bern</a></h4>
                            </div>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.3s" datetime="2013-04-18"><span>2009 - 2012</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-9"><i class="fa fa-plus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.3s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-9">Sekundarstufe, Schule Bümpliz</a></h4>
                            </div>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.3s" datetime="2013-04-18"><span>2007 - 2009</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-10"><i class="fa fa-plus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.3s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-10">Primarstufe, Schule Kleefeld</a></h4>
                            </div>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.3s" datetime="2013-04-18"><span>2003 - 2007</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-11"><i class="fa fa-plus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.3s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-11">Primarstufe, Schule Weidteile</a></h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section class="section" id="skills">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="section-title">Skills</h3>
                    <div class="section-title-border"></div>
                </div>
            </div>
            <div class="row personal-skills">
                <div class="col-sm-8 wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0s">
                    <h4>Sozialkompetenzen</h4>
                    <h6>Empathie</h6>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                            100%
                        </div>
                    </div>
                    <h6>Kontaktfreudig</h6>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                            100%
                        </div>
                    </div>
                    <h6>Offenheit</h6>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                            100%
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0s">
                    <h4>Vertiefte Fachkompetenzen</h4>
                    <ul class="fa-ul skills-ul">
                        <li><i class="fa-li fa fa-check"></i>Webentwicklung</li>
                        <li><i class="fa-li fa fa-check"></i>Objektorientiert Programmieren</li>
                        <li><i class="fa-li fa fa-check"></i>HTML5/CSS3</li>
                        <li><i class="fa-li fa fa-check"></i>PHP</li>
                        <li><i class="fa-li fa fa-check"></i>Datenbankdesign</li>
                        <li><i class="fa-li fa fa-check"></i>Laravel Framework</li>
                        <li><i class="fa-li fa fa-check"></i>AngularJS</li>
                        <li><i class="fa-li fa fa-check"></i>Bootstrap</li>
                    </ul>
                </div>
            </div>
            <div class="row personal-skills">
                <div class="col-sm-8 wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.1s">
                    <h4>Languages</h4>
                    <div class="lang-container">
                        <input type="text" value="100" class="dial"
                               data-width="100"
                               data-height="100"
                               data-fgColor="#869198"
                               data-skin="tron"
                               data-thickness=".2"
                               data-displayPrevious=true
                               data-readOnly=true>
                        <p class="lang-description">Deutsch</p>
                        <span class="lang-level">nativ</span>
                    </div>

                    <div class="lang-container">
                        <input type="text" value="80" class="dial"
                               data-width="100"
                               data-height="100"
                               data-fgColor="#869198"
                               data-skin="tron"
                               data-thickness=".2"
                               data-displayPrevious=true
                               data-readOnly=true>
                        <p class="lang-description">Englisch</p>
                        <span class="lang-level">Cambridge First Zertifikat</span>
                    </div>

                    <div class="lang-container">
                        <input type="text" value="50" class="dial"
                               data-width="100"
                               data-height="100"
                               data-fgColor="#869198"
                               data-skin="tron"
                               data-thickness=".2"
                               data-displayPrevious=true
                               data-readOnly=true
                               data-bgColor="#fff">
                        <p class="lang-description">Thai</p>
                        <span class="lang-level">Durchschnitt</span>
                    </div>

                    <div class="lang-container">
                        <input type="text" value="25" class="dial"
                               data-width="100"
                               data-height="100"
                               data-fgColor="#869198"
                               data-skin="tron"
                               data-thickness=".2"
                               data-displayPrevious=true
                               data-readOnly=true
                               data-bgColor="#fff">
                        <p class="lang-description">Französisch</p>
                        <span class="lang-level">Basic</span>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.1s">
                    <h4>Hobbies</h4>
                    <ul class="fa-ul skills-ul">
                        <li><i class="fa-li fa fa-child"></i>Fitness</li>
                        <li><i class="fa-li fa fa-camera"></i>Fotografie</li>
                        <li><i class="fa-li fa fa-code"></i>Webseiten realisieren</li>
                        <li><i class="fa-li fa fa-newspaper-o"></i>Lesen (<a href="http://www.medium.com" target="_blank">Medium</a>, <a href="http://www.theverge.com" target="_blank">TheVerge</a>, <a href="http://www.golem.de" target="_blank">Golem</a>)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="section section-solid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="section-title">Portfolio</h3>
                    <div class="section-title-border"></div>
                </div>
            </div>
            <div class="row wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s">
                <div class="col-sm-12 text-center">
                    <ul id="filter" class="list-inline filter-tags">
                        <li><a href="#" class="btn btn-sm btn-theme-inverse active" data-group="all">Alle</a></li>
                        <li><a href="#" class="btn btn-sm btn-theme-inverse" data-group="project">Qualiprojekte</a></li>
                        <li><a href="#" class="btn btn-sm btn-theme-inverse" data-group="short-project">Kurzprojekte</a></li>
                        <li><a href="#" class="btn btn-sm btn-theme-inverse" data-group="other">Sonstiges</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="GITheWall">
            <ul id="portfolio-container" class="text-center wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s">

                <li class="portfolio-item" data-groups='["all", "project"]' data-contenttype="ajax" data-href="assets/ajax/ruby.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Ruby on Rails Entwickler</span>
                                <span class="category">Netnear IT</span>
                            </a>
                            <img src="{{asset('assets/img/qualiprojekte/ruby-on-rails.jpg')}}" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "project"]' data-contenttype="ajax" data-href="assets/ajax/csharp.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">C# Entwickler</span>
                                <span class="category">Campaigning & Dialog Design</span>
                            </a>
                            <img src="{{asset('assets/img/qualiprojekte/csharp.png')}}" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "short-project"]' data-contenttype="ajax" data-href="assets/ajax/ict-skills.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">ICT Skills 2015</span>
                                <span class="category">Swisscom Standbetreuer</span>
                            </a>
                            <img src="{{asset('assets/img/qualiprojekte/ict-skills.jpg')}}" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "project"]' data-contenttype="ajax" data-href="assets/ajax/php.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">PHP Entwickler</span>
                                <span class="category">Banking Trends & Innovation</span>
                            </a>
                            <img src="{{asset('assets/img/qualiprojekte/php.jpg')}}" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "short-project"]' data-contenttype="ajax" data-href="assets/ajax/swiss-skills.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Swiss Skills 2014</span>
                                <span class="category">Swisscom Standbetreuer</span>
                            </a>
                            <img src="{{asset('assets/img/qualiprojekte/swiss-skills.jpg')}}" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "short-project"]' data-contenttype="ajax" data-href="assets/ajax/io.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Testing Next Version Of Swisscom iO</span>
                                <span class="category">Swisscom iO Team</span>
                            </a>
                            <img src="{{asset('assets/img/qualiprojekte/io.png')}}" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "short-project"]' data-contenttype="ajax" data-href="assets/ajax/shop.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Move In Christmas</span>
                                <span class="category">Verkaufsberatung</span>
                            </a>
                            <img src="{{asset('assets/img/qualiprojekte/shop.jpg')}}" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "project"]' data-contenttype="ajax" data-href="assets/ajax/support.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">1st/2nd Level Support - Swisscom Service Desk</span>
                                <span class="category">Technischer Kundensupport</span>
                            </a>
                            <img src="{{asset('assets/img/qualiprojekte/support.jpg')}}" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "other"]' data-contenttype="ajax" data-href="assets/ajax/hackathon.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Postfinance Hackathon 2015</span>
                                <span class="category">Teilnehmer</span>
                            </a>
                            <img src="{{asset('assets/img/qualiprojekte/post4.jpg')}}" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>

            </ul>
        </div>
    </section>

    <!-- Video -->
    <section id="video" class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="section-title">Video</h3>
                    <div class="section-title-border"></div>
                </div>
            </div>
            <div class="row text-center wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s">
                <div class="col-sm-12">
                    <iframe width="720" height="480" src="https://www.youtube.com/embed/mDotS5BDqRM" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontakt -->
    <section id="contact" class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="section-title">Kontakt</h3>
                    <div class="section-title-border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0s">
                    <p>
                        Bei Fragen oder Unklarheiten zögert bitte nicht mich zu konktaktieren.
                    </p>
                    <ul class="list-contacts">
                        <li><i class="fa fa-phone"></i> 079 196 46 45</li>
                        <li><i class="fa fa-group"></i> GHR-DEV-NEX-R1-BE1</li>
                        <li><i class="fa fa-graduation-cap"></i> Schultage: Dienstag, Mittwoch</li>
                        <li><i class="fa fa-map-marker"></i> Itt-Ey10<br> 3063 Ittigen</li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:natthakit.khamso@swisscom.com">natthakit.khamso@swisscom.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@stop