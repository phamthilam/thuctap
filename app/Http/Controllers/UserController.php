<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listUser=User::query()->get();
        return view('users.list', compact('listUser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);
        $data=[
            'name'=> $validatedData['name'],
            'email'=> $validatedData['email'],
            'password'=> $validatedData['password'],

        ];
        User::query()->create($data);
        return redirect()->route('listUser');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $User=User::query()->findOrFail($id);
        return view('users.detail', compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $User=User::query()->findOrFail($id);
        return view('users.edit',compact('User')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $User=User::query()->findOrFail($id);
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($User->id),
            ],
            'password' => 'nullable|string|min:8',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:15',
        ]);
        $User->update($validatedData);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $User=User::query()->findOrFail($id);
        $User->delete();
        return back();
    }
}
