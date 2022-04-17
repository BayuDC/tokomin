<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('user.index', [
            'active' => 'user',
            'title' => 'Manage User',
            'users' => User::all('id', 'fullname', 'role')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('user.create', [
            'title' => 'Add User',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'fullname' => 'required|regex:/^[a-zA-Z\s]+$/',
            'username' => 'required|regex:/^[a-zA-Z0-9\_]+$/',
            'password' => 'required|min:8',
        ]);

        User::create($validated);

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) {
        return view('user.show', [
            'title' => 'User Detail',
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) {
        return view('user.edit', [
            'title' => 'Edit User',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user) {
        $validated = $request->validate([
            'fullname' => 'required|regex:/^[a-zA-Z\s]+$/',
            'username' => 'required|regex:/^[a-zA-Z0-9\_]+$/',
        ]);

        $user->update($validated);

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) {
        //
    }
}
