<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('pages.user.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.create');
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
            
            'email' => 'required|email',
            'password' => 'required',
            'mobile' => 'required',
        ]);
        $imgPath=$request->file('photo')->store('public/imgs');

        $data = new User;
        $data->name = $request->full_name;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = sha1($request->password);
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->photo = $imgPath;
        // $request->photo
        $data->save();

        return redirect('admin/user/create')->with('success', 'Data has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = user::find($id);
        return view('pages.user.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $data = User::find($id);
        return view('pages.User.edit', ['data' => $data]);
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

            'email' => 'required|email',
            'mobile' => 'required'
        ]);
        if($request->hasFile('photo')){
            $imgPath = $request->file('photo')->store('public/imgs');
        }else{
            $imgPath = $request;
        }
        

        $data = User::find($id);
        $data->name = $request->full_name;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = sha1($request->password);
        // $data->mobile = $request->mobile;
        // $data->address = $request->address;
        // $data->photo = $imgPath;
        // $request->photo
        $data->save();

        return redirect('admin/user/' . $id . '/edit')->with('success', 'Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect('admin/user')->with('success', 'Data has been Deleted.');
    }
}
