@extends('frontend.layouts.frontend')

@section('title', 'Safe ~ Assurance')

@section('css')
 <link href="/assets/node_modules/wizard/steps.css" rel="stylesheet">
  {{-- <link href="/dist/css/style.min.css" rel="stylesheet"> --}}


@endsection




@section('body')


        <div class="page-title-area pt-120 pb-120" style="background-image:url(/front/img/bg/page-tile.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title text-center mb-20">
                            <h3>Services</h3>
                            <img src="/front/img/icon/line.png" alt="">
                        </div>
                        <div class="breadcrum-list">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Service</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        
        <div class="quote-area pt-115 pb-115">
            <div class="container">
                <div class="row" id="validation">
                    <div class="col-12">
                        <div class="card wizard-content">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center;color: green;font-weight: bolder;">SOUSCRIPTION DU PRODUIT HABITATION</h4>
                                {{-- <h6 class="card-subtitle">You can us the validation like what we did</h6> --}}

                                <form action="#" class="validation-wizard wizard-circle">
                                    <!-- Step 1 -->
                                    <h6>Enregistrement</h6>
                                    <section>
                                        <div class="row">

                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wemailAddress2"> Email Address : <span class="danger">*</span> </label>
                                                    <input type="email" class="form-control required" id="wemailAddress2" name="emailAddress"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tel">Phone Number :</label>
                                                    <input type="tel" class="form-control required" id="tel"> </div>
                                            </div>
                                        </div>
                                    </section>
                                    
                                    <!-- Step 2 -->
                                    <h6>Code de confirmation</h6>
                                    <section>
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="code">Code  :</label>
                                                    <input type="text" class="form-control required" id="code" name="code"> </div>
                                            </div>

                                        </div>
                                    </section>
                                    <!-- Step 3 -->
                                    <h6>Information Beneficiaire</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="beneficiare">Nom du Beneficiaire :</label>
                                                    <input type="text" class="form-control required" id="beneficiare"> 
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="prenoms">Prenoms :</label>
                                                    <input type="text" class="form-control required" id="prenoms"> 
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wjobTitle2">Date de Naissance :</label>
                                                    <input type="date" class="form-control required" id="wjobTitle2">
                                                </div>
                   
                                            </div>

                                            <div class="col-md-6">
                                                 <div class="form-group">
                                                    <label for="parti">Genre</label>
                                                    <select class="custom-select form-control required" id="parti" >
                                                        <option value="">Select Result</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 4 -->
                                    <h6>Contrat du Produit</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="behName1">Behaviour :</label>
                                                    <input type="text" class="form-control required" id="behName1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Confidance</label>
                                                    <input type="text" class="form-control required" id="participants1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Result</label>
                                                    <select class="custom-select form-control required" id="participants1" name="location">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">Call Second-time</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="decisions1">Comments</label>
                                                    <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rate Interviwer :</label>
                                                    <div class="c-inputs-stacked">
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">1 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">2 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">3 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">4 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">5 star</span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                      <!-- Step 5 -->

                                    <h6>Modalite de Paiement</h6>
                                    <section>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="behName1">Behaviour :</label>
                                                        <input type="text" class="form-control required" id="behName1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="participants1">Confidance</label>
                                                        <input type="text" class="form-control required" id="participants1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="participants1">Result</label>
                                                        <select class="custom-select form-control required" id="participants1" name="location">
                                                            <option value="">Select Result</option>
                                                            <option value="Selected">Selected</option>
                                                            <option value="Rejected">Rejected</option>
                                                            <option value="Call Second-time">Call Second-time</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="decisions1">Comments</label>
                                                        <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Rate Interviwer :</label>
                                                        <div class="c-inputs-stacked">
                                                            <label class="inline custom-control custom-checkbox block">
                                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">1 star</span> </label>
                                                            <label class="inline custom-control custom-checkbox block">
                                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">2 star</span> </label>
                                                            <label class="inline custom-control custom-checkbox block">
                                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">3 star</span> </label>
                                                            <label class="inline custom-control custom-checkbox block">
                                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">4 star</span> </label>
                                                            <label class="inline custom-control custom-checkbox block">
                                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">5 star</span> </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </section>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
{{--                  <div class="row pt-60">
                    <div class="col-xl-12">
                        <h3 class="project-details-title mb-30">
                            Project Gallery
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <div class="portfolio-details-img mb-30">
                            <img src="/front/img/portfolio/port8.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="portfolio-details-img mb-30">
                            <img src="/front/img/portfolio/port9.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="portfolio-details-img mb-30">
                            <img src="/front/img/portfolio/port10.jpg" alt="">
                        </div>
                    </div>
                </div> --}}
            </div>

                    <div class="insurance-product-area pt-105 pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="area-title text-center mb-55">
                            <h2>Produits Populaires</h2>
                        </div>
                    </div>
                </div>
                <div class="row insurance-pro dot-style">
                    <div class="col-xl-4">
                        <div class="insurenace-item">
                            <div class="insurance-thumb">
                                <a href="#">
                                    <img src="/front/img/insurance/insurance-pro1.jpg" alt="">
                                </a>
                            </div>
                            <div class="insurance-content">
                                <h3>
                                    <a href="#">Life Insurance</a>
                                </h3>
                                <p>Placerat facer possim assum. Typi non habent claritatem insitam est legentis in iis qui facit eorum.</p>
                                <div class="text-center">
                                    <a class="btn-subscribe" href="#" data-animation="fadeInUp" data-delay="1.5s">souscrire
                                        <i class="icofont icofont-location-arrow"></i>
                                    </a>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-xl-4">
                        <div class="insurenace-item">
                            <div class="insurance-thumb">
                                <a href="#">
                                    <img src="/front/img/insurance/insurance-pro4.jpg" alt="">
                                </a>
                            </div>
                            <div class="insurance-content">
                                <h3 style="margin-top: -50px">
                                    <a href="#">Car Insurance</a>
                                </h3>
                                <p>Placerat facer possim assum. Typi non habent claritatem insitam est legentis in iis qui facit eorum.</p>

                                <div class="text-center">
                                    <a class="btn-subscribe" href="#" data-animation="fadeInUp" data-delay="1.5s">souscrire
                                        <i class="icofont icofont-location-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="insurenace-item">
                            <div class="insurance-thumb">
                                <a href="#">
                                    <img src="/front/img/insurance/insurance-pro5.jpg" alt="">
                                </a>
                            </div>
                            <div class="insurance-content">
                                <h3>
                                    <a href="#">Health Insurance</a>
                                </h3>
                                <p>Placerat facer possim assum. Typi non habent claritatem insitam est legentis in iis qui facit eorum.</p>

                                <div class="text-center" >
                                    <a class="btn-subscribe" href="#" data-animation="fadeInUp" data-delay="1.5s">souscrire
                                        <i class="icofont icofont-location-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="insurenace-item">
                            <div class="insurance-thumb">
                                <a href="#">
                                    <img src="/front/img/insurance/insurance-pro6.jpg" alt="">
                                </a>
                            </div>
                            <div class="insurance-content">
                                <h3>
                                    <a href="#">House Insurance</a>
                                </h3>
                                <p>Placerat facer possim assum. Typi non habent claritatem insitam est legentis in iis qui facit eorum.</p>

                                <div class="text-center">
                                    <a class="btn" href="#" data-animation="fadeInUp" data-delay="1.5s">souscrire
                                        <i class="icofont icofont-location-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
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




@endsection
