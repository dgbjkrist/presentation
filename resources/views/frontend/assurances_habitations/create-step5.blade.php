@extends('frontend.layouts.frontend')

@section('title', 'Safe ~ Assurance')

@section('css')
 <link href="/assets/node_modules/wizard/steps.css" rel="stylesheet">
  {{-- <link href="/dist/css/style.min.css" rel="stylesheet"> --}}
 <link href="/css/my_wizard.css" rel="stylesheet">
        <script charset="utf-8" 
               src="https://www.cinetpay.com/cdn/seamless_sdk/latest/cinetpay.sandbox.min.js"
               type="text/javascript">
       </script>

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
                <h1>SOUSCRIPTION AU PRODUIT HABITATION</h1>
            </div>
        </div>
    </section>



            <section class="heading-page heading-services-detail-1">
              
                <div class="container" id="myWizard">
            <div class="row">
                
      </div>
            <hr>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="2" aria-valuemax="4" style="width: 100%;">
                    Step 5 of 5
                </div>
            </div>
            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="nav nav-pills nav-wizard">
                        <li class="disabled">
                            <a class="hidden-xs" href="#" data-toggle="tab" data-step="1">1. Enregistrement</a>
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
                            <a class="hidden-xs" href="#step3" data-toggle="tab" data-step="3">3. Information du Beneficiaire</a>
                            <a class="visible-xs" href="#step3" data-toggle="tab" data-step="3">3.</a>
                            <div class="nav-arrow"></div>
                        </li>
                        <li class="disabled">
                            <div class="nav-wedge"></div>
                            <a class="hidden-xs" href="#" data-toggle="tab" data-step="4">4. Contrat du produit</a>
                            <a class="visible-xs" href="#step4" data-toggle="tab" data-step="4">4.</a>
                            <div class="nav-arrow"></div>
                        </li>

                        <li class="active">
                            <div class="nav-wedge"></div>
                            <a class="hidden-xs" href="#" data-toggle="tab" data-step="5">5. Paiement</a>
                            <a class="visible-xs" href="#step4" data-toggle="tab" data-step="4">5.</a>
                            {{-- <div class="nav-arrow"></div> --}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="step1">
                    <h3>1. Details</h3>
                    <div class="well">

                                    @if (Session::has('message'))
                                            <div class="alert alert-danger">{{ Session::get('message') }}</div>
                                    @endif
                                    @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                    @endif

                             <form action="{{ route('assuranceh.step5post') }}" method="post">
                                @csrf
                        
                                        <div class="row">


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="behName1">Montant:</label>
                                                    <input type="text" class="form-control required" id="behName1" name="prix"> 
                                            </div>

                                            </div>


                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wintType1">Frequence de Paiement :</label>
                                                    <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="genre">
                                                        <option value="0">Hebdommataire</option>
                                                        <option value="1">Mensuel</option>
                                                        <option value="1">Annuel</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <hr>

                                        <div class="row">
                                            
                                       
                                            <div class="col-md-4">
                                                <h4> Payez par <strong style="color: red;font-weight: bolder;">Orange Money</strong>,<strong style="color: black;font-weight: bolder;">MTN Money</strong>,<strong style="color: green;font-weight: bolder;">Flooz Money</strong></h4>
                                            </div>

                                            <div class="col-md-2">
                                                    
                                                <div class="banner">
                                                    <a href="#" class="btn">
                                                         <img class="img-responsive" src="/front/img/banner/1.png" alt="banner" width="85px">
                                                    </a>
                                                </div>
                                            </div>


                                            <div class="col-md-2">
                                               
                                                <div class="banner">
                                                    <a href="#" class="btn">
                                                        <img class="img-responsive" src="/front/img/banner/2.png" alt="banner" width="85px">
                                                    </a>
                                                </div>
                                            </div>


                                            <div class="col-md-2">
                                                    
                                                <div class="banner">
                                                    <a href="#" class="btn">
                                                        <img class="img-responsive" src="/front/img/banner/3.png" alt="banner" width="85px">
                                                    </a>
                                                    
                                                </div>
                                            </div>

                                      
                                    


                               

                            </div>

                                  <div class="row">                          
                                
                                    <div class="form-group pull-right">
                                        <a  href="{{ route('assuranceh.step4') }}" class="btn btn-danger">precedent</a>
                                        <button type="submit" class="btn btn-info">Validez la souscription</button>

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
    {{-- <script src="https://cinetpay.com/cdn/seamless_sdk/latest/cinetpay.sandbox.min.js"></script> --}}

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
