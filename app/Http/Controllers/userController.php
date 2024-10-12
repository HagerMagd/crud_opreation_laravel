<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreFormRequest;
class userController extends Controller
{
    // for welcome page
    
    public function welcomepage()
    {
        return view('crud.welcome');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $users = User::get();
        return view('crud.showdata', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    
    public function store(StoreFormRequest $request)
    {

        User::create(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'address'=>$request->address,
                'password' => $request->password

            ]
            );
            return view('crud.data');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::findOrFail($id);
        return view('crud.editdata',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreFormRequest $request, string $id)
    {
        $user=User::findOrFail($id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'password' => $request->password
        ]);
        return redirect()->route('crud.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findorFail($id)->delete();
        return redirect()->route('crud.index');
    }
    public function deleteall(){
        User::truncate();
        return redirect()->route('crud.index')->with('success', 'تم حذف جميع البيانات بنجاح');
        
    }
   

}