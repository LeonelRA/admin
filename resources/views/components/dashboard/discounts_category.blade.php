@empty(!$categories)

<div class="bg-white p-3 box-shadow rounded mt-4">
    <div>
        <h2>{{ __('Los mejores descuentos de las categorias') }}</h2>
    </div>
    <hr>
    <div class="row">

    @if(!$categories->isEmpty())

        @foreach($categories->sortByDesc('discounts') as $category)

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-success">
                            <i class="fas fa-tshirt"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">
                                {{ $category->name }}
                            </span>
                            <span class="info-box-number">
                                {{ "{$category->discounts} De descuento" }}
                            </span>
                        </div>
                    </div>
                </div>

        @endforeach

    @else

        <div class="alert alert-warning">{{ __('Sin categorias') }}</div>

    @endif
    
    </div>
</div>

<div class="bg-white p-3 box-shadow rounded mt-4">
    <div>
        <h2>{{ __('Los peores descuentos de las categorias') }}</h2>
    </div>
    <hr>
    <div class="row">

    @if(!$categories->isEmpty())

        @foreach($categories->sortBy('discounts') as $category)

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-success">
                            <i class="fas fa-tshirt"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">
                                {{ $category->name }}
                            </span>
                            <span class="info-box-number">
                                {{ "{$category->discounts} De descuento" }}
                            </span>
                        </div>
                    </div>
                </div>

        @endforeach

    @else

        <div class="alert alert-warning">{{ __('Sin categorias') }}</div>

    @endif

    </div>
</div>

@endempty