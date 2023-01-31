<?php

namespace App\Http\Controllers;

use App\DataTables\KelasDataTable;
use App\Models\Kelas;
use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;
use DataTables;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KelasDataTable $dataTable)
    {
        return $dataTable->render('kelas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKelasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKelasRequest $request)
    {
        $data = $request->all();
        Kelas::create($data);
        return redirect(route('kelas.index'))->with(['success' => 'Data berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $data = Kelas::find($id);
            return $data->nama_kelas."<br>".$data->kompetensi_keahlian;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::find($id);
        $data['kelas'] = $kelas;
        return view('kelas.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKelasRequest  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKelasRequest $request, $id)
    {
        $kelas = Kelas::find($id);
        $data = $request->all();
        $kelas->update($data);
        return redirect(route('kelas.index'))->with(['success' => 'Data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($kelas)
    {
        Kelas::destroy($kelas);  
        return redirect(route('kelas.index'))->with(['success' => 'Data berhasil dihapus']);
    }
}
