<!-- Modal -->
<div class="modal fade" id="modalCalendar" tabindex="-1" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModal">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="message"></div>
                
                <form id="formEvent">
                    <div class="form-group row">
                        <label for="title" class="col-sm-4 col-form-label">Título</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" class="form-control" id="title">
                            <input type="hidden" name="id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="start" class="col-sm-4 col-form-label">Data/Hora Inicial</label>
                        <div class="col-sm-8">
                            <input type="text" name="start" placeholder="00/00/0000 00:00:00" class="form-control date-time" id="start">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="end" class="col-sm-4 col-form-label">Data/Hora Final</label>
                        <div class="col-sm-8">
                            <input type="text" name="end" placeholder="00/00/0000 00:00:00" class="form-control date-time" id="end">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="color" class="col-sm-4 col-form-label">Cor</label>
                        <div class="col-sm-8">
                            <input type="color" name="color" class="form-control" id="color">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-4 col-form-label">Preço</label>
                        <div class="col-sm-8">
                            <input type="number" name="price" class="form-control" id="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-4 col-form-label">Descrição</label>
                        <div class="col-sm-8">
                            <textarea type="description" name="description" cols="35" rows="4" id="description"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success saveEvent">Salvar</button>
                <button type="button" class="btn btn-danger deleteEvent">Excluir</button>
            </div>
        </div>
    </div>
</div>