<div class="bg-white p-3 box-shadow rounded">
	<div>
		<h2>{{ __('Categorias') }}</h2>
	</div>
	<hr>
	<div class="row">
		
		@foreach($categories->sortByDesc('products_count') as $category)

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
		                	{{ "{$category->products_count} Productos" }}
		                </span>
		              </div>
		              <!-- /.info-box-content -->
		            </div>
		            <!-- /.info-box -->
		          </div>
		          <!-- /.col -->   

		@endforeach

	</div>
</div>