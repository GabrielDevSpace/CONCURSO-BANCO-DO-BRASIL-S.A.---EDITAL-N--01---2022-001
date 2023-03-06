<div id="content" class="p-4 p-md-5 pt-5">

    <form method="post" id="subjectNotes">
        @csrf
        <div class="row" style='margin:0; padding:10px'>
            <div class="col-md-6">
                <div class="card" style='height:100%; '>
                    <div class="card-header">
                        <h3 class="text-primary">Matéria</h3>
                    </div>
                    <div class="card-body">

                        <textarea class="form-control" style="height:100%" id="summernote" name="editordata"></textarea>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-warning">Anotações</h3>
                    </div>
                    <div class="card-body">

                        <textarea class="form-control" id="summernote2" name="editordata2"></textarea>

                    </div>
                </div>
            </div>

        </div>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
</div>