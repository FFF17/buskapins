<?php

namespace App\Http\Controllers;

use App\Buku;
Use App\Anggota;
Use App\Peminjam;
Use App\Pengembali;
use Illuminate\Http\Request;
use PDF;


class HomeController extends Controller
{
	public function __construct()
    {
    $this->middleware('auth');
    }

    public function index()
    {
    	
        $data['buku'] = \App\Buku::all();
        return view('Buku.index')->with($data);
    }

    public function create()
    {
        $data['buku'] = \App\Buku::all();
        return view('Buku.create')->with($data);    }

    public function save(Request $r)
    {


         $message =[
        'required' => ':attribute field is required.',
        'unique' => ':attribute has already taken.',
        'size' => ':attribute must be 6 characters.'
        ];

        $this->validate($r, [
            'Judul_buku' => 'required',
            'Kategori' => 'required',
            'Penulis' => 'required',
            'Penerbit' => 'required',
            'Sinopsis' => 'required',
            'Jumlah' => 'required|integer'
            ],
            $message);


        $file = $r->file('image');
        $buku = new Buku;
        $buku->Judul_buku = $r->input('Judul_buku');
        $buku->Kategori = $r->input('Kategori');
        $buku->Penulis = $r->input('Penulis');
        $buku->Penerbit = $r->input('Penerbit');
        $buku->Sinopsis = $r->input('Sinopsis');
        $buku->Jumlah = $r->input('Jumlah');
        $buku->image = $file->getClientOriginalName();
        $file->move('image/', $file->getClientOriginalName());
    	$buku->save();

    	return redirect(url('/buku'));
    }

    public function edit($id)
    {

        $data['buku'] = Buku::find($id);
        return view('Buku.edit')->with($data);
    }

    public function update(Request $r)
    {


  $message =[
        'required' => ':attribute field is required.',
        'unique' => ':attribute has already taken.',
        'size' => ':attribute must be 6 characters.'
        ];

        $this->validate($r, [
            'Judul_buku' => 'required',
            'Kategori' => 'required',
            'Penulis' => 'required',
            'Penerbit' => 'required',
            'Sinopsis' => 'required',
            'Jumlah' => 'required|integer'
            ],
            $message);

        $file = $r->file('image');
    	$id = $r->input('id');
    	$buku = Buku::find($id);


    	$buku->Judul_buku 	= $r->input('Judul_buku');
    	$buku->Kategori 	= $r->input('Kategori');
    	$buku->Penulis 		= $r->input('Penulis');
    	$buku->Penerbit 	= $r->input('Penerbit');
    	$buku->Sinopsis 	= $r->input('Sinopsis');
        $buku->Jumlah       = $r->input('Jumlah');
        $buku->image        = $file->getClientOriginalName();
        $file->move('image/', $file->getClientOriginalName());
    	$buku->save();

    	return redirect(url('buku'));
    }

    public function delete($id)
    {
    	Buku::whereId($id)->delete();
    	return redirect(url('buku'));
    }




    public function index_anggota()
    {

        $data['anggota'] = \App\Anggota::all();
        return view(    'Anggota.anggota')->with($data);    }

    public function create_anggota()
    {
    $data['anggota'] = \App\Anggota::all();
        return view('Anggota.create')->with($data);     }

    public function save_anggota(Request $r)
    {


          $message =[
        'required' => ':attribute field is required.',
        'unique' => ':attribute has already taken.',
        'size' => ':attribute must be 6 characters.'
        ];

        $this->validate($r, [
            'NIS' => 'required|integer|unique:anggotas',
            'Nama' => 'required',
            'Kelas' => 'required',
            'Jenis_Kelamin' => 'required',
            'No_Telepon' => 'required|integer',
            'Alamat' => 'required'
            ],
            $message);

    
        $anggota = new Anggota;

        $anggota->NIS = $r->input('NIS');
        $anggota->Nama = $r->input('Nama');
        $anggota->Kelas = $r->input('Kelas');
        $anggota->Jenis_Kelamin = $r->input('Jenis_Kelamin');
        $anggota->No_Telepon = $r->input('No_Telepon');
        $anggota->Alamat = $r->input('Alamat');

        $anggota->save();

        return redirect(url('Anggota/anggota'));
    }

    public function edit_anggota($id)
    {
        $data['anggota'] = Anggota::find($id);
        return view('Anggota.edit')->with($data);
    }

    public function update_anggota(Request $r)
    {

  $message =[
        'required' => ':attribute field is required.',
        'unique' => ':attribute has already taken.',
        'size' => ':attribute must be 6 characters.'
        ];

        $this->validate($r, [
            'NIS' => 'required|integer|unique:anggotas',
            'Nama' => 'required',
            'Kelas' => 'required',
            'Jenis_Kelamin' => 'required',
            'No_Telepon' => 'required|integer',
            'Alamat' => 'required'
            ],
            $message);


        $anggota = Anggota::find($r->input('id'));
        $anggota->NIS = $r->input('NIS');
        $anggota->Nama = $r->input('Nama');
        $anggota->Kelas = $r->input('Kelas');
        $anggota->Jenis_Kelamin = $r->input('Jenis_Kelamin');
        $anggota->No_Telepon = $r->input('No_Telepon');
        $anggota->Alamat = $r->input('Alamat');
        $anggota->save();

        return redirect(url('Anggota/anggota'));
    }

    public function delete_anggota($id)
    {
        Anggota::whereId($id)->delete();
        return redirect(url('Anggota/anggota'));
    }






     public function index_peminjam()
    {
    $data['peminjam'] = \App\Peminjam::all();

        return view('Peminjam.peminjam')->with($data);    
    }


    public function create_peminjam()
    {
        $data['buku'] = \App\Buku::all();
        return view('Peminjam.create')->with($data);    

}

    public function save_peminjam(Request $r)
    {

        
    
        $new = new \App\Peminjam;


        $new->Nis = $r->input('Nis');
        $new->Nama_peminjam = $r->input('Nama_peminjam');
        $new->Kelas = $r->input('Kelas');
        $new->id_buku = $r->input('Get_IdBuku');
        $new->save();

        return redirect(route('indexpeminjam'));
    }

   

    public function delete_peminjam($id)
    {
        Peminjam::whereId($id)->delete();
        return redirect(url('Peminjam/peminjam'));
    }

    public function detail($id = 0)
    {
        $data = array(
            'peminjam' => Peminjam::find($id)
        );
        return view('Peminjam.detail', ['peminjam' => Peminjam::whereId($id)->first()]);
    }

    public function detailbuku($id = 0)
    {
        $data = array(
            'buku' => Buku::find($id)
        );
        return view('Buku.detail', ['buku' => Buku::whereId($id)->first()]);
    }

    public function welcome()
    {
        $data['buku'] = Buku::all();
        return view('welcome')->with($data);
    }

    public function pinjam_barang($id)
    {
        $data['buku'] = Buku::where('id', $id)->first();

        return view('Peminjam.edit');
    }
    
    public function downloadpdfpinjam($id)
    {
        $data['peminjam'] = Peminjam::find($id);
        $pdf = PDF::loadview('Peminjam.pdf',$data);
        return $pdf->download('datapeminjam.pdf');
    }

      public function downloadpdfbuku($id)
    {
        $data['buku'] = Buku::find($id);
        $pdf = PDF::loadview('Buku.pdf',$data);
        return $pdf->download('databuku.pdf');
    }

     public function downloadpdfanggota($id)
    {
        $data['anggota'] = Anggota::find($id);
        $pdf = PDF::loadview('Anggota.pdf',$data);
        return $pdf->download('dataAnggota.pdf');
    }

    public function downloadpdf_allpinjam()
    {
        $data['stud'] = Peminjam::all();
        $pdf = PDF::loadview('Peminjam.pdfall',$data);
        return $pdf->download('datapeminjam_all.pdf');
    }

     public function downloadpdf_allbuku()
    {
        $data['stud'] = Buku::all();
        $pdf = PDF::loadview('Buku.pdfall',$data);
        return $pdf->download('data_bukuall.pdf');
    }

    public function downloadpdf_allanggota()
    {
        $data['stud'] = Anggota::all();
        $pdf = PDF::loadview('Anggota.pdfall',$data);
        return $pdf->download('data_anggotaall.pdf');
    }

    





     public function index_pengembali()
    {
    $data['pengembali'] = \App\Peminjam::all();

        return view('Pengembali.pengembali')->with($data);    
    }


    public function create_pengembali()
    {
        $data['pengembali'] = \App\Pengembali::all();
        return view('Pengembali.create')->with($data);    

}

    public function save_pengembali(Request $r)
    {

        
    
        $new = new \App\Pengembali;


        $new->Nis = $r->input('Nis');
        $new->Nama_peminjam = $r->input('Nama_peminjam');
        $new->Kelas = $r->input('Kelas');
        $new->id_buku = $r->input('Get_IdBuku');
        $new->save();

        return redirect(route('indexpengembali'));
    }

   

    public function delete_pengembali($id)
    {
        Peminjam::whereId($id)->delete();
        return redirect(route('deletepengembali'));
    }

}
