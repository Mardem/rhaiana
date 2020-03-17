@extends('layouts.internal.main')
@section('content')

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title"> Contato</h1>

                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a title="Go to Delmont." href="{{ route('home-site') }}" class="home"><i class="themifyicon ti-home"></i>&nbspHome</a>
                                        </span>
                                    <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                    <span>Contato</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->


    <div class="site-main">

        <section class="ttm-row bg-layer bg-layer-equal-height res-991-p-0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- testimonial-box -->
                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor ttm-textcolor-white spacing-8">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <h3>Nossos meios de contato disponíveis para você</h3>
                                <p>Vá em busca do seu tratamento e da sua recuperação...</p>
                                <div class="sep_holder_box width-100 pt-20 mb-35">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box iconalign-before-heading mb-25">
                                    <div class="featured-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                        </div>
                                        <div class="featured-title">
                                            <h5>SEPS Q 709/909 BL B Sala 413 - Asa Sul, Brasília - DF, 70390-095</h5>

                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <!--featured-icon-box-->
                                <div class="featured-icon-box iconalign-before-heading mb-25">
                                    <div class="featured-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                        </div>
                                        <div class="featured-title">
                                            <h5>contato@rhaianagondim.contato</h5>

                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <!--featured-icon-box-->
                                <div class="featured-icon-box iconalign-before-heading mb-25">
                                    <div class="featured-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                        </div>
                                        <div class="featured-title">
                                            <h5>(61) 3771-8702</h5>

                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <!--featured-icon-box-->

                                <div class="sep_holder_box width-100 pt-20 mb-30">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                                <div class="social-icons circle social-hover">
                                    <ul class="list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="https://www.facebook.com/rhaiana.gondim" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-instagram"><a class="tooltip-top" target="_blank" href="https://www.instagram.com/rhaianagondim/" data-tooltip="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-grey spacing-8">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <!-- section title -->
                            <div class="section-title with-desc clearfix">
                                <div class="title-header">
                                    <h5>FORMULÁRIO DE CONTATO</h5>
                                    <h2 class="title">Ainda com dúvidas?</h2>
                                </div>
                                <div class="title-desc">Não fique com dúvidas, deixe já o seu contato aqui!</div>
                            </div><!-- section title end -->
                            <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix" method="post" action="{{ route('contato.store') }}">
                                @csrf

                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-skincolor ti-user"></i><input name="name" type="text" value="" placeholder="Seu Nome" required="required"></span>
                                </label>
                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-skincolor ti-mobile"></i><input name="phone" type="text" value="" placeholder="Telefone" required="required"></span>
                                </label>
                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-skincolor ti-email"></i><input name="email" type="email" value="" placeholder="E-mail" required="required"></span>
                                </label>

                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-skincolor ti-comment"></i><textarea name="message" cols="40" rows="3" placeholder="Mensagem" required="required"></textarea></span>
                                </label>
                                <input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black" value="Enviar">
                            </form>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- intro-section end -->

        <div class="map-wrapper">
            <div id="map_canvas"></div>
        </div>


    </div> <!--site-main end-->

@endsection
