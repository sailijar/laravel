<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class dosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // TAMPIL
        return view('dosen.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //TAMBAH
        return view('Dosen.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //PROSESS TAMBAH
         $dosen = new Dosen;
         $dosen->nidn = $request->nidn;
         $dosen->nama = $request->nama;
         $dosen->email = $request->email;
         $dosen->rumpun = $request->rumpun;
         $dosen->nohp = $request->nohp;
         $dosen->save();

        return redirect('/dosen');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //hapus data
    }
}



// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Dosen;

// class DosenController extends Controller
// {
//     public function index()
//     {
//         $dosen = dosen::all();
//         return view('dosen.index', compact('dosen'));
//     }

//     public function create()
//     {
//         return view('dosen.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'nidn' => 'required|unique:dosens',
//             'nama' => 'required',
//             'email' => 'required|email|unique:dosens'
//         ]);

//         dosen::create($request->all());

//         return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil ditambahkan.');
//     }


//     // Tampilkan form edit data dosen
//     public function edit($id)
//     {
//         $dosen = Dosen::findOrFail($id);
//         return view('dosen.edit', compact('dosen'));
//     }

//     // Update data dosen
//     public function update(Request $request, $id)
//     {
//         $dosen = Dosen::findOrFail($id);

//         $request->validate([
//             'nidn' => 'required|unique:dosens,nidn,' . $dosen->id,
//             'nama' => 'required',
//             'email' => 'required|email',
//         ]);

//         $dosen->update($request->all());

//         return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil diupdate');
//     }

//     // Hapus data dosen
//     public function destroy($id)
//     {
//         $dosen = Dosen::findOrFail($id);
//         $dosen->delete();

//         return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus');
//     }
// }


