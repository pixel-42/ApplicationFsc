<?php


namespace App\Http\Controllers\Crm\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\InspectingRequest;
use App\Models\Inspecting;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ActionWithInspectingController extends Controller
{

    public function deleteInspecting($inspecting_id){
        DB::delete('delete from inspectings where id = ?',[$inspecting_id]);
        DB::delete('delete from users where id = ?',[$inspecting_id]);
        return redirect()->route('showInspecting');
    }


    public function formAddInspecting(){
        return view('page.addInspecting');
    }
    //Добавление инспектора
    protected function create(Request $request, InspectingRequest $req)
    {

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'inspecting';
        $user->save();

        $id_ins = User::orderBy('id', 'desc')->first()->id;


        $inspecting = new Inspecting();
        $inspecting->inspecting_id = $id_ins;
        $inspecting->inspecting_name = $req->name_inspecting;
        $inspecting->address = $req->address;
        $inspecting->responsible = $req->responsible;
        $inspecting->phone = $req->phone;

        $inspecting->save();

//        Inspecting::create([
//            'inspecting_name' => $request->name_inspecting,
//            'address' => $request->address,
//            'responsible' => $request->responsible,
//            'phone' => $request->phone
//        ]);
        return view('index.listInspecting', ['allInspecting' => Inspecting::all()]);
    }

}
