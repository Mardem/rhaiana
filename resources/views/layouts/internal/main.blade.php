@include('layouts.internal.partials.header')
@inject('recents', 'App\Models\Blog\Post')
@inject('type', 'App\Models\Blog\Post')
@inject('post', 'App\Models\Blog\Post')
@inject('items','App\Models\Blog\Post')
@include('layouts.internal.partials.menu-web')

@yield('content')

@include('layouts.internal.partials.footer')
