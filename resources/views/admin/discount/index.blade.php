@extends('adminlte::page')

@section('title', 'Descuentos')

@section('content_header')
    <h1>{{ __('Administracion de categorias') }}</h1>
@stop

@section('content')

    <div class="card">

        <div class="d-flex justify-content-between align-items-center p-4">

            <div>

                @include('components.modals.discount')
                
            </div>

            <div>
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button class="btn btn-default">
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
                    <th>{{ __('Tipo') }}</th>
                    <th style="width: 20px">{{ __('Descuento') }}</th>
                    <th style="width: 40px">{{ __('Opciones') }}</th>
                </tr>
            </thead>
            <tbody>

                    @foreach($discounts as $discount)
                        <tr>
                            <td>
                                {{ $discount->id }}
                            </td>
                            <td>
                                {{ $discount->type }}
                            </td>
                            <td>
                                {{ $discount->discount }}
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">
                                    <i class="fas fa-times-circle"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

            </tbody>
        </table>

        @if($discounts->links())

            <div class="card-footer clearfix">

                {{ $discounts->links() }}

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