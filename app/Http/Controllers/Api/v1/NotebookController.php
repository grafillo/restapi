<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\NotebookRequest;
use App\Models\Notebook;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use phpDocumentor\Reflection\Types\Resource_;
use function MongoDB\BSON\toJSON;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Notebook::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NotebookRequest $request)
    {
       $note = Notebook::create($request->validated());
       return $note;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Notebook::findOrFail($id);
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
        $topic = Notebook::findOrFail($id);
        $updateTopic = $request->toArray();

        if (!isset($request->fio))
        {
            $updateTopic["fio"] = $topic->fio;
        }
        if (!isset($request->phone))
        {
            $updateTopic["phone"] = $topic->phone;
        }
        if (!isset($request->email))
        {
            $updateTopic["email"] = $topic->email;
        }

        $topic->update($updateTopic);
        return $topic;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = Notebook::findOrFail($id);
        $topic->delete();
        return response()->json(['result' => 'del successfuly'], 200);
    }
}
