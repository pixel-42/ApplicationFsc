<?php


namespace App\Http\Controllers\Crm\Documents;

use App\Http\Requests\DocumentRequest;
use App\Models\Document;
use http\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController
{
    public function create(){


    }
    public function store(Request $request){

        if ($request->file('application_document') == null) {
            $pathр = "";
        }else{
            $pathр = $request->file('application_document')->store('documents', 'public');
        }



        $file = Document::create([
            'filename' => basename($pathр),
            'url' => Storage::disk('public')->url($pathр)
        ]);


//        $path = $request->file('document')->store('documents');

        return $file;

    }

    public function show(Document $document){

        return Storage::disk('public')->response('documents/' .$document->filename);
    }
}
