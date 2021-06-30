<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function lowongansubmit(Request $request){
        
        $validated = $request->validate([
            'name' => 'required',
            'no_ktp' => 'required',
            'gambar_ktp' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
            'email' => 'required',
            'telpon' => 'required',
            'tempat' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',
            'status' => 'required',
            'pendidikan' => 'required',
            'posisi' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'sekolah' => 'required',
            'tahun_lulus' => 'required',
            'penyakit' => 'required',
            'motivasi' => 'required',
            'pendaftaran' => 'required',
            'informasi' => 'required',
            'cv' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
            'transkip_nilai' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
            'ijazah' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
        ]);

        if($request->hasFile('gambar_ktp')){
            $resorce       = $request->file('gambar_ktp');
            $image_name   = $request->name.'-'.rand().'-'.$resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/uploads/gambar_ktp", $image_name);
            
        }else{
            echo "Gagal upload gambar";
        }

        if($request->hasFile('transkip_nilai')){
            $resorce       = $request->file('transkip_nilai');
            $image_name2   = $request->name.'-'.rand().'-'.$resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/uploads/transkip_nilai", $image_name2);
            
        }else{
            echo "Gagal upload gambar";
        }

        if($request->hasFile('cv')){
            $resorce       = $request->file('cv');
            $image_name3   = $request->name.'-'.rand().'-'.$resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/uploads/cv", $image_name3);
        }else{
            echo "Gagal upload gambar";
        }

        if($request->hasFile('ijazah')){
            $resorce       = $request->file('ijazah');
            $image_name4   = $request->name.'-'.rand().'-'.$resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/uploads/ijazah", $image_name4);
            
        }else{
            echo "Gagal upload gambar";
        }

        return redirect('https://api.whatsapp.com/send?phone=6281336696699&text=Hi Saya ingin mendaftar '.$request->posisi.' di Nursehub ID, ini adalah identitas saya :%0A%0A*Biodata*%0ANama Lengkap : '.$request->name.'%0ATanggal Lahir : '.$request->tempat.', '.$request->tanggal_lahir.'%0AJenis Kelamin : '.$request->jenis_kelamin.'%0AStatus : '.$request->status.'%0ATinggi : '.$request->tinggi.'%0ABerat : '.$request->berat.'%0AAgama : '.$request->agama.'%0AAlamat Domisili : '.$request->alamat.'%0AEmail : '.$request->email.'%0ATelphone : '.$request->telpon.'%0A%0A*Keterangan Lain*%0APendidikan Terakhir : '.$request->pendidikan.'%0ANama Sekolah : '.$request->sekolah.'%0ATahun Lulus : '.$request->tahun_lulus.'%0ARiwayat Penyakit : '.$request->penyakit.'%0AMotivasi Bekerja : '.$request->motivasi.'%0ATempat Pendaftaran : '.$request->pendaftaran.'%0AInformasi Lowongan : '.$request->informasi.'%0ANo KTP : '.$request->no_ktp.'%0A%0A*Dokumen*%0AFoto KTP : https://nursehub.id/uploads/gambar_ktp'.$image_name.'%0ATranskip Nilai :  https://nursehub.id/uploads/transkip_nilai'.$image_name2.'%0ACV :  https://nursehub.id/uploads/cv'.$image_name3.'%0AIjazah :  https://nursehub.id/uploads/ijazah'.$image_name4);        
    }
}
