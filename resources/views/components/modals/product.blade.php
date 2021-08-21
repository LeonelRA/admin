<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
    Agregar producto
</button>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Agrega tu producto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="excerpt">Excerpt</label>
                    <textarea class="form-control" name="excerpt" id="excerpt"></textarea>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="number" min="1" name="price" class="form-control" id="price" placeholder="Precio">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" name="stock" id="stock" placeholder="Stock">
                </div>
                 <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                      <option value="avaialble">Disponible</option>
                      <option value="unavaialble">No disponible</option>
                    </select>
                  </div>
                 <div class="form-group">
                    <label for="status">Categoria</label>
                    <select class="form-control" id="status" name="status">
                        @foreach($categories as $category)
                            <option value="avaialble">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="custom-file mt-2">
                    <input type="file" class="custom-file-input" name="image" id="image" lang="en">
                    <label class="custom-file-label" for="image">Agregar imagen</label>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
