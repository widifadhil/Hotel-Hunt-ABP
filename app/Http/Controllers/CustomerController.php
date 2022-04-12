<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::all();
        return view('customer.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
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
            'email' => 'required',
            'fullname' => 'required',
            'username' => 'required',
            'password' => 'required',
            'photo' => 'required',
        ]);

        if ($request->hasFile('photo')) {

            $data = new Customer;
            $data->email = $request->email;
            $data->fullname = $request->fullname;
            $data->username = $request->username;
            $data->password = sha1($request->password);

            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uplimg/imghotel/', $filename);
            $data->photo = $filename;
        }
        
        $data->save();
        return redirect('admin/roomtype/create')->with('success', 'Data has been added.');
        // $imgPath=$request->file('photo')->store('public/imgs');


        // $data->save();

        // return redirect('admin/customer/create')->with('success', 'Data has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Customer::find($id);
        return view('customer.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Customer::find($id);
        return view('customer.edit', ['data' => $data]);
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
        $request->validate([
            'email' => 'required',
            'fullname' => 'required',
            'username' => 'required',

        ]);

        if ($request->hasFile('photo')) {
            $imgPath = $request->file('photo')->store('public/imgs');
        } else {
            $imgPath = $request->prev_photo;
        }


        $data = Customer::find($id);
        $data->email = $request->email;
        $data->fullname = $request->fullname;
        $data->username = $request->username;
        $data->photo = $imgPath;
        $data->save();

        return redirect('admin/customer/' . $id . '/edit')->with('success', 'Data has been update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::where('id', $id)->delete();
        return redirect('admin/customer')->with('success', 'Data has been delete.');
    }
}
