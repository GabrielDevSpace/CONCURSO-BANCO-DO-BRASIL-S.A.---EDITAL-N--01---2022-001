<div id="content" class="p-4 p-md-5 pt-5">
    <div class="row" style='margin:0; padding:10px'>
        <div class="col-md-12">
            <div class="card" style='height:100%; '>
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <form id="formSubject">
                        @csrf
                        <div class="form-group">
                            <label for="valor">Materia:</label>
                            <input type="text" class="form-control" id="subject" style="border: 1px solid #f0f0f0">
                            <label for="valor">Assunto:</label>
                            <input type="text" class="form-control" id="valor" style="border: 1px solid #f0f0f0">
                        </div>
                        <button type="button" class="btn btn-primary" onclick="adicionarValor()">Adicionar</button>
                        <div class="form-group">
                            <label for="valores">Lista de Assuntos:</label>
                            <textarea class="form-control" id="valores" rows="5" style="border: 1px solid #f0f0f0"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

