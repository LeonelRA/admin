<div class="bg-white p-3 box-shadow rounded mt-4">
    <div>
        <h2>{{ __('Categorias') }}</h2>
    </div>
    <hr>
    <div class="row">

    @foreach($discounts as $discount)

        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $discount->discount }}</h3>
                    <p>{{ $discount->type }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-receipt"></i>
                </div>
                <a href="#" class="small-box-footer">
                   {{ "{$discount->products_count} Productos con este descuento" }}
                </a>
            </div>
        </div>
        <!-- ./col -->

    @endforeach
    </div>
    <!-- /.row -->
</div>
