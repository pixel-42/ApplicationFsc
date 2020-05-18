<?php


namespace App\Http\Controllers\Crm;


use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicationRequest;
use App\Models\Application;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Inspecting;
use App\Models\Document;
use http\Url;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Storage;
use Storage;

class ApplicationController extends Controller {

    public function submits(ApplicationRequest $req, $id){

        $appication = new Application();
        $appication->sender_id = Auth::id();
        $appication->recipient_id = $id;
        $appication->name_organisation = $req->input('name_organisation');
        $appication->inn = $req->input('inn');
        $appication->address = $req->input('address');
        $appication->contact_person = $req->input('contact_person');
        $appication->region = $req->input('region');
        $appication->forestry = $req->input('forestry');
        $appication->forest_district = $req->input('forest_district');
        $appication->tract = $req->input('tract');
        $appication->list_blocks = $req->input('list_blocks');
        $appication->status = 'In the treatment';

        $appication->save();

        $pathр = $req->file('application_document')->store('documents', 'public');

        $originalName = $req->file('application_document')->getClientOriginalName();

        //Добавление документа в хранилище и добавление записи с сылкой на документ, в БД
        $id_applicat = Application::orderBy('id', 'desc')->first()->id;
        $doc = new Document();
        $doc->application_id = $id_applicat;
        $doc->filename = $originalName;
        $doc->url = $pathр;

        $doc->save();

        return redirect()->route('list-application');

    }

    public function showAllRequestForAdmin(){
        $applOpganisation =  DB::table('applications')->get();

        return view('index.listApplication', [
            'allRequest' => $applOpganisation
        ]);
    }

    public function showAllRequest(){
        $applOpganisation =  DB::table('applications')->where('recipient_id', Auth::id())->orWhere('sender_id', Auth::id())->get();

        return view('index.listApplication', [
            'allRequest' => $applOpganisation
            ]);
    }

    public function showRequest($request_id){
//        $contents = Storage::get('public/documents/FgIqmDTq8RkQpSuJukQXhrcnmqmRRTruLkYYs3bM.pdf');
//        dd($contents);

        $dataRequest =  DB::table('applications')->where('id', $request_id)->first();
        $dataRequestDocument = DB::table('documents')->where('application_id', $request_id)->get();
        return view('page.request', [
            'dataRequest' => $dataRequest,
            'dataRequestDocument' => $dataRequestDocument
        ]);
    }

    public function showDocument($id){

        $dataDocument = DB::table('documents')->where('id', $id)->value('url');;
        return view('page.showDocument', ['path'=> $dataDocument]);
//        return view('index.showDocument' , ['path'=> $url]);
    }

    public function addComment( Request $req_add_comment, $id){
        $appication_add_comment = Application::find($id);
        $appication_add_comment->comment = $req_add_comment->input('add-comment');
        $appication_add_comment->save();

        return redirect()->route('show-request', ['request_id'=> $id]);
    }
}
