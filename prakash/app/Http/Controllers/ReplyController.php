<?php

namespace App\Http\Controllers;

use App\reply_models;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Query;
use League\Flysystem\Exception;


class ReplyController extends Controller
{


   public function __construct()
   {
       $this->middleware('auth');
   }

    public function index()
    {
        $query = Query::all();
        return view ('reply.index')->withQuery($query);

    }


    public function store(Request $request)
    {
        $this->validate($request, array(


            'comment' => 'required'

        ));

        try{
            $query = new Query;
            $reply = new reply_models;
            $reply->comment = $request->comment;
            $reply->query_id = $request->query_id;
            $reply->created_by=$request->created_by;
            $reply->save();
        }
        catch (Exception $e){


    }

//print_r($reply);

       return redirect()->route('query.show',$query->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $query= Query::find($id);
       $reply= reply_models::find($id);
      //$reply= reply_models::where('query_id', '=', $query->id)->get();
      //$replyid=$reply->id;
       
        return view ('reply.edit')->withQuery($query)->withReply($reply);
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

        $this->validate($request, array(


            'comment' => 'required'

        ));
       
        $query=Query::find($id);


        $reply=reply_models::find($id);
      
         $reply->comment = $request->input('comment');
        
          $reply->save();

           
        //return redirect('query/index');
       //  return redirect('query/show',$query->id);
       //return redirect()->back()->with('message', 'edit success');
         return redirect()->route('query.index');
    }





      
           
           

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reply=reply_models::find($id);
          $reply->delete();
          return redirect()->route('query.index');
    }
}
