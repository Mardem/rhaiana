
@extends('layouts.internal.main')
@section('content')

    @inject('post', 'App\Models\Blog\Post')
    @inject('recents', 'App\Models\Blog\Post')
    @inject('items', 'App\Models\Blog\Post')
    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title"> Blog</h1>
                            <h3 class="subtitle"> {{ $post->title }}</h3>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a title="Dra.Rhaiana Gondim" href="{{ route('home-site') }}" class="home"><i class="themifyicon ti-home"></i>&nbspHome</a>
                                        </span>
                                    <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                    <span>Blog</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

<div class="site-main">

    <!-- sidebar -->
    <div class="sidebar ttm-sidebar-right ttm-bgcolor-white break-991-colum clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-9 content-area">
                    <!-- post -->


                    <!-- post -->
                    @forelse($posts as $post)
                    <article class="post ttm-blog-classic clearfix">
                        <!-- post-featured-wrapper -->
                        <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                            <div class="ttm-post-featured">
                                <img class="img-fluid" src="{{ asset($post->path ?? $post->thumb_path) }}" alt="{{ $post->title }}">
                            </div>

                        </div><!-- post-featured-wrapper end -->
                        <!-- ttm-blog-classic-content -->
                        <div class="ttm-blog-classic-content">
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
                            </header>

                            <div class="entry-content">
                                <div class="ttm-box-desc-text">
                                    <p>  {!! \Illuminate\Support\Str::limit(strip_tags($post->content), 177) !!}</p>
                                </div>
                                <div class="ttm-blogbox-desc-footer">
                                    <div class="ttm-blogbox-footer-readmore">
                                        <div class="ttm-blogbox-footer-left">
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-black" href="{{ route('blog.show', $post->slug) }}">LEIA MAIS</a>
                                        </div>
                                    </div>
                                    <div class="ttm-social-share-wrapper">
                                        <div class="ttm-social-share-title">Redes Sociais</div>
                                        <div class="social-icons circle">
                                            <ul>
                                                <li><a href="https://www.facebook.com/rhaiana.gondim"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.instagram.com/rhaianagondim/"><i class="fa fa-instagram"></i></a></li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ttm-blog-classic-content end -->
                    </article>
                        <!-- post end -->
                    @empty

                        <h2 class="text-center">Não encontramos nada por aqui...</h2>
                        <p>Tente realizar uma busca</p>
                        <form action="{{ route('blog') }}" method="get">
                            <div class="input-group" style="border: 1px solid #c0c0c0">
                                <input type="text" placeholder="Procure aqui" name="q" class="form-control search-input">
                                <span class="input-group-btn" style="border-left: 1px solid #eeeeee;">
                                    <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                                    </span>
                            </div>
                        </form>
                @endforelse


                    <div class="col-md-12">

                        {{ $posts->links() }}

                    </div>



                </div>
                <div class="col-lg-3 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-grey">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <aside class="widget widget-search">
                        <form role="search" method="get" class="search-form  box-shadow" action="#">
                            <label>
                                <span class="screen-reader-text">Procurar por:</span>
                                <input type="search" class="input-text" placeholder="Buscar …" value="" name="q">
                            </label>
                            <input type="submit" class="search-submit" value="Search">
                        </form>
                    </aside>
                    <aside class="widget widget-categories">
                        <h3 class="widget-title">Tratamentos</h3>
                        <ul>
                            @foreach($items->where('category_id', array_search('TREATMENT', \App\Models\Blog\Post::TYPE))->get() as $treatment)
                            <li><a href="{{ route('tratamentos', $treatment->slug) }}">{{ $treatment->title }}</a></li>
                                @endforeach

                        </ul>
                    </aside>
                    <aside class="widget widget-recent-post">
                        <h3 class="widget-title">Notícias Recentes</h3>
                        <ul class="widget-post ttm-recent-post-list">

                            @foreach($recents->limit(6)->blog()->get() as $recent)
                            <li>

                                <a href="{{ route('blog.show', $recent->slug) }}"><img src="{{ $recent->thumb_path == '' ? 'https://placehold.it/75x75' : asset($recent->thumb_path) }}" alt="post-img"></a>
                                <span class="post-date">April 1, 2019</span>
                                <a href="{{ route('blog.show', $recent->slug) }}">{{ $recent->title }}</a>
                            </li>

                            @endforeach

                        </ul>
                    </aside>



                    <aside class="widget tagcloud-widget">
                        <h3 class="widget-title">Tags</h3>
                        <div class="tagcloud">
                            <a href="https://www.instagram.com/rhaianagondim/" class="tag-cloud-link">doutora</a>
                            <a href="https://www.instagram.com/rhaianagondim/" class="tag-cloud-link">urologia</a>
                            <a href="https://www.instagram.com/rhaianagondim/" class="tag-cloud-link">uropediatria</a>
                            <a href="https://www.instagram.com/rhaianagondim/" class="tag-cloud-link">sáude</a>



                        </div>
                    </aside>
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!-- sidebar end -->


</div><!--site-main end-->
@endsection
