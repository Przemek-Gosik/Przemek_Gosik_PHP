<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $comment = new Comment;
        $comments = Comment::paginate(4);
        return view('pages.comments',
                ['comments'=> $comments],
                ['comment'=>$comment]);
    
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'message' => 'required|min:10|max:500',
            ]);
        $comment=new Comment();
        $comment->user_id=\Auth::user()->id;
        $comment->message=$request->message;
        if($comment->save()){
        return redirect('/pages/comments');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {   
        
        try{
            //throw new Exception();
            $comment =Comment::find($id);
            $comment->delete();
            return response()->json(['status'=>'success']);
        }catch(Exception $e){
            return response()->json([
                'status'=>'error',
                'message'=>'Blad'])
                    ->setStatusCode(500);
        }
    }
    }
}
