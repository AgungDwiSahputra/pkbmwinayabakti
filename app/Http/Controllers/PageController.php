<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Pendaftaran;
use App\Models\Siswa;
use App\Models\UserAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if($request->paket != 'a'){
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
        }else{
            $request->validate([
                // 'nisn' => 'required|unique:siswa|max:25',
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
                // 'ijazah' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],[
                'required' => 'Kolom :attribute wajib diisi',
                'unique' => 'Sudah tersedia',
                'image' => 'File yang dikirim harus berupa gambar dengan ekstensi jpeg,png,jpg.',
                'max' => 'Ukuran gambar tidak boleh melebihi 2mb'
            ]);
        }

        $explode = explode('-',$request->kota);
        $id_provinsi = $explode[1];
        $id_kabupaten = $explode[0];
        $nama_ktp = '-';
        $nama_kk = '-';
        $nama_ijazah = '-';
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

        $siswa = new Siswa;
        if($request->paket != 'a'){
            $extensi_ijazah = $request->file('ijazah')->getClientOriginalExtension();
            $nama_ijazah = time().'_'.$request->nisn.'.'.$extensi_ijazah;
            $folderTujuanIJAZAH = 'users/' . $request->nisn.'/ijazah';
            
            $siswa->nisn = $request->nisn;
            $siswa->nik = $request->nik;
            $siswa->nama = ucwords($request->nama_lengkap);
            $siswa->email = $request->email;
            $siswa->no_telp = $request->no_hp;
            $siswa->id_provinsi = $id_provinsi;
            $siswa->id_kabupaten = $id_kabupaten;
            $siswa->kode_pos = $request->kode_pos;
            $siswa->alamat_lengkap = $request->alamat_lengkap;
            $siswa->kewarganegaraan = $request->kewarganegaraan;
            $siswa->pendidikan_terakhir = $request->pendidikan_akhir;
            $siswa->agama = ucwords($request->agama);
            $siswa->tempat_lahir = ucfirst($request->tempat_lahir);
            $siswa->tanggal_lahir = $request->tgl_lahir;
            $siswa->jenis_kelamin = $request->jenis_kelamin;
            $siswa->nama_ibu = ucwords($request->nama_ibu);
            $siswa->no_telp_ortu = $request->no_hp_ortu;
            $siswa->ktp = $nama_ktp;
            $siswa->kartu_keluarga = $nama_kk;
            $siswa->ijazah_pendidikan = $nama_ijazah;
            $siswa->save();
        }else{
            $siswa->nisn = $request->nisn;
            $siswa->nik = $request->nik;
            $siswa->nama = ucwords($request->nama_lengkap);
            $siswa->email = $request->email;
            $siswa->no_telp = $request->no_hp;
            $siswa->id_provinsi = $id_provinsi;
            $siswa->id_kabupaten = $id_kabupaten;
            $siswa->kode_pos = $request->kode_pos;
            $siswa->alamat_lengkap = $request->alamat_lengkap;
            $siswa->kewarganegaraan = $request->kewarganegaraan;
            $siswa->pendidikan_terakhir = $request->pendidikan_akhir;
            $siswa->agama = ucwords($request->agama);
            $siswa->tempat_lahir = ucfirst($request->tempat_lahir);
            $siswa->tanggal_lahir = $request->tgl_lahir;
            $siswa->jenis_kelamin = $request->jenis_kelamin;
            $siswa->nama_ibu = ucwords($request->nama_ibu);
            $siswa->no_telp_ortu = $request->no_hp_ortu;
            $siswa->ktp = $nama_ktp;
            $siswa->kartu_keluarga = $nama_kk;
            $siswa->ijazah_pendidikan = $nama_ijazah;
            $siswa->save();
        }

        try {
            // Mengambil id dari data yang baru di insert
            $id = $siswa->id;

            $admin = UserAdmin::first();
            $id_admin = $admin->id; //Mengambil id dari admin

            $pendaftaran = new Pendaftaran;
            $pendaftaran->paket = ucwords($request->paket);
            $pendaftaran->id_user = $id;
            $pendaftaran->status = 'Belum Konfirmasi';
            $pendaftaran->id_admin = $id_admin;
            $pendaftaran->save();
            
            if($request->file('ktp')){
                $request->file('ktp')->storeAs('public/'.$folderTujuanKTP, $nama_ktp);
            }
            if($request->file('kk')){
                $request->file('kk')->storeAs('public/'.$folderTujuanKK, $nama_kk);
            }

            if($request->paket != 'a'){
                $request->file('ijazah')->storeAs('public/'.$folderTujuanIJAZAH, $nama_ijazah);
            }
            
        } catch (Exception $e) {
            return view('pendaftaran')->with('error', 'Maaf, terdapat kesalahan teknis');
        }

        return redirect()->route('index')->with(['title' => 'PKBM Winaya Bakti','success', 'Berhasil daftar, mohon tunggu konfirmasi admin sekolah menghubungi..']);
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
