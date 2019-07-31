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
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="2" aria-valuemax="4" style="width: 80%;">
                    Step 4 of 5
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
                            <a class="hidden-xs" href="#" data-toggle="tab" data-step="3">3. Information du Beneficiaire</a>
                            <a class="visible-xs" href="#step3" data-toggle="tab" data-step="3">3.</a>
                            <div class="nav-arrow"></div>
                        </li>
                        <li class="active">
                            <div class="nav-wedge"></div>
                            <a class="hidden-xs" href="#" data-toggle="tab" data-step="4">4. Contrat du produit</a>
                            <a class="visible-xs" href="#step4" data-toggle="tab" data-step="4">4.</a>
                            <div class="nav-arrow"></div>
                        </li>
                        <li class="disabled">
                            <div class="nav-wedge"></div>
                            <a class="hidden-xs" href="#" data-toggle="tab" data-step="5">5. Modalites de Paiement</a>
                            <a class="visible-xs" href="#step4" data-toggle="tab" data-step="4">4.</a>
                            {{-- <div class="nav-arrow"></div> --}}
                        </li>


                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="step1">
                    <h3>1. Details</h3>
                    <div class="well">
                             <form action="{{ route('assuranceh.step4post') }}" method="post" id="myform">
                                @csrf
                    <div class="row">

                        <div col-md-6>


                                                
                        <div class="card border-warning">
                            <div class="card-header bg-warning">
                                <h4 class="m-b-0 text-white">Contrat</h4></div>
                            <div class="card-body">
                                <h3 class="card-title">Multirisques Habitations</h3>

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                
                            </div>
                        </div>
                    
                                         <div class="form-group">
                                            
                                                <input id="terms" type="checkbox" name="terms" value="1" required>
                                                <label for="terms">Accepter les termes et conditions </label>
                                            
                                        </div>

                                        <tr>
                                            <td class="tblock" colspan="2">
                                                <div class="tblock-container">
                                                    <div class="post-btn">
                                                        <button class="au-btn au-btn-blue au-btn-sm">
                                                            <i class="fa fa-file-pdf-o"></i>Telecharger le contrat</button>
                                                        <button class="au-btn au-btn-blue au-btn-sm">
                                                            <i class="fa fa-file-word-o"></i>imprimer</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                      

                        
                     </div>

                                    
            


                                <div class="card-body">
                                    <div class="form-actions pull-right">
                                        <a  href="{{ route('assuranceh.step3') }}" class="btn btn-danger">precedent</a>
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
