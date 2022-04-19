<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Fasilitas::all();
        return view('fasilitas.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'bintang' => 'required',
            'namafasilitas' => 'required',
        ]);




        $data = new Fasilitas;
        $data->bintang = $request->bintang;
        $data->namafasilitas = $request->namafasilitas;
        $data->save();


        return redirect('admin/fasilitas/create')->with('success', 'Data has been added.'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Fasilitas::find($id);
        return view('fasilitas.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Fasilitas::find($id);
        return view('fasilitas.edit', ['data' => $data]);
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

        // $imgPath=$request->file('photo')->store('public/imgs');
        $data = Fasilitas::find($id);
        $data->bintang = $request->bintang;
        $data->namafasilitas = $request->namafasilitas;
        $data->save();

        return redirect('admin/fasilitas/' . $id . '/edit')->with('success', 'Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fasilitas::where('id', $id)->delete();
        return redirect('admin/fasilitas')->with('success', 'Data has been delete.');
    }
}
