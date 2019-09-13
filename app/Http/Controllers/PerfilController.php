<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil as Perfil;
use Illuminate\Support\Facades\Validator;

class PerfilController extends Controller
{
    public function criar()
    {
    	return view('site.perfil.criar');
    }

    public function persistir(Request $request)
    {
        $this->validator($request->all())->validate();

        $data = $request->all();

        Perfil::create([
            'nome' => $data['nome']
        ]);

        echo "Perfil criado";
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => ['required', 'string', 'max:255']
        ]);
    }
}
