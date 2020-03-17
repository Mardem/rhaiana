
<!--header start-->
<header id="masthead" class="header ttm-header-style-overlay">
    <!-- ttm-fbar-main-w -->
    <div class="ttm-fbar-main-w ttm-fbar-position-right">

    </div><!-- ttm-fbar-main-w end -->
    <!-- ttm-header-wrap -->
    <div class="ttm-header-wrap">
        <!-- ttm-stickable-header-w -->
        <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <!-- site-branding -->
                        <div class="site-branding">
                            <a class="home-link" href="index.html" title="Dra.Rhaiana Gondim" rel="home">
                                <img id="logo-img" class="img-center" src="{{ asset('principal/images/logo-white.png') }}" alt="logo-img">
                            </a>
                        </div><!-- site-branding end -->
                        <!--site-navigation -->
                        <div id="site-navigation" class="site-navigation">
                            <!-- ttm-header-text-area -->
                            <div class="ttm-header-text-area">
                                <div class="ttm-header-floating-text">
                                    <h4>Ligue para</h4>
                                    <div class="icon"> <i class="fa fa-phone"></i></div>
                                </div>
                                <div class="header-info-widget">
                                    <h2>(61) 3771-8702 </h2>
                                    <h3>contato@rhaianagondim.com</h3>
                                </div>
                            </div>
                            <!-- ttm-header-text-area end -->
                            <div class="ttm-menu-toggle">
                                <input type="checkbox" id="menu-toggle-form" />
                                <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                    <span class="toggle-block toggle-blocks-1"></span>
                                    <span class="toggle-block toggle-blocks-2"></span>
                                    <span class="toggle-block toggle-blocks-3"></span>
                                </label>
                            </div>
                            <nav id="menu" class="menu">
                                <ul class="dropdown">
                                    <li class="active"><a href="{{ route('home-site') }}">Home</a>

                                    </li>
                                    <li><a href="{{ route('about-doctor') }}">Sobre</a>

                                    </li>
                                    <li><a href="#">Tratamentos+</a>
                                        <ul>
                                            @foreach ($items->where('category_id', array_search('TREATMENT', \App\Models\Blog\Post::TYPE))->get() as $treatment)
                                                <li><a href="{{ route('tratamentos', $treatment->slug) }}">{{ ucfirst($treatment->title) }}</a></li>
                                            @endforeach
                                        </ul>

                                    </li>
                                    <li><a href="{{ route('blog') }}">Blog</a>

                                    </li>
                                    <li><a href="{{ route('contato.store') }}">Contato</a>

                                    </li>
                                </ul>
                            </nav>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div><!-- ttm-stickable-header-w end-->
    </div><!--ttm-header-wrap end -->
</header><!--header end-->

