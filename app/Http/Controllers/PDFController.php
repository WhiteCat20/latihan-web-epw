<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $users = User::get();

        $data = [
            'nama' => 'fzrahmadan',
            'reg' => '5009201112',
        ];

        $pdf = PDF::loadView('dompdf', $data);

        return $pdf->download('solution.pdf');
    }
}
