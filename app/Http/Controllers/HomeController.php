<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function search(Request $request){
        $all = DB::table('jobs')->paginate(10);
        $search = DB::table('jobs')
            ->where('name','like','%'.$request->name.'%')
            ->where('location', 'like','%'.$request->location.'%')
            ->paginate(10);
        return view('search', compact('all', 'search'));
    }
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
            $image_name   = rand().'-'.$resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/uploads/gambar_ktp", $image_name);
            
        }else{
            echo "Gagal upload gambar";
        }

        if($request->hasFile('transkip_nilai')){
            $resorce       = $request->file('transkip_nilai');
            $image_name2   = rand().'-'.$resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/uploads/transkip_nilai", $image_name2);
            
        }else{
            echo "Gagal upload gambar";
        }

        if($request->hasFile('cv')){
            $resorce       = $request->file('cv');
            $image_name3   = rand().'-'.$resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/uploads/cv", $image_name3);
        }else{
            echo "Gagal upload gambar";
        }

        if($request->hasFile('ijazah')){
            $resorce       = $request->file('ijazah');
            $image_name4   = rand().'-'.$resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/uploads/ijazah", $image_name4);
            
        }else{
            echo "Gagal upload gambar";
        }
        ?>
        <html>
        <head>
          <!-- Begin Dable Script -->
          <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-MCPZTXG');</script>
            <!-- End Google Tag Manager -->
        </head>
        <body>
          <!-- Google Tag Manager (noscript) -->
          <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCPZTXG"
          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        </body>
        </html>
           
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script>
                swal({
                    title: "Apakah Data Sudah Sesuai ?",
                    text: "Klik Ok Jika Data Untuk Daftar Pelatihan Sudah Sesuai",
                    icon: "warning",
                    buttons: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                    window.location = "https://api.whatsapp.com/send?phone=6281336696699&text=Hi Saya ingin mendaftar <?=$request->posisi?> di Nursehub ID, ini adalah identitas saya :%0A%0A*Biodata*%0ANama Lengkap : <?=$request->name?>%0ATanggal Lahir : <?=$request->tempat?>, <?=$request->tanggal_lahir?>%0AJenis Kelamin : <?=$request->jenis_kelamin?>%0AStatus : <?=$request->status?>%0ATinggi : <?=$request->tinggi?>%0ABerat : <?=$request->berat?>%0AAgama : <?=$request->agama?>%0AAlamat Domisili : <?=$request->alamat?>%0AEmail : <?=$request->email?>%0ATelphone : <?=$request->telpon?>%0A%0A*Keterangan Lain*%0APendidikan Terakhir : <?=$request->pendidikan?>%0ANama Sekolah : <?=$request->sekolah?>%0ATahun Lulus : <?=$request->tahun_lulus?>%0ARiwayat Penyakit : <?=$request->penyakit?>%0AMotivasi Bekerja : <?=$request->motivasi?>%0ATempat Pendaftaran : <?=$request->pendaftaran?>%0AInformasi Lowongan : <?=$request->informasi?>%0ANo KTP : <?=$request->no_ktp?>%0A%0A*Dokumen*%0AFoto KTP : https://nursehub.id/uploads/gambar_ktp/<?=$image_name?>%0ATranskip Nilai :  https://nursehub.id/uploads/transkip_nilai/<?=$image_name2?>%0ACV :  https://nursehub.id/uploads/cv/<?=$image_name3?>%0AIjazah :  https://nursehub.id/uploads/ijazah/<?=$image_name4?>";
                    } else {
                    window.history.back();
                    }
                });
                
                </script>
            <?php
        
    }
}
