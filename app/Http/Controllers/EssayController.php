<?php

namespace App\Http\Controllers;

use App\Models\Essay;
use Illuminate\Http\Request;

class EssayController extends Controller
{
    public function index()
    {
        return view('essay.index');
    }

    public function store(Request $request)
    {
        $essayData = $request->validate([
            'nama_penulis' => 'required',
            'judul_essay' => 'required',
            'abstrak' => 'required',
            'essay' => 'required',
        ]);

        $abstrak = $request->file('abstrak');
        $nama_abstrak =
            $essayData['nama_penulis'] .
            ' ' .
            'abstrak' .
            '.' .
            $abstrak->getClientOriginalExtension();
        $tujuan_abstrak = 'files/' . $essayData['nama_penulis'];
        $abstrak->move($tujuan_abstrak, $nama_abstrak);

        $essay = $request->file('essay');
        $nama_essay =
            $essayData['nama_penulis'] .
            ' ' .
            'essay' .
            '.' .
            $abstrak->getClientOriginalExtension();
        $tujuan_essay = 'files/' . $essayData['nama_penulis'];
        $essay->move($tujuan_essay, $nama_essay);

        // dd($essayData);

        $essayData['abstrak'] = $nama_abstrak;
        $essayData['essay'] = $nama_essay;

        Essay::create($essayData);

        return redirect('/success');
    }
}
