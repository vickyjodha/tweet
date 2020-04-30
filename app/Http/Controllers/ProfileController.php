<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\User;
class ProfileController extends Controller
{   public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(User $user)
    {
        //return view('profile.show',compact('user'));
                    //->with('user',User::find($id));
                    return view('profiles.show', [
                        'user' => $user,
                        'tweets' => $user->tweets()->paginate(50),
                        'tweets' => $user
                            ->tweets()
                            ->withLikes()
                            ->paginate(50),
                    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    { // $this->authorize('edit',$user);
       // abort_if($user->isNot(Auth()->user()),404);
        return view('profile.edit',compact('user'));
                                  //->with('user',User::find());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
       $alldata=request()->validate([
            'name'=>['required','string','max:255','min:2'],
            'email'=>['string','email','max:255','required'],
            'password' => ['required', 'string', 'min:8','max:255', 'confirmed'],
            'avatar'=>['file'],
        ]);
        if(request('avatar')){

            $alldata['avatar']=request('avatar')->store('avatars');
        }
        $user->update($alldata);
        return back();
    //     $update=User::find(Auth()->id());
    //     $update->name=$request->name;
    //     $update->email=$request->email;
    //     $update->password=Hash::make($request->Password);
    //     $update->update();
    //    // $user->update($requestvalidate);
    //     return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
