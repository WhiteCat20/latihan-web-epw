<?php
//https://www.malasngoding.com/membuat-upload-file-laravel/
namespace App\Http\Controllers;

use App\Models\UploadFile;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload()
    {
        return view('upload.upload');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'file_motlet' => 'required',
            'file_essay' => 'required',
            'file_bukti_ss' => 'required',
            'file_mbti' => 'required',
        ]);

        $file_motlet = $request->file('file_motlet');
        $nama_file_motlet =
            time() .
            '-' .
            'motlet' .
            '-' .
            $file_motlet->getClientOriginalName();
        $tujuan_upload = 'files/motlet';
        $file_motlet->move($tujuan_upload, $nama_file_motlet);

        $file_essay = $request->file('file_essay');
        $nama_file_essay =
            time() . '-' . 'essay' . '-' . $file_essay->getClientOriginalName();
        $tujuan_upload_essay = 'files/essay';
        $file_essay->move($tujuan_upload_essay, $nama_file_essay);

        $file_bukti_ss = $request->file('file_bukti_ss');
        $nama_file_bukti_ss =
            time() .
            '-' .
            'bukti ss' .
            '-' .
            $file_bukti_ss->getClientOriginalName();
        $tujuan_upload_bukti_ss = 'files/bukti ss';
        $file_bukti_ss->move($tujuan_upload_bukti_ss, $nama_file_bukti_ss);

        $file_mbti = $request->file('file_mbti');
        $nama_file_mbti =
            time() . '-' . 'mbti' . '-' . $file_mbti->getClientOriginalName();
        $tujuan_upload_mbti = 'files/mbti';
        $file_mbti->move($tujuan_upload_mbti, $nama_file_mbti);

        UploadFile::create([
            'file_motlet' => $nama_file_motlet,
            'file_essay' => $nama_file_essay,
            'file_bukti_ss' => $nama_file_bukti_ss,
            'file_mbti' => $nama_file_mbti,
        ]);
        return redirect('/success');
    }
}
