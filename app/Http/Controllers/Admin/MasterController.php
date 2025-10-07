<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Auth;

class MasterController extends Controller
{
    public function index()
    {
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

    public function postcreate(Request $request)
    {
        $link = Str::slug($request->akun_toko);

        DB::table('masters')->insert([
            'kode_klien' => $request->kode_klien,
            'erm' => $request->erm,
            'rm' => $request->rm,
            'dp' => $request->dp,
            'akun_toko' => $request->akun_toko,
            'kota' => $request->kota,
            'kab' => $request->kota,
            'nama_pemilik_pendaftaran' => $request->nama_pemilik_pendaftaran,
            'nama_pemilik_owner' => $request->nama_pemilik_owner,
            'link' => $link,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
}
