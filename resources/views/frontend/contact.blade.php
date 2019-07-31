@extends('frontend.layouts.frontend')

@section('title', 'Safe ~ Notre Equipe')

@section('css')

@endsection




@section('body')


<div class="page-content agent-list-1">
    <!-- HEADING PAGE-->
    <section class="heading-page heading-agent-list-1 heading-services-detail-5" style="background: url(/front/img/backgrounds/heading-page-3.jpg) center center no-repeat;">
        <div class="container">
            <ul class="au-breadcrumb">
                <li class="au-breadcrumb-item">
                    <a href="index.html">Accueil</a>
                </li>
                <li class="au-breadcrumb-item active">
                    <a href="index.html">Contactez-nous</a>
                </li>
            </ul>
            <div class="heading-title">
                <h1>Contactez-nous</h1>
            </div>
        </div>
    </section>
    <!-- END HEADING PAGE-->
    
    <!-- OUR TEAM, STYLE 2-->
    <section class="contact contact-layout style-1">
        
        <div class="container">
            <div class="contact-block clearfix">
                <div class="contact-form w-50 w-sm-100">
                    <div class="head-contact-form">
                        <i class="fa fa-envelope-o"></i>
                        <div class="heading">
                            <h4>Envoyer un message</h4>
                        </div>
                    </div>
                    <form class="contact-form-body" name="contactform" method="post" action="includes/contact-form.php">
                        <div class="contact-form-item">
                            <span class="input-title">Votre nom</span>
                            <input class="au-form-control au-form-radius" type="text" name="name" placeholder="Ex. John Smith" />
                        </div>
                        <div class="contact-form-item">
                            <span class="input-title">Votre numero de telephone</span>
                            <input class="au-form-control au-form-radius" type="text" name="phone" placeholder="Ex. +225-5774-0007" />
                        </div>
                        <div class="contact-form-item">
                            <span class="input-title">Votre e-mail</span>
                            <input class="au-form-control au-form-radius" type="text" name="email" placeholder="Ex. agilly@email.com" />
                        </div>
                        <div class="contact-form-item">
                            <span class="input-title">Message</span>
                            <textarea class="au-form-control au-form-radius" rows="4" name="msg"></textarea>
                        </div>
                        <button class="au-btn au-btn-orange" type="submit">Soumettre le formualire</button>
                    </form>
                </div>
                <div class="contact-info w-50 w-sm-100">
                    <div class="head-contact-info">
                        <i class="fa fa-map-marker"></i>
                        <div class="heading">
                            <h4>Où nous trouver</h4>
                        </div>
                    </div>
                    <ul class="list-contact-info">
                        <li>
                            <span class="bold">A:</span>
                            <span>2 plateaux Hotel Aghien</span>
                        </li>
                        <li>
                            <span class="bold">P:</span>
                            <span>+225 22 001 422</span>
                        </li>
                        <li>
                            <span class="bold">F:</span>
                            <span>+225 22 001 422</span>
                        </li>
                        <li>
                            <span class="bold">E:</span>
                            <span>agilly.com</span>
                        </li>
                    </ul>
                    <div class="time-open">
                        <div class="head-time-open">
                            <i class="fa fa-clock-o"></i>
                            <div class="heading">
                                <h4>Heures de travail</h4>
                            </div>
                        </div>
                        <ul class="list-time-open">
                            <li>
                                <span class="day">Lundi</span>
                                <span class="time">08:00  - 17:00 </span>
                            </li>
                            <li>
                                <span class="day">Mardi</span>
                                <span class="time">08:00  - 17:00 </span>
                            </li>
                            <li>
                                <span class="day">Mercredi</span>
                                <span class="time">08:00  - 17:00 </span>
                            </li>
                            <li>
                                <span class="day">Jeudi</span>
                                <span class="time">08:00  - 17:00 </span>
                            </li>
                            <li>
                                <span class="day">Vendredi</span>
                                <span class="time">08:00  - 17:00 </span>
                            </li>
                            <li>
                                <span class="day">Samedi</span>
                                <span class="time"></span>
                            </li>
                            <li>
                                <span class="day">Dimanche</span>
                                <span class="time"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br><br><br>
    <!-- END OUR TEAM, STYLE 2-->


    <!-- CALL TO ACTION, STYLE 2-->
    <section class="call-to-action call-to-action-layout style-2 bg-blue">
        <div class="container">
            <div class="call-to-action-block">
                <h4 class="call-to-action-content">Trouver des informations sur tous les produits d'assurances ici.</h4>
                <button class="au-btn au-btn-orange au-btn-md">Souscrire a un produit</button>
            </div>
        </div>
    </section>
    <!-- END CALL TO ACTION, STYLE 2-->
</div>


@endsection

@section('js')


<script src="/dist/js/custom.min.js"></script>
<script src="/assets/node_modules/moment/min/moment.min.js"></script>
<script src="/assets/node_modules/wizard/jquery.steps.min.js"></script>
<script src="/assets/node_modules/wizard/jquery.validate.min.js"></script>
<!-- Sweet-Alert  -->
{{-- <script src="/assets/node_modules/sweetalert/sweetalert.min.js"></script> --}}
<script src="/assets/node_modules/wizard/steps.js"></script>
<script src="/dist/js/custom.min.js"></script>
<script src="/dist/js/pages/mask.js"></script>
<script src="/js/my_wizard.js"></script>

<script>



// $("#wizard").steps("next",{
//   headerTag: "h3",
//   bodyTag: "section",  
//   transitionEffect: "slideLeft",
//   autoFocus: true,
//   onStepChanging: function(e, currentIndex, newIndex){
//     alert(currentIndex) // returns many many 0s but cannot go to 1.
//     $("#wizard").steps("next");
//   }
// });
// 


// $("#wizard").on('click', ".btn-next", function() {
//     var activeTabNo = $("li.active").data("step");
//     alert(activeTabNo);
// });




</script>


@endsection
