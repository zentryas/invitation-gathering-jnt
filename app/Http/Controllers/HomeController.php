<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function invitation($slug)
    {
        if($slug == 'login') {
            return view('auth.login');
        }

        if($slug == 'dashboard') {
            return view('dashboard');
        }
        
        if($slug == 'master') {
            $data = DB::table('masters')
                ->select(
                    'masters.kode_klien',
                    'masters.akun_toko',
                    'masters.nama_pemilik_owner',
                    'masters.link',
                    'feedback.nama',
                    'feedback.nama_toko',
                    'feedback.kategori',
                    'feedback.nomor_wa',
                    'feedback.menu',
                    'feedback.status',
                    'feedback.keterangan'
                )
                ->leftjoin('feedback', 'masters.kode_klien', '=', 'feedback.kode_klien');
                if(Auth::user()->name != 'ADMIN') {
                    $data->where('rm', Auth::user()->name);
                }
                $data = $data->get();

            return view('admin.master.index', compact('data'));
        }

        $resData = DB::table('masters')->where('link', $slug)->first();
        if($resData) {
            return view('home', compact('resData'));
        }
    }

    public function postFeedback(Request $request)
    {
        DB::table('feedback')->insert([
            'kode_klien' => $request->kode_klien,
            'nama' => $request->nama,
            'nama_toko' => $request->nama_toko,
            'kategori' => $request->kategori,
            'nomor_wa' => $request->nomor_wa,
            'menu' => $request->menu,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('success', 'Feedback berhasil dikirimkan');
    }
}
