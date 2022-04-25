<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_content.userslist',[
            'users'=>User::paginate(3)
        ]);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.edit',
          ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $request->validate([   
            'name' => ['required','regex:/^[A-Z]{1}[a-ząęłńśćźżó-]{1,25}$/', 'string', 'alpha'],
            'surname' =>['required', 'string', 'alpha','regex:/^[A-Z]{1}[a-ząęłńśćźżó-]{1,25}$/'],
            'email' => ['required', 'string', 'email', 'max:255',],
            'kraj'=>['required'],
            'dataur'=>['date']
        ]);
        $user = User::find($id);
        $user->fill($request->only(['name','surname','email','kraj','dataur']));
        $user->save();
        return redirect(route('admin_content.userslist'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id):\Illuminate\Http\JsonResponse
    {   
        
        try{
            //throw new Exception();
            $user =User::find($id);
            $user->delete();
            return response()->json(['status'=>'success']);
        }catch(Exception $e){
            return response()->json([
                'status'=>'error',
                'message'=>'Blad'])
                    ->setStatusCode(500);
        }
    }
}
