@extends('master')

@section('content')

        <!-- Main -->
    <section class="main" id="home">
        <div class="page">
            <div class="wrapper">
                <div class="container">
                    <h1 class="heading">John Smith</h1>
                    <p>
                        <span class="rotate">Facilisis, Magna, Sapien</span>
                    </p>
                </div>
                <div class="arrow-down">
                    <a class="scroll" href="#about" id="scroll"><i class="fa fa-angle-double-down"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="section section-solid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="section-title">About</h3>
                    <div class="section-title-border"></div>
                </div>
            </div>

            <div class="row mt20">
                <div class="col-sm-4 wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0s">
                    <img src="assets/img/about/1.jpg" class="img-responsive about-img" />
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
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section section-solid-white" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="section-title">Services</h3>
                    <div class="section-title-border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0s">
                    <div class="feature-box-container">
                        <div class="feature-box">
                            <div class="icon">
                                <i class="fa fa-life-ring"></i>
                            </div>
                            <div class="description">
                                <h4>Quisque ullamcorper</h4>
                                <p>Nam pharetra, nunc eget faucibus
                                    vulputate, libero eros commodo
                                    nibh, non laoreet arcu est non dolor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-box-container">
                        <div class="feature-box">
                            <div class="icon">
                                <i class="fa fa-gift"></i>
                            </div>
                            <div class="description">
                                <h4>Sed non quam iaculis</h4>
                                <p>Vestibulum nec eros vestibulum,
                                    vehicula metus eu, mattis libero.
                                    Ut ac libero elementum, rutrum diam bibendum,
                                    consectetur metus.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-box-container">
                        <div class="feature-box">
                            <div class="icon">
                                <i class="fa fa-paint-brush"></i>
                            </div>
                            <div class="description">
                                <h4>Donec rutrum vitae</h4>
                                <p>Vestibulum nec eros vestibulum,
                                    vehicula metus eu, mattis libero.
                                    Ut ac libero elementum, rutrum diam bibendum,
                                    consectetur metus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0s">
                    <div class="feature-box-container">
                        <div class="feature-box">
                            <div class="icon">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div class="description">
                                <h4>Phasellus lobortis</h4>
                                <p>Fusce eu tellus vel tellus porttitor aliquet.
                                    Etiam ullamcorper laoreet lectus ut suscipit.
                                    Felis sed ante.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-box-container">
                        <div class="feature-box">
                            <div class="icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <div class="description">
                                <h4>Donec rutrum vitae</h4>
                                <p>Quisque luctus felis sed ante elementum condimentum.
                                    Praesent sagittis odio eu ante sollicitudin
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-box-container">
                        <div class="feature-box">
                            <div class="icon">
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="description">
                                <h4>Nunc consectetur</h4>
                                <p>Sed ipsum nulla, eleifend ac consectetur ut, vehicula sed lacus.
                                    Quisque lectus sem, vestibulum vel nibh.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section -->
    <section class="section" id="tweets">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s">
                    <i class="fa fa-twitter twitter-feed-icon"></i>
                    <span id="twitterFeed"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Resume -->
    <section id="resume" class="section section-solid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="section-title">Resume</h3>
                    <div class="section-title-border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>Fusce convallis vulputate diam, eu dictum lacus imperdiet nec. Cras ac viverra nunc, ac dictum arcu. In pulvinar semper odio eu auctor. Cras sed mauris ut dolor porta feugiat.</p>
                    <ul class="v-timeline mt50">
                        <li>
                            <h3 class="v-heading wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s"><i class="fa fa-paper-plane-o"></i> Work experience</h3>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0s" datetime="2013-04-15 13:15"><span>2013 - present</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-1"><i class="fa fa-minus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0s" >
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-1">Donec pulvinar elementum</a></h4>
                                <p id="toggle-1" class="collapse in">Sed pretium aliquet libero non luctus. Mauris quis ex at velit pharetra aliquet at at velit. Curabitur nec facilisis nisl.</p>
                            </div>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.1s" datetime="2013-04-16 21:30"><span>2011 - 2013</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-2"><i class="fa fa-plus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.1s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-2">Sed ultricies</a></h4>
                                <p id="toggle-2" class="collapse">Arcu non pellentesque ultrices, dui risus feugiat enim, sed iaculis nunc mauris ac justo. Maecenas viverra eu felis a consectetur.</p>
                            </div>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.2s" datetime="2013-04-17"><span>2010 - 2011</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-3"><i class="fa fa-plus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.2s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-3">Bibendum bibendum ultrices</a></h4>
                                <p id="toggle-3" class="collapse">Curabitur massa magna, lacinia vel condimentum eu, suscipit nec odio.</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="v-timeline mt50">
                        <li>
                            <h3 class="v-heading wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s"><i class="fa fa-graduation-cap"></i> Education</h3>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.3s" datetime="2013-04-18"><span>2008 - 2010</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-4"><i class="fa fa-plus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.3s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-4">Morbi euismod convallis</a></h4>
                                <p id="toggle-4" class="collapse">Ut erat turpis, vestibulum eget dictum eu, gravida non sapien.  Morbi nunc lectus, rhoncus quis nisi nec, volutpat hendrerit arcu.</p>
                            </div>
                        </li>
                        <li>
                            <time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.4s" datetime="2013-04-18"><span>2005 - 2008</span></time>
                            <div class="v-icon" data-toggle="collapse" data-target="#toggle-5"><i class="fa fa-minus"></i></div>
                            <div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.4s">
                                <h4><a href="#" data-toggle="collapse" data-target="#toggle-5">Cum sociis natoque</a></h4>
                                <p id="toggle-5" class="collapse in">Fusce mollis sem vitae massa rhoncus consectetur vitae nec odio. Aliquam sagittis commodo eros sit amet fringilla. In at dapibus massa, nec semper mi.</p>
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
                    <h4>Maecenas laoreet</h4>
                    <h6>Aliquam sit amet</h6>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%;">
                            92%
                        </div>
                    </div>
                    <h6>Donec ut mollis</h6>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                            86%
                        </div>
                    </div>
                    <h6>Sed augue</h6>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                            78%
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0s">
                    <h4>Knowledge</h4>
                    <ul class="fa-ul skills-ul">
                        <li><i class="fa-li fa fa-check"></i>Nullam at fringilla</li>
                        <li><i class="fa-li fa fa-check"></i>Etiam nec convallis</li>
                        <li><i class="fa-li fa fa-check"></i>Vivamus at purus</li>
                        <li><i class="fa-li fa fa-check"></i>Curabitur ante justo</li>
                        <li><i class="fa-li fa fa-check"></i>Aenean efficitur elit</li>
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
                        <p class="lang-description">English</p>
                        <span class="lang-level">native</span>
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
                        <p class="lang-description">Spanish</p>
                        <span class="lang-level">advanced</span>
                    </div>

                    <div class="lang-container">
                        <input type="text" value="60" class="dial"
                               data-width="100"
                               data-height="100"
                               data-fgColor="#869198"
                               data-skin="tron"
                               data-thickness=".2"
                               data-displayPrevious=true
                               data-readOnly=true
                               data-bgColor="#fff">
                        <p class="lang-description">German</p>
                        <span class="lang-level">intermediate</span>
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
                        <p class="lang-description">French</p>
                        <span class="lang-level">basic</span>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.1s">
                    <h4>Hobies</h4>
                    <ul class="fa-ul skills-ul">
                        <li><i class="fa-li fa fa-camera"></i>Nullam at fringilla</li>
                        <li><i class="fa-li fa fa-plane"></i>Etiam nec convallis</li>
                        <li><i class="fa-li fa fa-music"></i>Vivamus at purus</li>
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
                        <li><a href="#" class="btn btn-sm btn-theme-inverse active" data-group="all">All</a></li>
                        <li><a href="#" class="btn btn-sm btn-theme-inverse" data-group="branding">Branding</a></li>
                        <li><a href="#" class="btn btn-sm btn-theme-inverse" data-group="web">Web</a></li>
                        <li><a href="#" class="btn btn-sm btn-theme-inverse" data-group="app">App</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="GITheWall">
            <ul id="portfolio-container" class="text-center wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s">
                <li class="portfolio-item" data-groups='["all", "branding"]' data-contenttype="ajax" data-href="assets/ajax/1.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Mollis magna</span>
                                <span class="category">branding</span>
                            </a>
                            <img src="assets/img/portfolio/1.jpg" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "web"]' data-contenttype="ajax" data-href="assets/ajax/2.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Suspendisse potenti</span>
                                <span class="category">web</span>
                            </a>
                            <img src="assets/img/portfolio/2.jpg" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "app"]' data-contenttype="ajax" data-href="assets/ajax/1.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Sed hendrerit</span>
                                <span class="category">app</span>
                            </a>
                            <img src="assets/img/portfolio/3.jpg" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "branding"]' data-contenttype="ajax" data-href="assets/ajax/2.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Etiam commodo lacus</span>
                                <span class="category">branding</span>
                            </a>
                            <img src="assets/img/portfolio/4.jpg" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "web"]' data-contenttype="ajax" data-href="assets/ajax/1.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Ac tristique</span>
                                <span class="category">web</span>
                            </a>
                            <img src="assets/img/portfolio/5.jpg" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "app"]' data-contenttype="ajax" data-href="assets/ajax/2.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Ipsum tempor quis</span>
                                <span class="category">app</span>
                            </a>
                            <img src="assets/img/portfolio/6.jpg" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "branding"]' data-contenttype="ajax" data-href="assets/ajax/1.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Donec accumsan</span>
                                <span class="category">branding</span>
                            </a>
                            <img src="assets/img/portfolio/7.jpg" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "web"]' data-contenttype="ajax" data-href="assets/ajax/2.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Arcu id porta</span>
                                <span class="category">web</span>
                            </a>
                            <img src="assets/img/portfolio/8.jpg" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "app"]' data-contenttype="ajax" data-href="assets/ajax/1.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Curabitur posuere</span>
                                <span class="category">app</span>
                            </a>
                            <img src="assets/img/portfolio/9.jpg" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
                <li class="portfolio-item" data-groups='["all", "branding"]' data-contenttype="ajax" data-href="assets/ajax/2.html">
                    <figure>
                        <div class="portfolio-img">
                            <a href="#" class="overlay">
                                <span class="title">Lacus id sapien</span>
                                <span class="category">branding</span>
                            </a>
                            <img src="assets/img/portfolio/10.jpg" alt="" class="img-responsive">
                        </div>
                    </figure>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a href="#" class="btn btn-theme-inverse mt40 wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0.5s" id="portfolio-more">More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Facts -->
    <section id="facts" class="section">
        <div class="container">
            <div class="row text-center wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s">
                <div class="col-sm-3">
                    <h1 class="counter">5</h1>
                    <p>years experience</p>
                </div>
                <div class="col-sm-3">
                    <h1 class="counter">352</h1>
                    <p>project delivered</p>
                </div>
                <div class="col-sm-3">
                    <h1 class="counter">2148</h1>
                    <p>likes</p>
                </div>
                <div class="col-sm-3">
                    <h1 class="counter">142</h1>
                    <p>winning awards</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="section-title">Contact</h3>
                    <div class="section-title-border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0s">
                    <p>
                        <strong>Integer suscipit</strong> gravida felis quis ornare.
                        Pellentesque consectetur dui eu nulla vestibulum,
                        ac euismod diam auctor.
                    </p>
                    <ul class="list-contacts">
                        <li><i class="fa fa-phone"></i> (123) 456-7890</li>
                        <li><i class="fa fa-mobile-phone"></i> (123) 987-6543</li>
                        <li><i class="fa fa-map-marker"></i> 1795 Folsom Ave, Suite 600<br> San Francisco, CA 94107</li>
                        <li><i class="fa fa-envelope-o"></i> <a href="mailto:info@SeventyFour.com">info@seventyfour.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0s">
                    <form class="form-horizontal" action="assets/php/contactForm.php" method="post" role="form" id="contactForm">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="contactEmail" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea name="message" class="form-control" rows="8" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-theme ladda-button" data-style="expand-left">
                                    <span class="ladda-label">Submit</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@stop