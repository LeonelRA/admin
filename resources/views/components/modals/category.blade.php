<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
    Agregar categoria
</button>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Agrega tu categoria</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <label for="category">Categoria</label>
                    <input type="text" class="form-control" name="category" id="category" placeholder="Categoria">
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
