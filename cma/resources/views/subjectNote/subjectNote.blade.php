<div id="content" class="p-2 p-md-3 pt-2">
    <div class="row" style='margin:0; padding:10px'>
        <div class="col-md-12">
            <div class="card" style='height:100%; '>
                <div class="card-header">
                    <h5 style='color: #bbb'>
                        <b>
                            @foreach($titles as $title)
                            {{ $title->title }}:
                            @endforeach
                        </b>
                        {{ $subtitle }}
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <form method="post" id="subjectNotes" action="{{ route('submit_note') }}">
        @csrf
        <input hidden type="text" name="idtitle" value="{{ $id_title }}">
        <input hidden type="text" name="idsubtitle" value="{{ $id_subtitle }}">
        <input hidden type="text" name="subtitle" value="{{ $subtitle }}">
        <div class="row" style='margin:0; padding:10px'>
            <div class="col-md-6">
                <div class="card" style='height:100%; '>
                    <div class="card-header">
                        <h3 class="text-primary">Conteúdo</h3>
                    </div>
                    <div class="card-body">
                        <textarea class="form-control" style="height:100%" id="summernote" name="editordata">
                        @foreach($subjects as $subject)
                        {{ $subject->content  ?? old('editordata')}}
                        @endforeach
                    </textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-warning">Anotações</h3>
                    </div>
                    <div class="card-body">
                        <textarea class="form-control" id="summernote2" name="editordata2">
                        @foreach($subject_notes as $subject_note)
                        {{ $subject_note->note }}
                        @endforeach 
                    </textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style='margin:0; padding:10px'>
            <div class="col-md-12">
                <button class="btn btn-primary" type="submit">Salvar Alterações</button>
            </div>
        </div>
    </form>
</div>