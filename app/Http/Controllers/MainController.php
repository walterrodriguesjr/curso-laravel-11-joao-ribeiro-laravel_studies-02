<?php

namespace App\Http\Controllers;

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
}
