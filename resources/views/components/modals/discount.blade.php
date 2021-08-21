<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
    Agregar descuento
</button>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Agrega tu descuento</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                 <div class="form-group">
                    <label for="type">Tipo de descuento</label>
                    <select class="form-control" id="type" name="type">
                      <option value="avaialble">Porcentaje</option>
                      <option value="unavaialble">Dolares</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label for="discount">Descuento</label>
                    <input type="number" class="form-control" name="discount" id="discount" placeholder="Descuento">
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
