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

    public function edit(Request $request, $id_title, $id_subtitle, $subtitle)
    {
        $titles = subject_title::where('id_title', $id_title)
            ->get();

        $subjects = subject_content::where('id_title', $id_title)
            ->where('id_subtitle', $id_subtitle)
            ->get();

        $subject_notes = subject_note::where('id_title', $id_title)->where('id_subtitle', $id_subtitle)
            ->get();


        $registros = subject_title::all(['id_title', 'title']);
        $subtitles = subject_subtitle::all();

        return view('edit', compact('registros', 'subtitles', 'titles', 'subjects', 'subject_notes'), ['id_title' => $id_title, 'id_subtitle' => $id_subtitle, 'subtitle' => $subtitle]);
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
        return response()->json(['message' => $subject . ' / ' . $valores . 'Dados enviados com sucesso!']);
    }

    public function submit_note(Request $request)
    {

        // Validar os dados do formulário
        $idtitle = $request->idtitle;
        $idsubtitle = $request->idsubtitle;
        $subtitle = $request->subtitle;

        $editordata = $request->editordata;
        $editordata2 = $request->editordata2;

        //dd($editordata, $idtitle, $idsubtitle);

        $content_exist = subject_content::where('id_title', $idtitle)->where('id_subtitle', $idsubtitle)
            ->get();

        $id_content = $content_exist->id;
        dd($id_content);
        
        $note_exist = subject_note::where('id_title', $idtitle)->where('id_subtitle', $idsubtitle)
            ->get();
        
            // Verifica se Ja existe Content referente ao subtitulo
        if ($content_exist->count() > 0) {

            $subject_content = subject_content::where('id_title', $idtitle);

            $subject_content = subject_content::where('id_subtitle', $idsubtitle)->first();

            $subject_content->content = $editordata;
            $subject_content->save();

            $message = "Atualizado";
        } else {

            $newRecord = new subject_content;
            $newRecord->id_title = $idtitle;
            $newRecord->id_subtitle = $idsubtitle;
            $newRecord->id_content = $id_content;
            $newRecord->content = $editordata;
            $newRecord->save();
            $message = "Criado";
        }

        // Verifica se Ja existe Note referente ao subtitulo
        if ($note_exist->count() > 0) {

            $subject_note = subject_note::where('id_title', $idtitle);

            $subject_note = subject_note::where('id_subtitle', $idsubtitle)->first();

            $subject_note->note = $editordata2;
            $subject_note->save();

            $message = "Atualizado";
        } else {

            $newRecordNote = new subject_note;
            $newRecordNote->id_title = $idtitle;
            $newRecordNote->id_subtitle = $idsubtitle;
            $newRecordNote->note = $editordata2;
            $newRecordNote->save();
            $message = "Criado";
        }




        // Redirecionar para a página de listagem de notas
        return redirect()->route('edit', ['id_title' => $idtitle, 'id_subtitle' => $idsubtitle, 'subtitle' => $subtitle])->with('success', $message);
    }
}
