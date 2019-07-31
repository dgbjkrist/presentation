@extends('frontend.layouts.frontend')

@section('title', 'Safe ~ Assurance')

@section('css')

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
            <h1>Assurance Multiriques Habitations</h1>
        </div>
    </div>
</section>
<!-- END HEADING PAGE-->
<div class="page-content services-detail-1">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <!-- SLIDER, STYLE 1-->
                <div class="slider slider-medium-layout style-1">
                    <div class="slider-item">
                        <div class="owl-carousel" data-dots=".slider-dots">
                            <div class="owl-item">
                                <div class="slider-image">
                                    <img class="img-responsive" src="/front/img/slider/habitat.png" alt="Compare quotes from over 250 insurance brands" />
                                </div>
                                <div class="slider-text-holder animated">
                                    <div class="slider-title">
                                        <a> Souscrire a partir de 5000 F CFA / AN– ou 500 F CFA par mois</a>
                                    </div>
                                    <div class="slider-btn">
                                        <a href="{{ route('assuranceh.create') }}"  class="au-btn au-btn-orange au-btn-sm">Souscrire</a>
                                        {{-- <button class="au-btn au-btn-orange au-btn-sm">Souscrire</button> --}}
                                    </div>
                                </div>
                            </div>
<!-- {{--                                 <div class="owl-item">
                                    <div class="slider-image">
                                        <img class="img-responsive" src="/front/img/slider/slider-medium-2.jpg" alt="Compare quotes from over 250 insurance brands" />
                                    </div>
                                    <div class="slider-text-holder animated">
                                        <div class="slider-title">
                                            <a>Compare quotes from over 250 insurance brands</a>
                                        </div>
                                        <div class="slider-btn">
                                            <button class="au-btn au-btn-orange au-btn-sm">Get a quote</button>
                                        </div>
                                    </div>
                                </div> --}}
{{--                                 <div class="owl-item">
                                    <div class="slider-image">
                                        <img class="img-responsive" src="/front/img/slider/slider-medium-3.jpg" alt="Compare quotes from over 250 insurance brands" />
                                    </div>
                                    <div class="slider-text-holder animated">
                                        <div class="slider-title">
                                            <a>Compare quotes from over 250 insurance brands</a>
                                        </div>
                                        <div class="slider-btn">
                                            <button class="au-btn au-btn-orange au-btn-sm">Get a quote</button>
                                        </div>
                                    </div>
                                </div> --}} -->
                            </div>
                            <ul class="slider-dots owl-dots">
                                <li class="owl-dot active"></li>
                                <li class="owl-dot"></li>
                                <li class="owl-dot"></li>
                            </ul>
                            <div class="slider-arrow">
                                <div class="prev">
                                    <i class="fa fa-chevron-left"></i>
                                </div>
                                <div class="next">
                                    <i class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SLIDER, STYLE 1-->
                    <!-- POST SERVICES DERAIL 1-->
                    <section class="post-services post-services-detail-1">
                        <div class="post-paragraph p1">
                            <div class="post-heading">
                                <h3>DOMMAGES COUVERTS </h3>
                            </div>
                            <div class="post-content">
                                <li>INCENDIE </li>
                                <li>DOMMAGES ELECTRIQUES AUX BIENS </li>
                                <li>VOL A MAINS ARMEES (BRAQUAGES)</li>
                            </div>
                        </div>
                        <div class="post-paragraph p2">
                            <div class="post-heading">
                                <h3>MOYENS DE PREUVES </h3>
                            </div>
                            <div class="post-content">
                                <p>CONSTAT DE POLICE OU DE GENDARMERIE OU DES SAPEURS POMPIERS OU RAPPORT D’INCIDENT DE LA CIE A TRANSMETTRE EN CAS DE DOMMAGE ELECTRIQUES AUX BIENS </p>
                            </div>
                        </div>
                        <div class="post-table">
                            <table class="table table-bordered table-responsive">
                                <tbody>
                                    <tr>
                                        <td class="tblock" colspan="2">
                                            <div class="tblock-container">
                                                <h1>FORFAIT</h1>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FORFAIT INCENDIE :  </td>
                                        <td>500 000 F CFA</td>
                                    </tr>
                                    <tr>
                                        <td>DOMMAGES ELECTRIQUES :  </td>
                                        <td>200 000 F CFA</td>
                                    </tr>
                                    <tr>
                                        <td>VOL A MAINS ARMEES : </td>
                                        <td>200 000 F CFA </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                                <div class="post-paragraph p2">
                                    <div class="post-heading">
                                        <h3>CIBLE : DOMICILES ET COMMERCES </h3>
                                    </div>
                                    <div class="post-content">
                                        <p>CONSTAT DE POLICE OU DE GENDARMERIE OU DES SAPEURS POMPIERS OU RAPPORT D’INCIDENT DE LA CIE A TRANSMETTRE EN CAS DE DOMMAGE ELECTRIQUES AUX BIENS </p>
                                    </div>
                                </div>

                                <div class="post-paragraph p2">
                                    <div class="post-heading">
                                        <h3>PRE REQUIS : </h3>
                                    </div>
                                    <div class="post-content">
                                        <li>NOM ET PRENOMS </li>
                                        <li>CNI OU PIECE JUSTIFICATIVE </li>
                                        <li>NUMERO DE COMPTEUR IDENTIFIANT CIE OU SODECI </li>
                                        <li>PREVOIR UN BLOCAGE EN CAS DE SOUSCRIPTION AVEC LE MEME NUMERO DE COMPTEUR CIE OU SODECI</li>
                                    </div>
                                </div>
                                <div class="slider-btn">
                                    <a href="{{ route('assuranceh.create') }}"  class="au-btn au-btn-orange au-btn-sm">Souscrire</a>
                                    {{-- <button class="au-btn au-btn-orange au-btn-sm">Souscrire</button> --}}
                                </div>
                                
                            </section>
                            <!-- END POST SERVICES DERAIL 1-->
                        </div>
                        <div class="col-md-3 col-md-pull-9">
                            <!-- SIDEBAR, STYLE 1-->
                            <div class="sidebar sidebar-style-1">
                                <ul class="sidebar-container">
                                    
                                    <li class="sidebar-item active">
                                        <a href="services-detail-5.html">
                                            <i class="fa fa-home"></i>
                                            <span>ASSURANCE HABITATION</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-item">
                                        <a href="services-detail-3.html">
                                            <i class="fa fa-plane"></i>
                                            <span>ASSURANCE VOYAGE</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="services-detail-4.html">
                                            <i class="fa fa-building"></i>
                                            <span>Assurance Perte</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="services-detail-1.html">
                                            <i class="fa fa-heart"></i>
                                            <span>Assurance Sante</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-item">
                                        <a href="services-detail-1.html">
                                            <i class="fa fa-car"></i>
                                            <span>Assurance objet connecte</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-item">
                                        <a href="services-detail-2.html">
                                            <i class="fa fa-bank"></i>
                                            <span>Responsabilite civile</span>
                                        </a>
                                    </li>
                                    
                                    <li class="sidebar-item">
                                        <a href="services-detail-4.html">
                                            <i class="fa fa-umbrella"></i>
                                            <span>DECLARER UN SINITRE</span>
                                        </a>
                                    </li>
                                </ul>
                        <!-- <div class="banner">
                            <img class="img-responsive" src="/front/img/banner/banner-1.jpg" alt="banner" />
                        </div> -->
                    </div>
                    <!-- END SIDEBAR, STYLE 1-->
                </div>
            </div>
        </div>
        </div

        @endsection

        @section('js')




        @endsection
