@include('layouts.main.partials.header')
@inject('recents', 'App\Models\Blog\Post')
@inject('items', 'App\Models\Blog\Post')
@inject('post', 'App\Models\Blog\Post')

@include('layouts.main.partials.menu-web')

@yield('content')

@include('layouts.main.partials.footer')
