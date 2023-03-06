<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\subject_title;
use App\Models\subject_subtitle;
use App\Models\subject_content;
use App\Models\subject_note;


class HomeController
{
    /**
     * Exibe a página principal da aplicação.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        
        $registros = subject_title::all(['id_title', 'title']);
        $subtitles = subject_subtitle::all();
        return view('main', compact('registros', 'subtitles'));
        
    }

    public function edit()
    {
        
        $registros = subject_title::all(['id_title', 'title']);
        $subtitles = subject_subtitle::all();
        return view('edit', compact('registros', 'subtitles'));
        
    }

    public function subject()
    {
        $registros = subject_title::all(['id_title', 'title']);
        $subtitles = subject_subtitle::all();
        return view('mainFormSubject', compact('registros', 'subtitles'));
    }

    public function submitFormSubject(Request $request)
    {

        $subject = $request->input('subject');
        $id_subject = uniqid();

        $newRecord = new subject_title;
        $newRecord->id_title = $id_subject;
        $newRecord->title = $subject;
        $newRecord->save();

        $valores = $request->input('valores');
        $valuesArray = explode(',', $valores);

    foreach ($valuesArray as $value) {
        // Crie um novo registro no banco de dados para cada valor separado por vírgula
        $newRecord = new subject_subtitle;
        $newRecord->id_title = $id_subject;
        $newRecord->subtitle = trim($value); // remova espaços em branco adicionais
        $newRecord->save();
    }

        // processar os dados do formulário e salvar no banco de dados
        return response()->json(['message' => $subject.' / '.$valores.'Dados enviados com sucesso!']);

    }

    public function subjectNotes(Request $request)
    {
        // Validar os dados do formulário
        $validatedData = $request->validate([
            'editordata' => 'required',
            'editordata2' => 'required'
        ]);

        // Criar uma nova instância do modelo
        $content = new subject_content;
        // Atribuir os dados do formulário ao modelo
        $content->content = $validatedData['editordata'];
        $content->id_title = '12311234';
        $content->id_subtitle = '12311234';


        // Salvar o modelo no banco de dados
        $content->save();

         // Criar uma nova instância do modelo
         $note = new subject_note;
         // Atribuir os dados do formulário ao modelo
         $note->note = $validatedData['editordata2'];
         $note->id_title = '12311234';
         $note->id_subtitle = '12311234';
         $note->id_content = '12311234';
 
         // Salvar o modelo no banco de dados
         $note->save();


        // Redirecionar para a página de listagem de notas
        return redirect()->route('edit');
    }


}
