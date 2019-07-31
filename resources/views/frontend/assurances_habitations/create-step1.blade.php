@extends('frontend.layouts.frontend')

@section('title', 'Safe ~ Assurance')

@section('css')
 <link href="/assets/node_modules/wizard/steps.css" rel="stylesheet">
  {{-- <link href="/dist/css/style.min.css" rel="stylesheet"> --}}
 <link href="/css/my_wizard.css" rel="stylesheet">

@endsection




@section('body')

        <section class="heading-page heading-services-detail-1" style="background: url(/front/img/backgrounds/heading-page-2.jpg) center center no-repeat;">
        <div class="container">
            <ul class="au-breadcrumb">
                <li class="au-breadcrumb-item">
                    <a href="index.html">Accueil</a>
                </li>
                <li class="au-breadcrumb-item active">
                    <a href="index.html">Nos produits</a>
                </li>
            </ul>
            <div class="heading-title">
                <h3>SOUSCRIPTION DU PRODUIT HABITATION</h3>
            </div>
        </div>
    </section>



            <section class="heading-page heading-services-detail-1">
              
                <div class="container" id="myWizard">
            <div class="row">

              
      </div>
            <hr>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 20%;">
                    Step 1 of 5
                </div>
            </div>
            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="nav nav-pills nav-wizard">
                        <li class="active">
                            <a class="hidden-xs" href="#step1" data-toggle="tab" data-step="1">1. Enregistrement</a>
                            <a class="visible-xs" href="#step1" data-toggle="tab" data-step="1">1.</a>
                            <div class="nav-arrow"></div>
                        </li>
                        <li class="disabled">
                            <div class="nav-wedge"></div>
                            <a class="hidden-xs" href="#" data-toggle="tab" data-step="2">2. Verification du code d'activation</a>
                            <a class="visible-xs" href="#step2" data-toggle="tab" data-step="2">2.</a>
                            <div class="nav-arrow"></div>
                        </li>
                        <li class="disabled">
                            <div class="nav-wedge"></div>
                            <a class="hidden-xs" href="#" data-toggle="tab" data-step="3">3. Information du Beneficiaire</a>
                            <a class="visible-xs" href="#step3" data-toggle="tab" data-step="3">3.</a>
                            <div class="nav-arrow"></div>
                        </li>
                        <li class="disabled">
                            <div class="nav-wedge"></div>
                            <a class="hidden-xs" href="#" data-toggle="tab" data-step="4">4. Contrat du produit</a>
                            <a class="visible-xs" href="#step4" data-toggle="tab" data-step="4">4.</a>
                            <div class="nav-arrow"></div>
                        </li>

                        <li class="disabled">
                            <div class="nav-wedge"></div>
                            <a class="hidden-xs" href="#" data-toggle="tab" data-step="5">5. Paiement</a>
                            <a class="visible-xs" href="#step5" data-toggle="tab" data-step="4">5.</a>
                            {{-- <div class="nav-arrow"></div> --}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="step1">
                    <h3>1. Details</h3>
                    <div class="well">
                                    @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                             <form action="{{ route('assuranceh.step1') }}" method="post" id="myform">
                                {{ csrf_field() }}
                        
                                    <div class="row">
                                    
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="jobTitle2">Votre Nom :</label>
                                                    <input type="text" class="form-control required" placeholder="ibrahim"  id="name" name="name" value="{{ $name }}">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="jobTitle2">Numero de Telephone :</label>
                                                    <input type="tel" class="form-control required" placeholder="01-01-01-02" data-mask="+225 99 99 99 99" id="tel" name="tel" value="{{ $tel }}">
                                                </div>
                                            </div>

                                        <div class="col-md-4">
                                                <div class="form-group ">
                                                    <label for="jobTitle2">Votre Email :</label>
                                                    <input type="email" class="form-control required" placeholder="john.doe@exemple.com" name="email" id="email" value="{{ $email }}">
                                                </div>
                                            </div>



                                <div class="card-body">
                                    <div class="form-actions pull-right">
                                        <button type="submit" class="btn btn-info">suivant</button>
                                    </div>

                                </div>

                            </div>

                        </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
            

</section>
    
    


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
