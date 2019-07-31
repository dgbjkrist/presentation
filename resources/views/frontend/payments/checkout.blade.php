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
                <h1>SOUSCRIPTION DU PRODUIT HABITATION</h1>
            </div>
        </div>
    </section>



            <section class="heading-page heading-services-detail-1">
              
                <div class="container" id="myWizard">
            <div class="row">

              
                <div class="col-xs-2 col-md-2 pull-right"><img src="https://trustsealinfo.websecurity.norton.com/images/vseal.gif"></div>
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

                        <li class="disabled">
                            <div class="nav-wedge"></div>
                            <a class="hidden-xs" href="#" data-toggle="tab" data-step="5">5. Paiement</a>
                            <a class="visible-xs" href="#step4" data-toggle="tab" data-step="4">5.</a>
                            <div class="nav-arrow"></div>
                        </li>

                        <li class="active">
                            <div class="nav-wedge"></div>
                            <a class="hidden-xs" href="#" data-toggle="tab" data-step="5">5. Verfication Paiement</a>
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
                        
                                        <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body printableArea">
                            <h3><b>DEVIS</b> <span class="pull-right">Assurance Habitation</span></h3>
                            <hr>
                            <div class="row">
{{--                                 <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <h3> &nbsp;<b class="text-danger">Material Pro Admin</b></h3>
                                            <p class="text-muted m-l-5">E 104, Dharti-2,
                                                <br/> Nr' Viswakarma Temple,
                                                <br/> Talaja Road,
                                                <br/> Bhavnagar - 364002</p>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <h3>To,</h3>
                                            <h4 class="font-bold">Gaala & Sons,</h4>
                                            <p class="text-muted m-l-30">E 104, Dharti-2,
                                                <br/> Nr' Viswakarma Temple,
                                                <br/> Talaja Road,
                                                <br/> Bhavnagar - 364002</p>
                                            <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i> 23rd Jan 2017</p>
                                            <p><b>Due Date :</b> <i class="fa fa-calendar"></i> 25th Jan 2017</p>
                                        </address>
                                    </div>
                                </div> --}}

                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                    {{--     <p>Sub - Total amount: $13,848</p>
                                        <p>vat (10%) : $138 </p> --}}
                                        <hr>
                                        <h3><b>Total :</b> {{ $cp_info->montant_a_payer }} CFA</h3>
                                        
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        {{ 
                                $cp->setTransId($cp_info->id_transaction)
                                    ->setDesignation($cp_info->description_du_paiement)
                                    ->setTransDate($cp_info->date_transaction)
                                    ->setAmount($cp_info->montant_a_payer)
                                    ->setDebug(false)// Valorisé à true, si vous voulez activer le mode debug sur cinetpay afin d'afficher toutes les variables envoyées chez CinetPay
                                    ->setCustom($cp_info->custom)// optional
                                    ->displayPayButton($cp_info->formName, $cp_info->btnType, $cp_info->btnSize)





                                               }}
                                        {{-- <button class="btn btn-danger" type="submit"> Proceed to payment </button>
                                        <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


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
