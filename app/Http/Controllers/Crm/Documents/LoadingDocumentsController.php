<?php

namespace App\Http\Controllers\Crm\Documents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoadingDocumentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */



    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Получение данных с формы загрузки документов
     *
     * @param Request $request
     * @return
     */
    public function add(Request $request){
//        dd($request);
//
//        return view('index.index');

        $path = $request->file('document')->store('documents');

        return $path;
    }



}
