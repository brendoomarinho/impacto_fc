<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            // Defina as regras de validação aqui, correspondentes aos campos do formulário
        ]);

        Matricula::create($data);

        // Envio de email
        $emailData = $data; // Dados que você deseja enviar por email
        Mail::send('emails.matricula', $emailData, function ($message) {
            $message->to('destinatario@example.com', 'Nome Destinatário')
                ->subject('Nova Matrícula');
        });

        return redirect()->back()->with('success', 'Matrícula realizada com sucesso!');
    }
}
