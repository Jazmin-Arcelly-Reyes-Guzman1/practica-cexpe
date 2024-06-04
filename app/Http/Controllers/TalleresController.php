<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalleresController extends Controller
{
    public function talleres(){
        $talleres = [
            ['titulo' => 'Danza'],
            ['titulo' => 'Baile'], 
            ['titulo' => 'Liderazgo'], 
            ['titulo' => 'Oratoria'],
        ];
        return view('talleres', compact('talleres'));
    }
}
