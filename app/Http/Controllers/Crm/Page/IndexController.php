<?php

namespace App\Http\Controllers\Crm\Page;



use App\Http\Controllers\Crm\CrmController;
use App\Models\Organisation;


class IndexController extends CrmController
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $generalStatus = false;
        $listOrganization = [];

        return view('page.index');
    }


    public function add()
    {

        Organisation::create([
                'inn' => '5520239600',
                'country' => 'ru',
                'e-mail' => '5520239600@mail.ru',
                'address' => 'г. Омск',
            ]);



        return view('index.index');
    }


}
