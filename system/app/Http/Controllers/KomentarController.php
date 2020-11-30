<?php 

namespace App\Http\Controllers;

use App\Models\Komentar;

class KomentarController extends Controller{
	function index(){
		// Select * from Komentar
		$data['list_komentar'] = Komentar::all();
		return view('komentar.index', $data);
	}

	function create(){
		return view('komentar.create');
	}

	function store(){
		$komentar = new Komentar;
		$komentar->nama = request('nama');
		$komentar->komentar = request('komentar');
		$komentar->save();

		return redirect('Komentar');
	}

	function show(Komentar $artikel){
		// select * from Komentar where id
		$data['komentar'] = komentarl;
		return view('komentar.show', $data);
	}

	function edit(Komentar $komentar){
		// select * from Komentar where id
		$data['komentar'] = $komentar;
		return view('komentar.edit', $data);
	}

	function update(Komentar $komentar){
		$komentar->nama = request('nama');
		$komentar->komentar = request('komentar');
		$komentar->save();

		return redirect('Komentar');
	}

	function destroy(Komentar $komentar){
		$komentar->delete();

		return redirect('Komentar');
	}
}