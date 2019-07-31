@extends('frontend.layouts.frontend')

@section('title', 'Safe ~ Assurance')

@section('css')
<link rel="stylesheet" href="/front/css/index.css">
@endsection




@section('body')

<div class="page-content home-page-1">
    <!-- START REVOLUTION SLIDER 5.0-->
    <div class="rev_slider_wrapper slider-primary">
        <div class="rev_slider" id="rev_slider_1" style="display:none;">
            <ul>
                <li class="slider-item-1" data-transition="slidevertical">
                    <!-- MAIN IMAGE-->
                    <img class="rev-slidebg" src="/front/img/slider/slider-1.jpg" alt="#" />
                    <div class="tp-caption tp-resizeme slider-title" data-frames="[{&quot;delay&quot;:300,&quot;speed&quot;:600,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                    data-x="left" data-hoffset="0" data-y="top" data-voffset="115">sinistre</div>
                    <div class="tp-caption tp-resizeme slider-subtitle" data-frames="[{&quot;delay&quot;:600,&quot;speed&quot;:600,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                    data-x="left" data-y="top" data-hoffset="0" data-voffset="210">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    <br/>Quisque tincidunt ultricies accumsan. Suspendisse</div>
                    <button class="tp-caption tp-resizeme au-btn au-btn-white" data-frames="[{&quot;delay&quot;:300,&quot;speed&quot;:600,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                    data-x="left" data-hoffset="0" data-y="top" data-voffset="320">Declarer un sinistre</button>
                </li>
                <li class="slider-item-2" data-transition="slidevertical">
                    <!-- MAIN IMAGE-->
                    <img class="rev-slidebg" src="/front/img/slider/slider-2.jpg" alt="#" />
                    <div class="tp-caption slider-title" data-frames="[{&quot;delay&quot;:300,&quot;speed&quot;:600,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                    data-x="center" data-hoffset="0" data-y="top" data-voffset="100">Assurance Multiriques Habitation
                    <!-- <br/>Life Insurance Company -->
                </div>
                <div class="tp-caption slider-subtitle" data-frames="[{&quot;delay&quot;:600,&quot;speed&quot;:600,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                data-x="center" data-hoffset="0" data-y="top" data-voffset="250">We to help you find the right insurance provider to meet all of your needs
                <br/>and offer an affordable price that everyone is happy with.</div>
                <button class="tp-caption au-btn au-btn-blue tp-resizeme" data-frames="[{&quot;delay&quot;:300,&quot;speed&quot;:600,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                data-x="center" data-hoffset="-85" data-y="top" data-voffset="350">Souscrire</button>
            </li>
            <li class="slider-item-3 slider-item-2" data-transition="slidevertical">
                <!-- MAIN IMAGE-->
                <img class="rev-slidebg" src="/front/img/slider/slider-3.jpg" alt="#" />
                <div class="tp-caption slider-title" data-frames="[{&quot;delay&quot;:300,&quot;speed&quot;:600,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                data-x="center" data-hoffset="0" data-y="top" data-voffset="100">Assurance Auto
                <!-- <br/>Life Insurance Company -->
            </div>
            <div class="tp-caption slider-subtitle" data-frames="[{&quot;delay&quot;:600,&quot;speed&quot;:600,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
            data-x="center" data-hoffset="0" data-y="top" data-voffset="250">We to help you find the right insurance provider to meet all of your needs
            <br/>and offer an affordable price that everyone is happy with.</div>

            <button class="tp-caption au-btn au-btn-blue tp-resizeme" data-frames="[{&quot;delay&quot;:300,&quot;speed&quot;:600,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
            data-x="center" data-hoffset="85" data-y="top" data-voffset="350">Souscrire</button>
        </li>
    </ul>
    <!-- END REVOLUTION SLIDER-->
</div>
</div>
<!-- END OF SLIDER WRAPPER-->
<!-- PRODUCT, STYLE 1-->
<section class="product product-layout style-1">
    <div class="container">
        <div class="heading">
            <h3 id="category">ASSURANCES</h3>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="product-item style-1 match-item">
                    <a class="image" href="{{ route('assuranceh') }}">
                        <img class="/front/img-responsive" src="/front/img/product/product-1.jpg" alt="Car Insurance" />
                    </a>
                    <div class="title">
                        <a href="{{ route('assuranceh') }}">Assurance objets connectés</a>
                    </div>
                    <div class="content">
                        <p>Insurance fraud puts an extra $70 on the price of every annual car insurance premium.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product-item style-1 match-item">
                    <a class="image" href="{{ route('assuranceh') }}">
                        <img class="/front/img-responsive" src="/front/img/product/product-3.jpg" alt="Home Insurance" />
                    </a>
                    <div class="title">
                        <a href="{{ route('assuranceh') }}">Assurance Habitation</a>
                    </div>
                    <div class="content">
                        <p>We'll rebuild or repair your home if it's damaged or destroyed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product-item style-1 match-item">
                    <a class="image" href="{{ route('assuranceh') }}">
                        <img class="/front/img-responsive" src="/front/img/product/product-4.jpg" alt="Travel Insurance" />
                    </a>
                    <div class="title">
                        <a href="{{ route('assuranceh') }}">Assurance Voyage</a>
                    </div>
                    <div class="content">
                        <p>We can help you find the best plan for your trip and your budget.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product-item style-1 match-item">
                    <a class="image" href="{{ route('assuranceh') }}">
                        <img class="/front/img-responsive" src="/front/img/product/product-5.jpg" alt="Business Insurance" />
                    </a>
                    <div class="title">
                        <a href="{{ route('assuranceh') }}">Assurance Perte</a>
                    </div>
                    <div class="content">
                        <p>In truth, there are certain forms of insurance that are an absolute requirement for all businesses</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product-item style-1 match-item">
                    <a class="image" href="{{ route('assuranceh') }}">
                        <img class="/front/img-responsive" src="/front/img/product/product-6.jpg" alt="Landlord Insurance" />
                    </a>
                    <div class="title">
                        <a href="{{ route('assuranceh') }}">Assurance Santé</a>
                    </div>
                    <div class="content">
                        <p>Our rental property insurance protects your property from damages</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product-item style-1 match-item">
                    <a class="image" href="{{ route('assuranceh') }}">
                        <img class="/front/img-responsive" src="/front/img/product/product-2.jpg" alt="Life Insurance" />
                    </a>
                    <div class="title">
                        <a href="{{ route('assuranceh') }}">Assurance Responsabilite civile</a>
                    </div>
                    <div class="content">
                        <p>If you have a partner and children, then the two of you should think about life insurance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END PRODUCT, STYLE 1-->
<!-- CALL TO ACTION, STYLE 1-->

<!-- END CALL TO ACTION, STYLE 1-->


<!-- TESTINMONIAL, STYLE 1-->
        <!-- <section class="testinmonials testinmonials-layout style-1">
            <div class="container">
                <div class="heading">
                    <h3 class="heading-section">What Our Customers Say</h3>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6"> -->
                        <!-- testinmonials item-->
                        <!-- <div class="testinmonial-item style-1 match-item">
                            <div class="content">
                                <p>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia
                                    massa</p>
                            </div>
                            <div class="personal">
                                <div class="avatar">
                                    <img src="/front/img/avatar/avatar-1.jpg" alt="Cheryl Cruz" />
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <span>Cheryl Cruz</span>
                                    </div>
                                    <div class="title-job">
                                        <span>Car Owner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6"> -->
                        <!-- testinmonials item-->
                       <!--  <div class="testinmonial-item style-1 match-item">
                            <div class="content">
                                <p>Vestibulum ultricies cursus feugiat. Vestibulum scelerisque posuere neque. Phasellus tortor lacus, tincidunt nec varius ut, tempor eget massa. Aenean non lorem ex. Phasellus dapibus eu justo dapibus commodo.</p>
                            </div>
                            <div class="personal">
                                <div class="avatar">
                                    <img src="/front/img/avatar/avatar-2.jpg" alt="Linda Campbell" />
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <span>Linda Campbell</span>
                                    </div>
                                    <div class="title-job">
                                        <span>Car Owner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6"> -->
                        <!-- testinmonials item-->
                        <!-- <div class="testinmonial-item style-1 match-item">
                            <div class="content">
                                <p>Etiam et purus in dui dignissim dictum quis efficitur libero. Sed fringilla, augue vel sollicitudin bibendum, ligula elit rhoncus lorem, a egestas diam augue sed enim. In eget luctus ante. Mauris ut cursus nunc, vitae hendrerit</p>
                            </div>
                            <div class="personal">
                                <div class="avatar">
                                    <img src="/front/img/avatar/avatar-3.jpg" alt="John Walker" />
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <span>John Walker</span>
                                    </div>
                                    <div class="title-job">
                                        <span>Home Owner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- END TESTINMONIAL, STYLE 1-->
        <!-- CONTACT, STYLE 1-->

<!--         <section class="contact contact-layout style-1">
            <div class="google-map" id="google_map"></div>
        </section> -->
        <!-- <div style="min-height: 500px" class="google-map" id="google_map" data-pin="/front/img/icons/ascoma.png" data-map-x="5.36826" data-map-y="-3.98962" data-scrollwheel="false" data-draggable="0"></div> -->

        <!-- <section class="contact contact-layout style-1">
            
            <div class="container">
                <div class="contact-block clearfix">
                    <div class="contact-form w-50 w-sm-100">
                        <div class="head-contact-form">
                            <i class="fa fa-envelope-o"></i>
                            <div class="heading">
                                <h4>Send Us a Message</h4>
                            </div>
                        </div>
                        <form class="contact-form-body" name="contactform" method="post" action="includes/contact-form.php">
                            <div class="contact-form-item">
                                <span class="input-title">Your Name</span>
                                <input class="au-form-control au-form-radius" type="text" name="name" placeholder="Ex. John Smith" />
                            </div>
                            <div class="contact-form-item">
                                <span class="input-title">Your Phone</span>
                                <input class="au-form-control au-form-radius" type="text" name="phone" placeholder="Ex. 555-555-5555" />
                            </div>
                            <div class="contact-form-item">
                                <span class="input-title">Your Email</span>
                                <input class="au-form-control au-form-radius" type="text" name="email" placeholder="Ex. john.smith@email.com" />
                            </div>
                            <div class="contact-form-item">
                                <span class="input-title">Message</span>
                                <textarea class="au-form-control au-form-radius" rows="4" name="msg"></textarea>
                            </div>
                            <button class="au-btn au-btn-orange" type="submit">Submit Form</button>
                        </form>
                    </div>
                    <div class="contact-info w-50 w-sm-100">
                        <div class="head-contact-info">
                            <i class="fa fa-map-marker"></i>
                            <div class="heading">
                                <h4>Contact Infomation</h4>
                            </div>
                        </div>
                        <ul class="list-contact-info">
                            <li>
                                <span class="bold">A:</span>
                                <span>8th floor, 379 Hudson St, New York, NY 10018</span>
                            </li>
                            <li>
                                <span class="bold">P:</span>
                                <span>(+1) 96 716 6879</span>
                            </li>
                            <li>
                                <span class="bold">F:</span>
                                <span>(+1) 96 716 6879</span>
                            </li>
                            <li>
                                <span class="bold">E:</span>
                                <span>contact@site.com</span>
                            </li>
                        </ul>
                        <div class="time-open">
                            <div class="head-time-open">
                                <i class="fa fa-clock-o"></i>
                                <div class="heading">
                                    <h4>Hours of Operation</h4>
                                </div>
                            </div>
                            <ul class="list-time-open">
                                <li>
                                    <span class="day">Monday</span>
                                    <span class="time">08:00 AM - 05:00 PM</span>
                                </li>
                                <li>
                                    <span class="day">Tuesday</span>
                                    <span class="time">09:00 AM - 05:00 PM</span>
                                </li>
                                <li>
                                    <span class="day">Wednesday</span>
                                    <span class="time">09:00 AM - 03:00 PM</span>
                                </li>
                                <li>
                                    <span class="day">Thursday</span>
                                    <span class="time">09:00 AM - 05:00 PM</span>
                                </li>
                                <li>
                                    <span class="day">Friday</span>
                                    <span class="time">10:00 AM - 04:00 PM</span>
                                </li>
                                <li>
                                    <span class="day">Saturday</span>
                                    <span class="time">Appointment Only</span>
                                </li>
                                <li>
                                    <span class="day">Sunday</span>
                                    <span class="time">Appointment Only</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- END CONTACT, STYLE 1-->
        <!-- PARTNER-->



        <section class="component component--full v-gutter-lg infographicVertical pourpre bg-blanc" style="background-color: #dbdbdb">
          <div class="row row--title">
            <h2>En cas de sinistre, une assurance, <br>ça change tout !</h2>
        </div>

        <!-- <div class="row row--subtitle">
            <p>Utile et essentielle : l’assurance directe vous propose également les solutions et les services indispensables en cas de sinistre, au moment où vous en avez le plus besoin.</p>
        </div> -->

        <div class="row row--object typo-content">
            <ul class="list">


              <li class="element">
                <a href="" target="_self" class="link link--icon">
                  <img data-src="/front/img/icons/concseillerclient.png" alt="Conseiller dédié Direct Assurance" class="icon lazyLoading"/>
                  <img data-src="/front/img/icons/concseillerclient.png" alt="Conseiller dédié Direct Assurance" class="hover-icon lazyloading"/>
              </a>
              <div></div>
              <a href="" target="_self" class="link link--label">
                  <span class="label">Conseiller dédié</span>
              </a>
          </li>



          <li class="element">
            <a href="" target="_self" class="link link--icon">
              <img data-src="/front/img/icons/assistanceadomicile.png" class="icon lazyLoading"/>
              <img data-src="/front/img/icons/assistanceadomicile.png" alt="Services à domicile" class="hover-icon lazyloading"/>
          </a>
          <div></div>
          <a href="" target="_self" class="link link--label">
              <span class="label">Services à domicile</span>
          </a>
      </li>

      

      <li class="element">
        <a href="" target="_self" class="link link--icon">
          <img data-src="/front/img/icons/applimobile.png" alt="Direct Assurance - Déclaration sinistre Application Mobile" class="icon lazyLoading"/>
          <img data-src="/front/img/icons/applimobile.png" alt="Direct Assurance - Déclaration sinistre Application Mobile" class="hover-icon lazyloading"/>
      </a>
      <div></div>
      <a href="" target="_self" class="link link--label">
          <span class="label">Application mobile</span>
      </a>
  </li>


</ul>
</div>

<div class="row row--cta">
    <a class="btn btn-md btn--ghost-pourpre" href="/nos-services/sinistre" target="_self" onClick="javascript:return tc_events_1(this,'interaction',{
    interaction_name:'cta',
    interaction_detail:'buttons-vertical',
    interaction_detail2:'info-claim'});">
    VOS SERVICES EN CAS DE SINISTRE
</a>
</div>
</section>

<section class="component component--full v-gutter-lg callToAction bg-blanc" >
  
    <div class="row row--title">
      Toujours prêt ? Allons-y ! 
  </div>
  

  <!-- style="background-color: #c87f0a; color: white; border-radius: 10px;" -->

  
    <!-- <div class="row row--cta">
      <a class="btn btn-lg btn--bg-rouge" href="https://www.direct-assurance.fr/assurance-auto/devis-assurance-auto.htm" target="_blank" onClick="javascript:return tc_events_1(this,'interaction',{
    interaction_name:'cta',
    interaction_detail:'calltoaction-bottom',
    interaction_detail2:'quote-auto'});">
        DEVIS EN LIGNE
      </a>
  </div> -->
  
</section>



</div>

@endsection

@section('js')
<script src="/front/js/index.js"></script>
@endsection
