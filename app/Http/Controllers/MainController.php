<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        $data = [
            'name' => 'Walter',
            'cidade' => 'Curitiba'
        ];
        return view('admin.newPage3')->with($data);
    }
}
