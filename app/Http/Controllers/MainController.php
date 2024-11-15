<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        $data = [
            'value' => 100,
            'cities' => ['Itapeva', 'Curitiba', 'Salvador'],
            'names' => ['Walter', 'Renan'],
            'indice' => 1
        ];
        return view('home', $data);
    }

    public function submitForm(Request $request): void
    {
        echo "Formulário submetido";
    }

    public function setSession(): View
    {
        session(['name' => "Walter"]);
        return view('home');
    }

    public function clearSession()
    {
        session()->forget('name');
        return view('home');
    }

   /*  public function viewSession()
    {
        $teste = session()->all();
        dd($teste);
    } */

}
