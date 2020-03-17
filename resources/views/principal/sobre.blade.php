@extends('layouts.internal.main')
@section('content')

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title"> Sobre</h1>
                            <h3 class="subtitle"> Sobre Dra.Rhaiana</h3>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a title="Go to Delmont." href="{{ route('home-site') }}" class="home"><i class="themifyicon ti-home"></i>&nbspHome</a>
                                        </span>
                                    <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                    <span>Sobre</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->






    <div class="site-main">

    <!--introduction-section-->
    <section class="ttm-row introduction-section break-1199-colum clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12">
                    <!-- col-bg-img-two -->
                    <div class="col-bg-img-two ttm-col-bgimage-yes ttm-bg res-1199-ptb-200 ttm-reset-content-center-1199">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">

                        </div>
                    </div><!-- col-bg-img-two end-->
                </div>
                <div class="col-lg-7 col-sm-12">
                    <div class="pl-60 pb-20 res-1199-pl-0 res-1199-pt-40 res-1199-pb-0">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h5>Bem Vindo (a)</h5>
                                <h2 class="title">Especialista em Urologia & Uropediatria</h2>
                            </div>
                        </div><!-- section title end -->
                        <div class="mb-30 clearfix">
                            <p> Sou a Dra. Rhaiana Gondim, especialista em Urologia e Urologia Pediátrica, e terei a maior satisfação em poder atender seu filho!</p>
                            <p>Atualmente, sou a única Uropediatra que atende exclusivamente em Brasília. Sou brasiliense, cursei a faculdade de Medicina na Universidade Católica de Brasília e minha formação em Cirurgia Geral foi no Hospital Regional de Sobradinho. Após prestar novo concurso de residência médica, fiz Urologia no Hospital Universitário Professor Edgard Santos, em Salvador, onde obtive minha formação após 3 anos. Em busca de mais conhecimento na área, especializei-me em Uropediatria, além de fazer um Mestrado nessa área.</p>
                        </div>
                        <div class="ttm_sign_image-wrapper mb-25 res-991-mb-0">
                            <img src="{{ asset('principal/images/dr-sign.png') }}" alt="ttm_single_image-wrapper">
                        </div>
                        <div class="sep_holder_box pt-25 mb-45 res-991-mb-20">
                            <span class="sep_holder"><span class="sep_line"></span></span>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-box-heading-only left-icon">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Agendamento Online</h5>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-box-heading-only left-icon">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Fácil Localização</h5>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-box-heading-only left-icon">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Horários de funcionamento</h5>
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
    <section class="ttm-row multi-section break-991-colum clearfix">
        <div class="container">
            <div class="row mt_190 res-1199-mlr-15 res-991-mt-50 box-shadow2 no-gutters">
                <div class="col-md-5">
                    <!-- col-bg-img-three -->
                    <div class="col-bg-img-three ttm-bg ttm-col-bgimage-yes">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                        </div>
                    </div><!-- col-bg-img-three end -->
                </div>
                <div class="col-md-7">
                    <div class="spacing-7 ttm-bgcolor-white">
                        <!-- section title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h2 class="title">Meu comprometimento</h2>
                            </div>
                            <div class="title-desc">"A saúde é a coisa mais importante que você tem na vida!"</div>
                        </div><!-- section title end -->
                        <div class="row mt_20">
                            <div class="col-md-4">
                                <!-- col-img-img-five -->
                                <div class="col-bg-img-five ttm-col-bgimage-yes ttm-bg mr_15 res-991-mr-0">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                        <div class="col-bg-img-five"></div>
                                    </div>
                                    <div class="layer-content"></div>
                                </div><!-- col-img-bg-img-five end-->
                                <img src="{{ asset('principal/images/bg-image/col-bgimage-5.jpg') }}" class="ttm-equal-height-image" alt="bg-image">
                            </div>
                            <div class="col-md-8">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box res-767-pt-15">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5> Pacientes felizes</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Dezenas de pacientes que tiveram suas vidas mudadas por causa de meus tratamentos, venha ser um deles!</p>

                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div>
                        <div class="row pt-30">
                            <div class="col-md-4">
                                <!-- col-img-img-six -->
                                <div class="col-bg-img-six ttm-col-bgimage-yes ttm-bg mr_15">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                        <div class="col-bg-img-six"></div>
                                    </div>
                                    <div class="layer-content"></div>
                                </div><!-- col-img-bg-img-six end-->
                                <img src="{{ asset('principal/images/bg-image/col-bgimage-6.jpg') }}" class="ttm-equal-height-image" alt="bg-image">
                            </div>
                            <div class="col-md-8">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box res-767-pt-15">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5> Especialista</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Tenho uma alta capacidade para a realização dos mais complexos tratamentos.</p>

                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
            <!-- row -->
            <div class="row pt-70 res-991-pt-40">
                <div class="col-lg-9 col-md-12">
                    <!-- section-title -->
                    <div class="section-title with-desc clearfix">
                        <div class="title-header">
                            <h5>Notícias do blog</h5>
                            <h2 class="title">Nossas grandes soluções</h2>
                        </div>
                        <div class="title-desc">Veja o que há de novo</div>
                    </div><!-- section-title end -->
                </div>
                <div class="col-lg-3 col-md-12">
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-30 mt-45 res-991-mt-0 float-right" href="{{ route('blog') }}">Leia mais</a>
                </div>
            </div><!-- row end -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="sep_holder_box width-100 mt_15 mb-35 res-991-mt-0">
                        <span class="sep_holder"><span class="sep_line"></span></span>
                        <span class="sep_holder"><span class="sep_line"></span></span>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- acadion -->
                    <div class="accordion mb-15 res-991-mb-40 pr-20 res-991-pr-0">
                        <!-- toggle -->
                        <div class="toggle ttm-style-classic">
                            <div class="toggle-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
                                    <i class="flaticon-charity"></i>
                                    <span class="ttm-title-text">Formação Complementar</span>
                                </a>
                            </div>
                            <div class="toggle-content">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="toggle-figure pr-10 res-991-mb-15">
                                            <img class="img-fluid" src="{{ asset('principal/images/portfolio/image2.jpg') }}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="ml_20 res-991-ml-0">
                                            <p><b>2018</b> International Visiting Observer Program em Urologia Pediátrica no Children Hospital (Texas-USA)</p>
                                            <p><b>2017</b> 4ª Jornada Pernambucana de Urologia e XII Congresso Norte-Nordeste</p>
                                            <p><b>2017</b> 7º Workshop Internacional CMIPED – Urologia & Cirurgia Infantil Minimamente Invasiva 2017 Congresso Americano de Urologia (Boston-USA)</p>
                                            <p><b>2016</b> Curso Latino-Americano de Ureteroscopia flexível e laser - A inovação ao encontro da Endourologia (Salvador-BA)</p>
                                            <p><b>2016</b> IV Simpósio de Uropediatria (Salvador-BA) 2016 I Simpósio Baiano de Disfunções Miccionais (Salvador-BA)</p>
                                            <p><b>2016</b> Curso de Tratamento de Prolapso Vaginal Anteroapical com tela UpHold (Salvador-BA)</p>
                                            <p><b>2016</b> Workshop de Programa Conjunto SBU e Internation Continence Society XIV Congresso Paulista de Urologia – São Paulo</p>
                                            <p><b>2016</b> Workshop de Hiperplasia Benigna da Próstata - XIV Congresso Paulista de Urologia (São Paulo-SP)</p>
                                            <p><b>2016</b> Workshop de Estudo Urodinâmico Básico e Avançado - XIV Congresso Paulista de Urologia (São Paulo-SP)</p>
                                            <p><b>2015</b> XIV Jornada Paulista de Urologia (São Paulo)</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- toggle end -->
                        <!-- toggle -->
                        <div class="toggle ttm-style-classic">
                            <div class="toggle-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" >
                                    <i class="flaticon-charity"></i>
                                    <span class="ttm-title-text">Apresentação de Trabalhos em Congressos</span>
                                </a>
                            </div>
                            <div class="toggle-content">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="toggle-figure pr-10 res-991-mb-15">
                                            <img class="img-fluid" src="{{ asset('principal/images/portfolio/image1.jpg') }}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="ml_20 res-991-ml-0">

                                            <p>A identidade de gênero em pacientes com HAC - XXXVI Congresso Brasileiro de Urologia 2017.</p>
                                            <p>Existe associação entre sintomas urinários de mães e filhos? - XXXVI Congresso Brasileiro de Urologia 2017.</p>
                                            <p>A identidade de gênero, satisfação sexual e qualidade de vida em indivíduos com HAC e cariótipo 46 XX - XXXVI Congresso Brasileiro de Urologia 2017.</p>
                                            <p>Relação entre diferentes sintomas de distúrbio miccional e stress em crianças e adolescentes - XXXVI Congresso Brasileiro de Urologia 2017.</p>
                                            <p>Boari Flap Laparoscópicos: detalhes técnicos - XXXVI Congresso Brasileiro de Urologia 2017.</p>
                                            <p>Linfadenectomia retroperitoneal videolaparoscópica para o tratamento de metástase de mesotelioma maligno paratesticular - XXXVI Congresso Brasileiro de Urologia 2017.</p>
                                            <p>Conferencista do Módulo Disfunção Vesical - Alterações Autonômicas e Disfunção Vesical - 4ª Jornada Pernambucana de Urologia & XII Congresso Norte-Nordeste 2017.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- toggle end -->
                        <!-- toggle -->
                        <div class="toggle ttm-style-classic">
                            <div class="toggle-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" >
                                    <i class="flaticon-charity"></i>
                                    <span class="ttm-title-text">Minha Formação Acadêmica</span>
                                </a>
                            </div>
                            <div class="toggle-content">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="toggle-figure pr-10 res-991-mb-15">
                                            <img class="img-fluid" src="{{ asset('principal/images/portfolio/image3.jpg') }}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="ml_20 res-991-ml-0">
                                            <p><b>2018</b> International Visiting Observer Program em Urologia Pediátrica no Children Hospital (Texas-USA)</p>
                                            <p><b>2017</b> 4ª Jornada Pernambucana de Urologia e XII Congresso Norte-Nordeste</p>
                                            <p><b>2017</b> 7º Workshop Internacional CMIPED – Urologia & Cirurgia Infantil Minimamente Invasiva</p>
                                            <p><b>2017</b> Congresso Americano de Urologia (Boston-USA)</p>
                                            <p><b>2016</b> Curso Latino-Americano de Ureteroscopia flexível e laser - A inovação ao encontro da Endourologia (Salvador-BA)</p>
                                            <p><b>2016</b> IV Simpósio de Uropediatria (Salvador-BA)</p>
                                            <p><b>2016</b> I Simpósio Baiano de Disfunções Miccionais (Salvador-BA)</p>
                                            <p><b>2016</b> Curso de Tratamento de Prolapso Vaginal Anteroapical com tela UpHold (Salvador-BA)</p>
                                            <p><b>2016</b> Workshop de Programa Conjunto SBU e Internation Continence Society XIV Congresso Paulista de Urologia – São Paulo</p>
                                            <p><b>2016</b> Workshop de Hiperplasia Benigna da Próstata - XIV Congresso Paulista de Urologia (São Paulo-SP)</p>
                                            <p><b>2016</b> Workshop de Estudo Urodinâmico Básico e Avançado - XIV Congresso Paulista de Urologia (São Paulo-SP)</p>
                                            <p><b>2015</b> XIV Jornada Paulista de Urologia (São Paulo)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- toggle end -->
                    </div><!-- acadion end-->
                </div>

            </div><!-- row end-->
        </div>
    </section>
    <!--multi-section end-->

</div><!--site-main end-->

    @endsection
