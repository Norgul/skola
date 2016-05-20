<?php

namespace App\Http\Controllers;

use App\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

use App\Http\Requests;

class PDFController extends Controller
{
    public function printPDF(PDF $pdf)
    {
        $users = User::all();
        $pdf->loadView('pdf.index', compact('users'));
        return $pdf->setOrientation('landscape')->setPaper('A4')->stream();
    }
}
