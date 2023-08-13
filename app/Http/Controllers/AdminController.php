<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\UserAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::guard('admin')->check()){
            return redirect()->route('sign.admin');
        }

        $siswa = Siswa::paginate(10);

        $data = [
            'title' => 'Admin | PKBM Winaya Bakti',
            'siswa' => $siswa
        ];
        return view('admin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function downloadImage($nomor, $filename, $jenis) {
        if($jenis == 'ktp'){
            $path = storage_path('app/public/users/'.$nomor.'/ktp/'.$filename);
        }elseif($jenis == 'kk'){
            $path = storage_path('app/public/users/'.$nomor.'/kartu-keluarga/'.$filename);
        }else{
            $path = storage_path('app/public/users/'.$nomor.'/ijazah/'.$filename);
        }
        
        return response()->download($path);
    }

    public function detail_siswa(Request $request) {

        $siswa = Siswa::join('provinsi', 'provinsi.id','=','siswa.id_provinsi')
        ->join('kabupaten', 'kabupaten.id','=','siswa.id_kabupaten')
        ->select([
            'siswa.nisn',
            'siswa.nik',
            'siswa.nama as nama_siswa',
            'siswa.email',
            'siswa.no_telp',
            'siswa.kode_pos',
            'siswa.alamat_lengkap',
            'siswa.kewarganegaraan',
            'siswa.pendidikan_terakhir',
            'siswa.agama',
            'siswa.tempat_lahir',
            'siswa.tanggal_lahir',
            'siswa.jenis_kelamin',
            'siswa.nama_ibu',
            'siswa.no_telp_ortu',
            'siswa.ktp',
            'siswa.kartu_keluarga',
            'siswa.ijazah_pendidikan',
            'provinsi.nama as provinsi',
            'kabupaten.nama as kabupaten'
        ])
        ->where('nisn', $request->nisn)
        ->first();

        $html = '
        <table class="table table-hover">
            <tr>
                <th>NISN</th>
                <td>: '.$siswa->nisn.'</td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>: '.$siswa->nik.'</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>: '.$siswa->nama_siswa.'</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>: '.$siswa->email.'</td>
            </tr>
            <tr>
                <th>Nomor HP</th>
                <td>: '.$siswa->no_telp.'</td>
            </tr>
            <tr>
                <th>Provinsi</th>
                <td>: '.$siswa->provinsi.'</td>
            </tr>
            <tr>
                <th>Kabupaten</th>
                <td>: '.$siswa->kabupaten.'</td>
            </tr>
            <tr>
                <th>Alamat Lengkap</th>
                <td>: '.$siswa->alamat_lengkap.'</td>
            </tr>
            <tr>
                <th>Kode Pos</th>
                <td>: '.$siswa->kode_pos.'</td>
            </tr>
            <tr>
                <th>Kewarganegaraan</th>
                <td>: '.$siswa->kewarganegaraan.'</td>
            </tr>
            <tr>
                <th>Pendidikan Terakhir</th>
                <td>: '.$siswa->pendidikan_terakhir.'</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>: '.$siswa->agama.'</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>: '.$siswa->tempat_lahir.'</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>: '.$siswa->tanggal_lahir.'</td>
            </tr>
            <tr>
                <th>jenis Kelamin</th>
                <td>: '.$siswa->jenis_kelamin.'</td>
            </tr>
            <tr>
                <th>Nama Ibu</th>
                <td>: '.$siswa->nama_ibu.'</td>
            </tr>
            <tr>
                <th>No. Telp Ortu</th>
                <td>: '.$siswa->no_telp_ortu.'</td>
            </tr>
            <tr>
                <th>KTP</th>
                <td>: ';
                if($siswa->ktp == '' || $siswa->ktp == '-'){
                    $html .= '<span style="font-size:12px" class="text-danger">Pendaftar tidak memberikan KTP</span>';
                }else{
                    $lokasi = "users/$siswa->nik/ktp";
                    $html .= '<a href="' . route('download.image', ['nomor' => $siswa->nik,'filename' => $siswa->ktp, 'jenis' => 'ktp']) . '"><img width="200" src="'.asset('storage/'.$lokasi.'/'.$siswa->ktp).'"></a>';
                }
        $html .= '</td>
            </tr>
            <tr>
                <th>Kartu Keluarga</th>
                <td>: ';
                if($siswa->kartu_keluarga == '' || $siswa->kartu_keluarga == '-'){
                    $html .= '<span style="font-size:12px" class="text-danger">Pendaftar tidak memberikan Kartu Keluarga</span>';
                }else{
                    $lokasi = "users/$siswa->nik/kartu-keluarga";
                    $html .= '<a href="' . route('download.image', ['nomor' => $siswa->nik,'filename' => $siswa->kartu_keluarga, 'jenis' => 'kk']) . '"><img width="200" src="'.asset('storage/'.$lokasi.'/'.$siswa->kartu_keluarga).'"></a>';
                }
        $html .= '</td>
            </tr>
            <tr>
                <th>Ijazah</th>
                <td>: ';
                if($siswa->ijazah_pendidikan == '' || $siswa->ijazah_pendidikan == '-'){
                    $html .= '<span style="font-size:12px" class="text-danger">Pendaftar tidak memberikan Ijazah</span>';
                }else{
                    $lokasi = "users/$siswa->nisn/ijazah";
                    $html .= '<a href="' . route('download.image', ['nomor' => $siswa->nisn,'filename' => $siswa->ijazah_pendidikan, 'jenis' => 'ijazah']) . '"><img width="200" src="'.asset('storage/'.$lokasi.'/'.$siswa->ijazah_pendidikan).'"></a>';
                }
        $html .= '</td>
            </tr>
        </table>
        ';
        
        return response()->json($html);
    }
}
