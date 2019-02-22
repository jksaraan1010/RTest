<?php

namespace App\Http\Controllers;
use App\userInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ContactUsController extends Controller
{
    public function index(){
       return view('ContactUs.index');
    }
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        //store in database
        $userInfo = new userInfo;

      $userInfo ->Name = request ('name');
      $userInfo ->Email = request ('email');
      $userInfo ->Message = request ('message');
        $userInfo->save();

        //redirect


    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */






}
