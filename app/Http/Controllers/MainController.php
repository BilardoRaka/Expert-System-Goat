<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Riwayat;
use App\Models\User;
use App\Models\Feedback;
use App\Models\Logika;
use App\Models\Peternak;
use PDF;

class MainController extends Controller
{
    public function prediagnosa(Request $request)
    {

        $gejala = Gejala::where('id', $request->id)->get();

        return view('prediagnosa', [
            'nama' => $request->nama,
            'umur' => $request->umur,
            'gejala' => $gejala,
        ]);
    }

    public function postdiagnosa(Request $request)
    {

        $penyakit = Penyakit::where('id', $request->id)->get();
        $symptoms = Logika::where('penyakit_id', $request->id)->get();

        $nama = $request->nama;
        $umur = $request->umur;

        $dataPeternak = [
            'nama' => $nama,
            'umur' => $umur
        ];

        Peternak::create($dataPeternak);

        $peternak_id = Peternak::where('nama', $nama)->where('umur', $umur)->value('id');

        $dataRiwayat = [
            'peternak_id' => $peternak_id,
            'penyakit_id' => $request->id
        ];

        Riwayat::create($dataRiwayat);

        $riwayat = Riwayat::latest('id')->first();

        return view('postdiagnosa', [
            'riwayat' => $riwayat,
            'symptoms' => $symptoms
        ]);
    }

    public function postdiagnosanull(Request $request)
    {

        $dataPeternak = [
            'nama' => $request->nama,
            'umur' => $request->umur
        ];

        Peternak::create($dataPeternak);

        return view('null', [
            'nama' => $request->nama,
            'umur' => $request->umur
        ]);
    }

    public function feedback(Request $request)
    {

        $peternak_id = Peternak::Where('nama', $request->nama)->where('umur', $request->umur)->value('id');

        $dataFeedback = [
            'peternak_id' => $peternak_id,
            'feedback' => $request->content
        ];

        Feedback::create($dataFeedback);

        return redirect('/')->with('sukses', "Terima Kasih $request->nama Telah Memberikan Feedback.");
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return back()->with('sukses', 'Login Berhasil!');
        }

        return back()->with('gagal', 'Login Gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('sukses', 'Logout Berhasil!');
    }

    public function passchangeget()
    {
        return view('dashboard.password', [
            'active' => 'passchange'
        ]);
    }

    public function passchangepost(Request $request)
    {

        if (!Hash::check($request->oldPassword, auth()->user()->password)) {
            return back()->with("gagal", "Password Lama Salah!");
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->newPassword)
        ]);

        return back()->with('sukses', 'Berhasil Ubah Password!');
    }

    public function riwayat()
    {
        return view('dashboard.history', [
            'active' => 'history',
            'histories' => Riwayat::latest()->paginate(10)
        ]);
    }

    public function deletehistory($id)
    {
        Riwayat::destroy($id);

        return back()->with('sukses', 'Berhasil Hapus Riwayat Terpilih!');
    }

    public function printhistory()
    {

        $riwayat = Riwayat::all();

        $pdf = PDF::loadView('dashboard.historyprint', [
            'histories' => $riwayat,
        ]);

        return $pdf->stream('ListHistory.pdf', array('Attachment' => 0));
    }

    public function penyakit()
    {
        return view('dashboard.disease', [
            'active' => 'disease',
            'diseases' => Penyakit::all(),
            'logika' => Logika::all(),
            'gejala' => Gejala::all()
        ]);
    }

    public function editdisease($id)
    {
        return view('dashboard.editdisease', [
            'active' => 'disease',
            'penyakit' => Penyakit::where('id', $id)->get()
        ]);
    }

    public function updatedisease(Request $request)
    {
        $penyakit = $request->penyakit;
        $solusi = $request->content;

        Penyakit::where('penyakit', $penyakit)->update([
            'solusi' => $solusi
        ]);

        return redirect('/disease')->with('sukses', "Berhasil Ubah Solusi Penyakit $penyakit.");
    }

    public function feedbacklist()
    {
        return view('dashboard.feedback', [
            'active' => 'feedback',
            'feedbacks' => Feedback::latest()->paginate(10)
        ]);
    }

    public function deletefeedback($id)
    {
        Feedback::destroy($id);

        return redirect('/feedback')->with('sukses', 'Berhasil Hapus Feedback Terpilih.');
    }
}
