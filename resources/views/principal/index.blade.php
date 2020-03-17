@extends('layouts.main.main')
@inject('post', 'App\Models\Blog\Post')
@inject('days', 'App\Models\Day')
@inject('hours', 'App\Models\HoursDay')
@section('content')
    <!--header start-->

    <div id="rev_slider_4_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery">

        <!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
        <div id="rev_slider_4_4" class="rev_slider fullwidthabanner" data-version="5.4.8.2">
            <ul>
                <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('principal/images/slides/slider-mainbg-007.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <img src="{{ asset('principal/images/slides/slider-mainbg-007.jpg') }}" alt="" title="Home 2" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                    <a class="tp-caption slide-main-text shape-rectangle tp-resizeme" href="#agendamento" id="slide-1-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-135','-135','-135','-105']"

                         data-fontsize="['12','12','11','10']"
                         data-lineheight="['12','12','11','10']"
                         data-fontweight="['400','400','400','400']"
                         data-letterspacing="['2','2','1','1']"
                         data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":170,"speed":400,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[16,16,16,15]"
                         data-paddingright="[18,18,18,15]"
                         data-paddingbottom="[16,16,16,15]"
                         data-paddingleft="[18,18,18,15]">FAÇA SEU AGENDAMENTO
                    </a>

                    <div class="tp-caption slide-main-text tp-resizeme" id="slide-1-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-85','-85','-85','-61']"

                         data-fontsize="['19','19','18','14']"
                         data-lineheight="['22','22','20','16']"
                         data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":300,"speed":400,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">O diagnóstico e tratamento precoce fazem toda diferença</div>

                    <div class="tp-caption slide-main-text tp-resizeme"  id="slide-1-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-17','-17','-28','-18']"

                         data-fontsize="['70','70','60','40']"
                         data-lineheight="['80','80','70','50']"
                         data-fontweight="['600','600','600','600']"
                         data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":550,"speed":600,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">Atendimento <strong class="ttm-textcolor-skincolor">individual</strong>
                    </div>

                    <div class="tp-caption slide-main-text tp-resizeme" id="slide-1-layer-4" data-x="['center','center','center','center']" data-hoffset="['5','5','5','5']" data-y="['middle','middle','middle','middle']" data-voffset="['51','51','28','27']"

                         data-fontsize="['70','70','60','40']"
                         data-lineheight="['80','80','70','50']"
                         data-fontweight="['600','600','600','600']"
                         data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":660,"speed":600,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">e personalizado
                    </div>

                    <a class="tp-caption white-flatborder-button tp-resizeme" href="{{ route('contato.store') }}" target="_self" id="slide-1-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['151','151','119','96']"

                       data-fontsize="['13','13','11','10']"
                       data-lineheight="['13','13','11','10']"
                       data-fontweight="600"
                       data-letterspacing="['1','1','0','0']"
                       data-width="none"
                       data-height="none"
                       data-whitespace="nowrap"
                       data-type="text"
                       data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":840,"speed":400,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                       data-textAlign="['inherit','inherit','inherit','inherit']"
                       data-paddingtop="[19,19,19,15]"
                       data-paddingright="[30,30,30,25]"
                       data-paddingbottom="[19,19,19,15]"
                       data-paddingleft="[30,30,30,25]">Entrar em contato
                    </a>

                </li>

                <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/slides/slider-mainbg-008.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" style="margin-top: 104px;">

                    <img src="{{ asset('principal/images/slides/slider-mainbg-008.jpg') }}" alt="" title="Home 2" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                    <a class="tp-caption slide-main-text shape-rectangle tp-resizeme" href="#agendamento" id="slide-2-layer-2" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['308','161','56','-100']"

                         data-fontsize="['12','12','11','10']"
                         data-lineheight="['12','12','11','10']"
                         data-letterspacing="['2','2','2','1']"
                         data-fontweight="['400','400','400','400']"
                         data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":330,"speed":500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[17,17,14,10]"
                         data-paddingright="[19,19,15,12]"
                         data-paddingbottom="[17,17,14,10]"
                         data-paddingleft="[19,19,15,12]">FAÇA SEU AGENDAMENTO
                    </a>

                    <div class="tp-caption slide-main-text tp-resizeme" id="slide-2-layer-3" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['363','211','110','-50']"

                         data-fontsize="['70','70','60','40']"
                         data-lineheight="['80','80','55','40']"
                         data-fontweight="['600','600','600','600']"
                         data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":300,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">ATENDIMENTO UROLÓGICO
                    </div>

                    <div class="tp-caption slide-main-text tp-resizeme" id="slide-2-layer-4" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['434','276','166','-9']"

                         data-fontsize="['70','70','60','40']"
                         data-lineheight="['80','80','60','40']"
                         data-fontweight="['600','600','600','600']"
                         data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":900,"speed":800,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"><strong class="ttm-textcolor-skincolor">DIFERENCIADO </strong> PARA
                    </div>

                    <div class="tp-caption slide-main-text tp-resizeme" id="slide-2-layer-5" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['523','366','235','27']"

                         data-fontsize="['30','30','15','12']"
                         data-lineheight="['20','20','26','20']"
                         data-color="['rgb(247,247,247)','rgb(247,247,247)','rgb(237,237,237)','rgb(237,237,237)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1090,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="font-size: 30px;">CRIANÇAS E ADULTOS
                    </div>






                    <a class="tp-caption white-flatborder-button tp-resizeme" href="#" target="_self" id="slide-2-layer-6" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['582','426','293','87']"

                       data-fontsize="['13','13','13','12']"
                       data-lineheight="['16','16','14','12']"
                       data-fontweight="['600','600','600','600']"
                       data-width="none"
                       data-height="none"
                       data-whitespace="nowrap"
                       data-type="text"
                       data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":1480,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                       data-textAlign="['inherit','inherit','inherit','inherit']"
                       data-paddingtop="[17,17,17,15]"
                       data-paddingright="[30,30,23,20]"
                       data-paddingbottom="[17,17,17,15]"
                       data-paddingleft="[30,30,23,20]">Entrar em contato
                    </a>




                </li>
            </ul>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->

    <!--site-main start-->
    <div class="site-main">

        <!--row-top-section-->
        <section class="ttm-row row-top-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt_60 res-991-mt-50">
                            <div class="row row-equal-height ttm-bgcolor-white ttm-box-seperator box-shadow">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box top-icon featured-icon-hover text-center">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <img src="{{ asset('principal/images/1fav.png') }}">
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Extrofia vesical</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Extrofia vesical (de bexiga) é um defeito congênito que constitui de uma má formação da bexiga e uretra, onde a bexiga fica exposta para fora do abdômen.</p>
                                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline mb-15" href="#">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 box-shadow">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box top-icon featured-icon-hover text-center">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <img src="{{ asset('principal/images/2fav.png') }}">
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Epispádia/Hipospádia</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Consiste em um defeito raro dos genitais, que pode aparecer tanto em meninos como em meninas, sendo detectado ainda na infância.</p>
                                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline mb-15" href="#">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box top-icon featured-icon-hover text-center">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <img src="{{ asset('principal/images/3fav.png') }}">
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Estenose de JUP</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>A estenose de junção ureteropélvica (JUP) consiste no estreitamento que acontece na junção entre a pelve renal e os ureteres.</p>
                                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline mb-15" href="#">Leia Mais</a>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- row-top-section end -->


        <!--introduction-section-->
        <section class="ttm-row introduction-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <!-- col-bg-img-two -->
                        <div class="col-bg-img-two ttm-col-bgimage-yes ttm-bg res-991-ptb-200 ttm-reset-content-center-991">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">

                            </div>
                        </div><!-- col-bg-img-two end-->
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="pl-60 pb-20 res-991-pl-0 res-991-pt-40 res-991-pb-0">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>QUEM SOU EU...</h5>
                                    <h2 class="title">CRM DF 18486</h2>
                                    <h2 class="title">UROLOGIA & UROPEDIATRIA</h2>
                                </div>
                            </div><!-- section title end -->
                            <div class="mb-30 clearfix">
                                <p>Sou a Dra. Rhaiana Gondim, especialista em Urologia e Urologia Pediátrica, e terei a maior satisfação em poder atender seu filho! Atualmente, sou a única Uropediatra que atende exclusivamente em Brasília.</p>
                                <p>Sou brasiliense, cursei a faculdade de Medicina na Universidade Católica de Brasília e minha formação em Cirurgia Geral foi no Hospital Regional de Sobradinho. Após prestar novo concurso de residência médica, fiz Urologia no Hospital Universitário Professor Edgard Santos, em Salvador, onde obtive minha formação após 3 anos. Em busca de mais conhecimento na área, especializei-me em Uropediatria, além de fazer um Mestrado nessa área.</p>
                            </div>
                            <div class="ttm_sign_image-wrapper mb-25 res-991-mb-0">
                                <img src="{{ asset('principal/images/dr-sign.png') }}" alt="ttm_single_image-wrapper">
                            </div>
                            <div class="sep_holder_box pt-25 mb-50 res-991-mb-20">
                                <span class="sep_holder"><span class="sep_line"></span></span>
                            </div>

                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--introduction-section end-->

        <section class="ttm-row testimonial-section bg-img2 ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 col-md-12">
                        <!-- section-title -->
                        <div class="section-title text-center mb-40 clearfix">
                            <div class="title-header">
                                <h5>PACIENTES FELIZES</h5>
                                <h2 class="title">O que nossos pacientes estão dizendo</h2>
                            </div>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-2"></div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="defalut-view-testimonial">
                            <!-- testimonial-slide -->
                            <div class="testimonial-slide owl-carousel mb-30 res-991-mb-0" data-item="1" data-nav="true" data-dots="false" data-auto="false">
                                <!-- testimonials -->
                                <div class="testimonials">
                                    <div class="testimonial-content">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-center" src="{{ asset('principal/images/testimonial/01.png') }}" alt="testimonial-img">
                                            </div>
                                        </div>
                                        <blockquote>Atendimento excelente, sem atrasos. A Dra é simpática, prestativa e competente. Gostei muito e recomendo.</blockquote>
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-caption">
                                            <h5>Claudio Perez</h5>
                                            <label>Paciente</label>
                                        </div>
                                    </div>
                                </div><!-- testimonials end -->
                                <!-- testimonials -->
                                <div class="testimonials">
                                    <div class="testimonial-content">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-center" src="{{ asset('principal/images/testimonial/01.png') }}" alt="testimonial-img">
                                            </div>
                                        </div>
                                        <blockquote>Médica atenciosa e cuidadosa. Excelente profissional demonstrando alto grau de comprometimento com os pacientes.</blockquote>
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-caption">
                                            <h5>Anônimo</h5>
                                            <label>Paciente</label>
                                        </div>
                                    </div>
                                </div><!-- testimonials end -->
                                <!-- testimonials -->
                                <div class="testimonials">
                                    <div class="testimonial-content">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-center" src="{{ asset('principal/images/testimonial/01.png') }}"  alt="testimonial-img" style="width: 60%">
                                            </div>
                                        </div>
                                        <blockquote>Dra Rhaiana muito atenciosa e detalhista. Consulta não é rapida, ela realmente investiga tudo. Recomendo!</blockquote>
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-caption">
                                            <h5>Anônimo</h5>
                                            <label>Paciente</label>
                                        </div>
                                    </div>
                                </div><!-- testimonials end -->
                            </div><!-- testimonial-slide end-->
                        </div>
                    </div>
                    <div class="col-md-1" id="agendamento"></div>
                </div><!-- row end-->
            </div>
        </section>
        <!-- testimonial-section end-->

        <!-- multi-section -->
        <section class="ttm-row multi-section break-991-colum bg-img3 clearfix">
            <div class="container">
                <div class="row mt_190 res-1199-mlr-15 res-991-mt-50 box-shadow2 no-gutters">
                    <div class="col-md-5">
                        <!-- col-bg-img-three -->
                        <div class="col-bg-img-three ttm-bg ttm-col-bgimage-yes">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                            </div>
                        </div><!-- col-bg-img-three end -->
                        <img src="{{ asset('principal/images/bg-image/col-bgimage-3.jpg') }}" class="ttm-equal-height-image" alt="bg-image">
                    </div>
                    <div class="col-md-7">
                        <div class="spacing-4 ttm-bgcolor-white">
                            <!-- section title -->
                            <div class="section-title style2 text-center clearfix">
                                <div class="title-header">
                                    <h2 class="title">Marque sua consulta</h2>
                                </div>
                                <div class="title-desc">Agende agora sua consulta, com uma médica de confiança que irá lhe ajudar com o auxílio adequado!</div>
                            </div><!-- section title end -->
                            <form id="ttm-make-appoint-form" class="ttm-make-appoint-form wrap-form clearfix" method="post" action="{{ route('contato.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-user"></i>
                                                <input name="name" type="text" value="" placeholder="Seu nome" required="required">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-email"></i>
                                                <input name="email" type="text" value="" placeholder="E-mail" required="required">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            <span class="text-input">
                                                <i class="ttm-textcolor-skincolor ti-mobile"></i>
                                                <input name="phone" type="text" value="" data-mask="(00) 0000-0000" data-mask-selectonfocus="true">
                                            </span>
                                        </label>
                                    </div>

                                </div>
                                <div class="row">

                                </div>
                                <input name="submit" type="submit" id="submit" class="submit" value="ENVIAR">
                            </form>
                        </div>
                    </div>
                </div><!-- row end -->
                <!-- row -->
                <div class="row pt-90 res-991-pt-50">
                    <div class="col-sm-9">
                        <!-- section-title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h5>NOSSO BLOG</h5>
                                <h2 class="title">Notícias Recentes</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sep_holder_box width-100 mt_15 mb-35">
                                        <span class="sep_holder"><span class="sep_line"></span></span>
                                        <span class="sep_holder"><span class="sep_line"></span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- row -->

                        </div><!-- section-title end -->
                    </div>
                    <div class="col-sm-3"></div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sep_holder_box width-100 mt_15 mb-35">
                            <span class="sep_holder"><span class="sep_line"></span></span>
                            <span class="sep_holder"><span class="sep_line"></span></span>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <!-- post-slide -->

                    <div class="post-slide owl-carousel owl-theme owl-loaded" data-item="2" data-nav="true" data-dots="false" data-auto="false">
                        <!-- featured-imagebox-post -->
                        @foreach($posts as $post)
                        <div class="featured-imagebox featured-imagebox-post ttm-box-view-left-image row box-shadow">

                            <div class="col-lg-5 col-md-12 ttm-featured-img-left">
                                <div class="ttm-post-thumbnail featured-thumbnail">
                                    <img class="img-fluid" src="{{ asset($post->thumb_path ?? $post->path) }}" alt="" style="max-width: 280px; height: 229px;">

                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 featured-content featured-content-post">
                                <div class="post-title featured-title">
                                    <h5><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h5>
                                </div>

                                <div class="post-desc featured-desc">
                                    <p>{!! \Illuminate\Support\Str::limit(strip_tags($post->content), 113) !!}</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                            @endforeach
                    </div>

                </div><!-- row end-->

            </div>
        </section>
        <!-- multi-section end -->

    </div><!--site-main end-->


@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>
        $(document).ready(() => {
            $.get(window.location.origin + '/api/hours-day')
                .then((response) => {
                    let html = '';
                    response.forEach((e) => {
                        html += `<option value="${e.id}">${e.day_name}</option>`
                    });

                    $('#days').append(html);
                }).catch((err) => {
                alert('Houve um erro ao carregar os dados');
            });

            $('#days').on('change', function () {
                $.get(window.location.origin + '/api/get-hours-by-day', {
                    'id': $(this).val()
                }).then((response) => {
                    let html = '';

                    response.forEach((e) => {
                        html += `<option value="${e.hour}">${e.hour}</option>`
                    });
                    $('#hours').html(html);

                    $('#col-hour').css('display', 'block');
                }).catch((err) => {
                    console.log('erro', err)
                })
            })
        });
    </script>
@endpush
