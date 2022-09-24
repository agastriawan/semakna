<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Models\Kelas;
use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas', [
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'notelp' => 'required|max:15',
            'alamat' => 'required',
            'instansi' => 'required',
            'judul' => 'required',
        ]);


        // PANGGIL MODEL
        Kelas::create($validatedData);
    

        // REDIRECT
        return redirect('https://api.whatsapp.com/send?phone=6288295747113&text=Saya%20(Nama%20Kamu)%20ingin%20mendaftar%20kelas%20yang%20berjudul%20(judul%20kelas)')->with('success', 'Mading Sekolah berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelas = Kelas::find($id);
        return view('index', [
            'kelas' => $kelas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sekolah  $student
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $kelas = Kelas::find($id);
        return view('admin.kelas.edit', [
            'kelas' => $kelas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sekolah  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $rules = [
            'nama' => 'required',
            'email' => 'required',
            'notelp' => 'required|max:15',
            'alamat' => 'required',
            'instansi' => 'required',
            'judul' => 'required',
        ];

        $validatedData = $request->validate($rules);
        Kelas::where('id', $sekolah->id)->update($validatedData);
        // REDIRECT
        return redirect('/admin/sekolah')->with('success', 'Data Mading Sekolah berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sekolah  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $kelas = Kelas::find($id);
        if ($kelas->image) {
            Storage::delete($kelas->image);
        }

        Kelals::destroy($sekolah->id);
        return redirect('/admin/sekolah')->with('success', 'Data Mading Sekolah berhasil dihapus!');
    }
}
