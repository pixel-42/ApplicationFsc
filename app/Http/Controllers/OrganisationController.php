<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrganisationRequest;
use App\Models\Organisation;

class OrganisationController extends Controller{


    public function submits(OrganisationRequest $req){

        $organisation = new Organisation();
        $organisation->inn = $req->input('inn');
        $organisation->country = $req->input('country');
        $organisation->email = $req->input('email');
        $organisation->address = $req->input('address');
        $organisation->data = $req->input('data');

        $organisation->save();


    }

    public function allData(){

        return view('index.dataOrganisation', ['datas' => Organisation::all()]);

    }

    public function upload(OrganisationRequest $request){
            $path =$request->file('image')->store('uploads', 'public');

            return view('index.index', ['path' => $path]);
    }


}
