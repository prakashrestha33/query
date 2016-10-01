<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Query;
use App\reply_models;
use Session;

class QueryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }




    public function index()
    {
        $query = Query::all();
        return view('query.index')->withQuery($query);
    }



    public function create()
    {

      return view('query.create');
    }




    public function store(Request $request)
    {
        
        $this->validate($request, array(

            'subject' => 'required| max:255',
            'description' => 'required'

            ));

         $query = new Query;
         $query->subject = $request->subject;
         $query->description = $request->description;
         $query->created_by=$request->created_by;
          $query->save();

         return redirect()->route('query.create',$query->id);

    }


    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $query= Query::find($id);
       $reply= reply_models::where('query_id', '=', $query->id)->get()  ;
        return view ('query.show')->withQuery($query)->withReply($reply);
    }


    public function edit($id)
    {
       $query= Query::find($id);
       $reply= reply_models::where('query_id', '=', $query->id)->get()  ;
        return view ('query.edit')->withQuery($query)->withReply($reply);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, array(

            'subject' => 'required| max:255',
            'description' => 'required'

            ));
        $query=Query::find($id);

        $query->subject = $request->input('subject');
         $query->description = $request->input('description');
        
          $query->save();

          Session::flash('success','u changed the query');

         return redirect()->route('query.show',$query->id);
    }


    public function destroy($id)
    {
          $query=Query::find($id);
          $query->delete();
          return redirect()->route('query.index');

    }
    
}










