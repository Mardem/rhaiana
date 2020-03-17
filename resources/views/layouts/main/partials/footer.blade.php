<!--footer start-->
<footer class="footer widget-footer clearfix">
    <div class="first-footer ttm-bgcolor-skincolor">
        <div class="container">
            <div class="row">
                <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">

                </div>
                <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">

                </div>
                <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">

                </div>
            </div>
        </div>
    </div>
    <div class="second-footer ttm-textcolor-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_text clearfix">
                        <img alt="Logo da Dra.Rhaiana" src="{{ asset('principal/images/logo-white.png') }}" width="90%">
                        <div class="textwidget widget-text">
                            <br>
                            Especialista em Urologia e Urologia Pediátrica, e terei a maior satisfação em poder atender seu filho!
                            <br><br>
                            <div class="social-icons social-hover">
                                <ul class="list-inline">
                                    <li class="social-facebook"><a class="tooltip-top" target="_blank" href="http://facebook.com/rhaianagondim" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a class="tooltip-top" target="_blank" href="https://www.instagram.com/rhaianagondim/" data-tooltip="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_nav_menu clearfix">
                        <h3 class="widget-title">Links rápidos</h3>
                        <ul id="menu-footer-quick-links">
                            <li><a href="{{ route('about-doctor') }}">Dr.Rhaiana</a></li>
                            <li><a href="{{ route('contato.store') }}">Endereço</a></li>
                            <li><a href="{{ route('blog') }}">Notícias</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                    <div class="widget style2 widget-out-link clearfix">
                        <h3 class="widget-title">Notícias Recentes</h3>
                        <ul class="widget-post ttm-recent-post-list">
                            @foreach($recents->limit(3)->blog()->get() as $recent)
                                <li>
                                    <a href="{{ route('blog.show', $recent->slug) }}"><img src="{{ $recent->thumb_path == '' ? 'https://placehold.it/75x75' : asset($recent->thumb_path) }}" alt="post-img"></a>
                                    <span class="post-date">{{ $recent->title }}</span>
                                    <a href="single-blog.html">{!! \Illuminate\Support\Str::limit(strip_tags($recent->content), 30) !!}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                    <div class="widget dark">
                        <h3 class="widget-title">Contato rápido</h3>
                        <form id="footer_quick_contact_form" class="quick-contact-form" action="{{ route('contato.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input name="email" class="form-control" type="email" placeholder="E-mail" required>
                            </div>
                            <div class="form-group">
                                <input name="phone" class="form-control" type="text" data-mask="(99) 9 9999-9999 " placeholder="Telefone">
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Mensagem" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-transparent btn-xs btn-flat mt-0">Enviar mensagem</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-text ttm-textcolor-white">
        <div class="container">
            <div class="row copyright">
                <div class="col-md-12">
                    <p class="text-white font-11 m-0" style="margin-bottom: 0; padding-bottom: 5px; padding-top: 5px; font-size: 15px; color: white!important; text-align: center;">Feito com <i class="fa fa-heart animated infinite fast heartBeat" style="color:red;"></i> por <a title="Agência Hoogli Marketing Digital " href="https://agenciavtec.com/" target="_blank" rel="noopener"><img style="vertical-align: middle; margin-top: -5px" src="{{ asset('principal/images/hoogli.png') }}" alt="Hoogli logo" width="35"></a><br></p>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--footer end-->

<!--back-to-top start-->
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
<!--back-to-top end-->

</div><!-- page end -->


<!-- Javascript -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src='js/jquery.js'></script>
<script src="{{ asset('principal/js/jquery.min.js') }}"></script>
<script src="{{ asset('principal/js/tether.min.js') }}"></script>
<script src="{{ asset('principal/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('principal/js/jquery.easing.js') }}"></script>
<script src="{{ asset('principal/js/jquery-waypoints.js') }}"></script>
<script src="{{ asset('principal/js/jquery-validate.js') }}"></script>
<script src="{{ asset('principal/js/owl.carousel.js') }}"></script>
<script src="{{ asset('principal/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('principal/js/numinate.min.js') }}"></script>
<script src="{{ asset('principal/js/jquery.event.move.js') }}"></script>
<script src="{{ asset('principal/js/jquery.twentytwenty.js') }}"></script>
<script src="{{ asset('principal/js/booked-calendar.js') }}"></script>
<script src="{{ asset('principal/js/main.js') }}"></script>
<script src='{{ asset('principal/js/isotope.js') }}'></script>
<script src='{{ asset('principal/js/simple-lightbox.js') }}'></script>



<!-- Revolution Slider -->
<script src="{{ asset('principal/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('principal/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('principal/revolution/js/slider.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

<script src="{{ asset('principal/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('principal/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('principal/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('principal/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('principal/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('principal/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('principal/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('principal/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>

<!-- Javascript end-->

</body>
</html>
