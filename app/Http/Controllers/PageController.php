<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Provinsi;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class PageController extends Controller
{
    public function index() {

        $data = [
            'title' => 'PKBM Winaya Bakti',
        ];
        return view('index', $data);
    }

    public function register() {
        // Ambil data provinsi
        $kabupaten = Kabupaten::with('provinsi')->select('id','nama','id_provinsi')->get();

        $data = [
            'title' => 'Pendaftaran | PKBM Winaya Bakti',
            'kabupaten' => $kabupaten,
        ];
        return view('pendaftaran', $data);
    }

    public function StoreRegister(Request $request) {
        $data = [
            'title' => 'PKBM Winaya Bakti',
        ];

        $request->validate([
            'nisn' => 'required|unique:siswa|max:25',
            'nik' => 'required|unique:siswa|max:30',
            'nama_lengkap' => 'required|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|max:15',
            'kode_pos' => 'required|max:25',
            'alamat_lengkap' => 'required|max:255',
            'kewarganegaraan' => 'required|max:255',
            'pendidikan_akhir' => 'required|max:255',
            'agama' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required|max:255',
            'nama_ibu' => 'required|max:255',
            'no_hp_ortu' => 'required|max:15',
            'ktp' => 'image|mimes:jpeg,png,jpg|max:2048',
            'kk' => 'image|mimes:jpeg,png,jpg|max:2048',
            'ijazah' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ],[
            'required' => 'Kolom :attribute wajib diisi',
            'unique' => 'Sudah tersedia',
            'image' => 'File yang dikirim harus berupa gambar dengan ekstensi jpeg,png,jpg.',
            'max' => 'Ukuran gambar tidak boleh melebihi 2mb'
        ]);

        $explode = explode('-',$request->kota);
        $id_provinsi = $explode[1];
        $id_kabupaten = $explode[0];
        $nama_ktp = '-';
        $nama_kk = '-';
        if($request->file('ktp')){
            $extensi_ktp = $request->file('ktp')->getClientOriginalExtension();
            $nama_ktp = time().'_'.$request->nik.'.'.$extensi_ktp;
            $folderTujuanKTP = 'users/' . $request->nik.'/ktp';
        }
        if($request->file('kk')){
            $extensi_kk = $request->file('kk')->getClientOriginalExtension();
            $nama_kk = time().'_'.$request->nik.'.'.$extensi_kk;
            $folderTujuanKK = 'users/' . $request->nik.'/kartu-keluarga';
        }
        $extensi_ijazah = $request->file('ijazah')->getClientOriginalExtension();
        $nama_ijazah = time().'_'.$request->nisn.'.'.$extensi_ijazah;
        $folderTujuanIJAZAH = 'users/' . $request->nisn.'/ijazah';

        try {
            Siswa::insert([
                'nisn' => $request->nisn,
                'nik' => $request->nik,
                'nama' => ucwords($request->nama_lengkap),
                'email' => $request->email,
                'no_telp' => $request->no_hp,
                'id_provinsi' => $id_provinsi,
                'id_kabupaten' => $id_kabupaten,
                'kode_pos' => $request->kode_pos,
                'alamat_lengkap' => $request->alamat_lengkap,
                'kewarganegaraan' => $request->kewarganegaraan,
                'pendidikan_terakhir' => $request->pendidikan_akhir,
                'agama' => ucwords($request->agama),
                'tempat_lahir' => ucfirst($request->tempat_lahir),
                'tanggal_lahir' => $request->tgl_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nama_ibu' => ucwords($request->tempat_lahir),
                'no_telp_ortu' => $request->no_hp_ortu,
                'ktp' => $nama_ktp,
                'kartu_keluarga' => $nama_kk,
                'ijazah_pendidikan' => $nama_ijazah
            ]);
            if($request->file('ktp')){
                $request->file('ktp')->storeAs('public/'.$folderTujuanKTP, $nama_ktp);
            }
            if($request->file('kk')){
                $request->file('kk')->storeAs('public/'.$folderTujuanKK, $nama_kk);
            }
            $request->file('ijazah')->storeAs('public/'.$folderTujuanIJAZAH, $nama_ijazah);
            
        } catch (Exception $e) {
            return view('pendaftaran')->with('error', 'Maaf, terdapat kesalahan teknis');
        }

        return view('index', $data)->with('success', 'Berhasil daftar, mohon tunggu konfirmasi admin sekolah menghubungi..');
    }

    public function sign_admin() {
        if(Auth::guard('admin')->check()){
            return redirect()->route('pkbm-winaya-bakti.index');
        }

        $data = [
            'title' =>  'Signin'
        ];
        return view('sign', $data);
    }

    public function sign_admin_post( Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'required' => 'Kolom :attribute wajib diisi',
        ]);

        // Proses login
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('pkbm-winaya-bakti.index');
        } else {
            // Autentikasi gagal
            return redirect()->back()->with('error', 'Email atau password salah.');
        }
    }
    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route('index');
    }
}
