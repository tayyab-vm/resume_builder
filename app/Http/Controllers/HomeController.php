<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    public function download(){

        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('tayyab', $data);
    
        return $pdf->stream('Tayyab Rasool - Senior Software Engineer.pdf');
    }
}
