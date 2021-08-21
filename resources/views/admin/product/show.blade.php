@extends('adminlte::page')

@section('title', $product->name)

@section('content_header')
    <h1>{{ $product->name }}</h1>
@stop

@section('content')


<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none">
                        {{ $product->name }}
                    </h3>
                    <div class="col-12">
                        <img src="{{ asset($product->image) }}" class="product-image" alt="Product Image">
                    </div>
                </div>
            <div class="col-12 col-sm-6">
                <h3 class="my-3">{{ $product->name }}</h3>
                <p>{{ $product->excerpt }}</p>

                <hr>

                <div class="bg-gray py-2 px-3 mt-4">
                    @if($product->discount_price !== null)
                        <h2 class="mb-0">
                            {{ $product->discount_price }}
                            <i class="fas fa-dollar-sign"></i>
                        </h2>
                        <del class="mt-0">
                          <small>{{ $product->price }}</small>
                        </del>
                    @else
                        <h2 class="mb-0">
                            {{ $product->price }}
                            <i class="fas fa-dollar-sign"></i>
                        </h2>
                    @endif
                </div>

                <div class="mt-2">
                    <p>{{ __("Categoria : {$product->category->name}") }}</p>
                </div>

            </div>
        </div>
        <div class="row mt-4">
            <nav class="w-100">
                <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">
                        {{ __('Descipcion') }}
                    </a>
                </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 
                    {{ $product->description }} 
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>


@stop