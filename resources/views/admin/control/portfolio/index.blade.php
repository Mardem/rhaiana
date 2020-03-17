@extends('layouts.admin-master')

@section('title')
    Administração do portfólio
@endsection

@section('content')
    @include('components.notifications')
    <section class="section">
        <div class="section-header">
            <h1>Administração de menus do portfólio</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Menus <span>({{ $menus->total() }})</span></h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary">Adicionar <i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped table-md">
                                <tbody>
                                <tr>
                                    <th>Menu</th>
                                    <th>Link</th>
                                    <th></th>

                                </tr>
                                @foreach($menus as $menu)
                                    <tr>
                                        <td><img
                                                src="{{ $menu->path == null ? 'https://via.placeholder.com/100x100' : asset($menu->path) }}"
                                                width="50" alt=""></td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-danger btn-xs" id="btn-{{ $menu->id }}"
                                               onclick="deleteItem('btn-{{ $menu->id }}')"
                                               data-form-id="form-{{ $menu->id }}">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form action="{{ route('admin.portfolio.destroy', $menu->id) }}"
                                                  method="post" id="form-{{ $menu->id }}" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            {{ $menus->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection
