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

        $userInfo->name = $request->name;

        if ( !empty ( $request->email ) ) {
            $userInfo->email = $request->email;
        }
        else{
            $userInfo->email = "";
        }

        if ( !empty ( $request->message ) ) {
            $userInfo->message = $request->message;
        }
        else{
            $userInfo->message = "";
        }



        $userInfo->save();

        //redirect
        return redirect()->route('ContactUs.index')->with('success', 'Email Sent');
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
    public function edit($id)
    {
        $docinfo = DocInfo::find($id);


        return view('userProfile.edit')->with('docinfo', $docinfo);
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
        //validate the data
        $this->validate($request, array(
            'name' => 'required|max:255',


        ));



        //store in database
        $docinfo = DocInfo::find($id);


        $docinfo->name = $request->name;


        if ( !empty ( $request->specialty ) ) {
            $docinfo->specialty = $request->specialty;
        }
        else{
            $docinfo->specialty = "";
        }

        if ( !empty ( $request->email ) ) {
            $docinfo->email = $request->email;
        }
        else{
            $docinfo->email = "";
        }

        if ( !empty ( $request->phone ) ) {
            $docinfo->phone = $request->phone;
        }
        else{
            $docinfo->phone = "";
        }

        if ( !empty ( $request->address ) ) {
            $docinfo->address = $request->address;
        }
        else{
            $docinfo->address = "";
        }

        if ( !empty ( $request->address2 ) ) {
            $docinfo->address2 = $request->address2;
        }
        else{
            $docinfo->address2 = "";
        }

        if ( !empty ( $request->city ) ) {
            $docinfo->city = $request->city;
        }
        else{
            $docinfo->city = "";
        }

        if ( !empty ( $request->state ) ) {
            $docinfo->state = $request->state;
        }
        else{
            $docinfo->state = "";
        }

        if ( !empty ( $request->zip ) ) {
            $docinfo->zip = $request->zip;
        }
        else{
            $docinfo->zip = "";
        }

        $docinfo->save();

        //redirect
        return redirect()->route('userProfile.index')->with('success', 'Doctor Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
