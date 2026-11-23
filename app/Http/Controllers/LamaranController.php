<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lamaran;

class LamaranController extends Controller
{
    public function index()
    {
        return view('lamaran.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'hp' => 'required',
            'posisi' => 'required',
            'cv' => 'required|file'
        ]);

        $file = $request->file('cv');

        $namaFile = time().'_'.$file->getClientOriginalName();

        $file->move(public_path('upload'), $namaFile);

        Lamaran::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'hp' => $request->hp,
            'posisi' => $request->posisi,
            'portfolio' => $request->portfolio,
            'cover_letter' => $request->cover,
            'cv' => $namaFile
        ]);

        return view('lamaran.sukses');
    }
}