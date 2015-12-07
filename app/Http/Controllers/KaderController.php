<?php

namespace TubesRAI\Http\Controllers;

use Illuminate\Http\Request;

use TubesRAI\Http\Requests;
use TubesRAI\Http\Controllers\Controller;

use TubesRAI\Biodata;

class KaderController extends Controller
{
    // Supaya Harus login
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kader.index');
    }

    // 
    public function biodata(Request $request)
    {
        $biodata = $request->user()->biodata;

        return view('kader.biodata', compact('biodata'));
    }

    public function update_biodata(Request $request)
    {
        if($request->user()->biodata){
            $bio = $request->user()->biodata;
        } else {
            $bio = new Biodata;
        }

        $data = $request->all();
        $bio['kader_id'] = $request->user()->id;
        $bio['kelas'] = $data['kelas'];
        $bio['divisi'] = $data['divisi'];
        $bio['alamat'] = $data['alamat'];
        $bio['tempat_lahir'] = $data['tempat_lahir'];
        $bio['tanggal_lahir'] = $data['tanggal_lahir'];
        $bio->save();
        
        return redirect('kader');
    }
}
