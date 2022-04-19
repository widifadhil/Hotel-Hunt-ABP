<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Hotelimage;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hotel::all();
        return view('pages.hotel.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.hotel.create');
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
            'title' => 'required',
            'detail' => 'required',
            'bintang' => 'required',
            'fasilitas' => 'required',
            'price' => 'required',

        ]);

        // $imgPath=$request->file('photo')->store('public/imgs');



        $data = new Hotel;
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->bintang = $request->bintang;
        $data->fasilitas = $request->fasilitas;
        $data->price = $request->price;
        $data->save();


        foreach ($request->file('imghotel') as $img) {
            $imgPath = $img->store('imghotel', 'public');
            $imgData = new Hotelimage;
            $imgData->hotel_id = $data->id;
            $imgData->img_src = $imgPath;
            $imgData->img_alt = $request->title;
            $imgData->save();
        }
        return redirect('admin/hotel/create')->with('success', 'Data has been added.');

        //  untuk upload 1 image
        // if($request->hasFile('photo'))
        // {
        //     $file = $request->file('photo');
        //     $extention = $file->getClientOriginalExtension();
        //     $filename= time(). '.'.$extention;
        //     $file->move('uplimg/imghotel/', $filename);
        //     $data->photo = $filename;
        // }
        // $data->save();   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Hotel::find($id);
        return view('pages.hotel.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Hotel::find($id);
        $img = Hotelimage::where('hotel_id', $data->id)->get();
        return view('pages.hotel.edit', ['data' => $data, 'img' => $img]);
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
        $data = Hotel::find($id);
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->bintang = $request->bintang;
        $data->fasilitas = $request->fasilitas;
        $data->price = $request->price;
        $data->save();

        if ($request->hasFile('imghotel')) {
            foreach ($request->file('imghotel') as $img) {
                $imgPath = $img->store('imghotel', 'public');
                $imgData = new Hotelimage;
                $imgData->hotel_id = $data->id;
                $imgData->img_src = $imgPath;
                $imgData->img_alt = $request->title;
                $imgData->save();
            }
        }

        return redirect('admin/hotel/' . $id . '/edit')->with('success', 'Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hotel::where('id', $id)->delete();
        return redirect('admin/hotel')->with('success', 'Data has been delete.');
    }

    public function destroy_image($img_id)
    {
        $data = Hotelimage::where('id', $img_id)->first();
        Storage::delete($data->img_src);

        Hotelimage::where('id', $img_id)->delete();
        return response()->json(['bool' => true]);
    }
}
