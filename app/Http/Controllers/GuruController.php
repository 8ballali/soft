<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{

    // menampilkan data guru
    public function index()
    {
    	$guru = Guru::All();
    	return view('guru', ['guru' => $guru]);
    }
    // Menambah data guru
    public function add(){
        return view('add_guru');
    }
    // Store ke Database
    public function store(Request $request){
        $this->validate($request,[
            'nama'=> 'required',
            'umur' => 'required'
        ]);

        Guru::create([
            'nama' => $request->nama,
            'umur' => $request->umur
        ]);

        return redirect('/guru');
    }
    // Edit
    public function edit($id){
        $guru = Guru::find($id);
        return view('edit_guru', ['guru' => $guru]);
    }

    // Update Data Guru
    public function update($id, Request $request){
        $this->validate($request,[
            'nama'=> 'required',
            'umur' => 'required'
        ]);

        $guru = Guru::find($id);
        $guru -> nama = $request->nama;
        $guru -> umur = $request->umur;
        $guru->save();
        return redirect('/guru');
    }

    // Menghapus
    public function hapus($id){
        $guru = Guru::find($id);
        $guru->delete();
        return redirect('/guru');
    }
    // menampilkan data guru yang sudah dihapus
    public function trash()
    {
        // mengampil data guru yang sudah dihapus
        $guru = Guru::onlyTrashed()->get();
        return view('guru_trash', ['guru' => $guru]);
    }
    public function restore($id){
        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->restore();
        return redirect('/guru/trash');
    }
    public function restore_all(){
        $guru = Guru::onlyTrashed();
        $guru -> restore();
        
        return redirect('/guru/trash');
    }
    public function delete_permanent($id){
        $guru = Guru::onlyTrashed()->where('id',$id);
        $guru->forceDelete();

        return redirect('/guru/trash');
    }
    public function delete_permanent_all(){
        $guru = Guru::onlyTrashed();
        $guru->forceDelete();

        return redirect('/guru/trash');
    }
}