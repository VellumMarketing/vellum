<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoMail;

class ContatoController extends Controller
{
    public function enviarEmail(Request $request)
{
    $dados = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
        'plano' => 'required|string', // Captura o plano enviado no formulário
    ]);

    // Enviar o e-mail para o destinatário
    Mail::to('vellummarketingagency@gmail.com')->send(new ContatoMail($dados));

    // Redirecionar para a página inicial com mensagem de sucesso
    return redirect()->route('home')->with('success', 'Mensagem enviada com sucesso!');
}

}