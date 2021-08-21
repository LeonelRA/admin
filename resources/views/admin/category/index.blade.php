@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>{{ __('Administracion de categorias') }}</h1>
@stop

@section('content')

    <div class="card">

        <div class="d-flex justify-content-between align-items-center p-4">

            <div>

                @include('components.modals.category')
                
            </div>

            <div>
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button onclick="testeo()" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                
            </div>
        </div>

        <table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>{{ __('Nombre') }}</th>
                    <th style="width: 20px">{{ __('Cantidad') }}</th>
                    <th style="width: 40px">{{ __('Opciones') }}</th>
                </tr>
            </thead>
            <tbody>

                    @foreach($categories as $category)
                        <tr>
                            <td>
                                {{ $category->id }}
                            </td>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td>
                                {{ $category->products_count }}
                            </td>
                            <td>
                                <button class="btn btn-danger">
                                    <i class="fas fa-times-circle"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach

            </tbody>
        </table>

        @if($categories->links())

            <div class="card-footer clearfix">

                {{ $categories->links() }}

            </div>

        @endif
    </div>

@stop

@section('css')
    <style type="text/css">
        .pagination {
            margin-bottom: 0;
        }

        nav ul.pagination {
            display: flex;
            float: right;
        }
    </style>
@stop