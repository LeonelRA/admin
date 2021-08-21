@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>{{ __('Administracion de productos') }}</h1>
@stop

@section('content')



    <div class="card">

        <div class="d-flex justify-content-between align-items-center p-4">

            <div>

                @include('components.modals.product')
                
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

        <table class="table table-bordered text-center mb-0">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>{{ __('Product') }}</th>
                    <th>'{{ __('Descripcion') }}</th>
                    <th>{{ __('Precio') }}</th>
                    <th>{{ __('Stock') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Agregado') }}</th>
                    <th>{{ __('Opciones') }}</th>
                </tr>
            </thead>
            <tbody id="table-products">
                    @foreach($products as $product)
                        <tr>
                            <td>
                                {{ $product->id }}
                            </td>
                            <td>
                                <img src="{{ asset($product->image) }}" height="100px">
                            </td>
                            <td>
                                {{ substr($product->description, 0, 30)."..." }}
                            </td>
                            <td>
                                {{ $product->price }}
                            </td>
                            <td>
                                <span class="
                                    @if($product->stock <= 15)
                                        badge badge-danger
                                    @else
                                        badge badge-success
                                    @endif
                                ">
                                    {{ $product->stock }}
                                </span>
                            </td>
                            <td>
                                <span class="
                                    @if($product->status == 'available')
                                        badge badge-success
                                    @else
                                        badge badge-danger
                                    @endif
                                ">
                                    {{ $product->status }}
                                </span>
                            </td>
                            <td>
                                {{ $product->created_at }}
                            </td>
                            <td>
                                <a href="{{ route('product.show', ['product' => $product->slug]) }}" class="btn btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>

        @if($products->links())

            {{-- <div id="paginator-vue"> --}}

                <div class="card-footer clearfix">

                    {{ $products->links() }}                    
            
                </div>

            {{-- </div> --}}

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