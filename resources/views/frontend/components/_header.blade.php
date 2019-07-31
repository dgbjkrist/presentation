    <header>
        {{--         <div id="loading">
            <div class="image-load">
                <!-- <img src="/front/img/icons/Marty.gif" alt="loader" /> -->
            </div>
        </div> --}}
        <nav id="mmenu">
            <ul>
                <li>
                    <a href="{{ route('accueil') }}">ACCUEIL</a>

                </li>
                <li>
                    <a href="https://safeassurance.eu-gb.mybluemix.net/#category">ASSURANCE</a>
                    <!-- <ul>
                        <li>
                            <a href="services-detail-1.html">CAR INSURANCE</a>
                        </li>
                        
                    </ul> -->
                </li>
                <li>
                    <a href="">PRODUITS</a>
                    <!-- <ul>
                        <li>
                            <a href="get-a-quote-1.html">QUOTE LAYOUT 1</a>
                        </li>

                    </ul> -->
                </li>
                <li>
                    <a href="{{ route('equipe') }}">NOTRE EQUIPE</a>
                </li>

                <li>
                    <a href="">DECLARER UN SINISTRE</a>

                </li>
                <li>
                    <a href="">CONTACTEZ NOUS</a>
                </li>
            </ul>
        </nav>
        <!-- <div class="top-bar">
            <div class="container">
                <p class="greeting">Welcome to insurance company, we're here to help you</p>
                <div class="quick-link">
                    <a href="get-a-quote-1.html">Get a Quote</a>|
                    <a href="agent-list-1.html">Find an Agent</a>|
                    <a href="#">Pricing</a>|
                    <a href="about.html">FAQS</a>
                </div>
            </div>
        </div> -->
        <div class="header-main">
            <div class="container">
                <div class="logo">
                    <a href="">
                        <img class="img-responsive" src="/front/img/icons/logofita1.png" alt="Logo" />
                    </a>
                </div>
                <div class="contact-widget">
                    <div class="contact-list hidden-lg-tablet">
                        <div class="item">
                            <i class="lnr lnr-phone-handset"></i>
                            <div class="text">
                                <p class="top">Besoin d'aide?</p>
                                <p class="bot">+225 22 001 422</p>
                            </div>
                        </div>
                        <div class="item">
                            <i class="lnr lnr-map-marker"></i>
                            <div class="text">
                                <p class="top">2 plateaux Hotel Aghien</p>
                                <p class="bot">à côté des affaires maritimes</p>
                            </div>
                        </div>
                        <div class="item">
                            <i class="lnr lnr-clock"></i>
                            <div class="text">
                                <p class="top">08:00  – 18:00 </p>
                                <p class="bot">Lun - Ven</p>
                            </div>
                        </div>
                    </div>
                    <button class="au-btn au-btn-sm au-btn-orange hidden-md-phone">declarer un sinistre</button>
                </div>
            </div> 
        </div>
        <div class="navbar-main">
            <div class="container">
                <div class="navbar-holder">
                    <a class="navbar-toggle collapsed" href="#mmenu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <nav class="navbar-menu">
                        <ul class="menu">
                            <li class="dropdown">
                                <a href="{{ route('accueil') }}">ACCUEIL</a>
                            </li>
                            <li class="">
                                <a href="https://safeassurance.eu-gb.mybluemix.net/#category">ASSURANCE</a>

                            </li>
                            <li class="dropdown">
                                <a href="">PRODUITS</a>
                                <!-- <ul class="dropdown-menu">
                                    <li>
                                        <a href="get-a-quote-1.html">Get A Quote 1</a>
                                    </li>
                                    <li>
                                        <a href="get-a-quote-2.html">Get A Quote 2</a>
                                    </li>
                                </ul> -->
                            </li>
                            <li>
                                <a href="{{ route('equipe') }}">NOTRE EQUIPE</a>
                            </li>

                            <!-- <li>
                                <a href="about.html">declarer un sinitre</a>
                            </li> -->



                            <li class="dropdown">
                                <a href="{{ route('contact') }}">Contactez nous</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="search">
                        <form>
                            <input class="search-input" type="text" placeholder="Search" />
                            <input class="search-submit" type="button" value="search" />
                            <span class="search-icon"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </header