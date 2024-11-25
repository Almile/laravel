<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class AppController extends Controller
{
    public function sobre(){
        $nome = "Laravel";
        $nomes = ["PHP", "COMPOSER", "LARAVEL"];
        return view ('sobre', ['nome'=>$nome, 'nome2'=>$nomes]);

    }
    public function exibirUsuarios(){

        $usuarios = Usuario::all();
       return view('usuarios', ['users'=>$usuarios]);
    }

    public function addUsuario(Request $request) {
        $usuario = new Usuario();
        $usuario->nome = $request->fnome;
        $usuario->email = $request->femail;
        $usuario->password = Hash::make($request->fsenha);
        $usuario->save();
    
        return redirect('/usuarios');
    }
    

    public function editUsuario($id){
        //busca pelo id
        $usuario = Usuario::findOrFail($id);

        //retorna os dados do usuario na view
        return view('editar', ['user' =>$usuario]);

    }

    public function atualizar(Request $request){
        $usuario = Usuario::findOrFail($request->id);
        $dados = [
            'nome' => $request->fnome,
            'email' => $request->femail
        ];
        //dados atualizados do form e passa pra base de dados 
        $usuario->update($dados);
        return redirect('/usuarios');
    }

    public function delUsuario($id){
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect('/usuarios');
    }

    public function mostrarLogin() {
        return view('login'); // Certifique-se de que a view "login.blade.php" exista
    }

    
    public function logar(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        // Find the user by email
        $usuario = Usuario::where('email', $credentials['email'])->first();
    
        // Check if user exists and password matches
        if ($usuario && Hash::check($credentials['password'], $usuario->password)) {
        // Authentication successful
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }
    
        return back()->withErrors([
            'email' => 'As credenciais não são válidas.',
        ]);
    }
    
    
}

