<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * Show all instances of User objects
     *
     * @return \Illuminate\Contracts\View\\Illuminate\Contracts\View\Factory|\Illuminate\View\\Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users')); }

    /**
     * Show one instance of User object
     *
     * @param User $user
     *
     * @return \Illuminate\Contracts\View\\Illuminate\Contracts\View\Factory|\Illuminate\View\\Illuminate\View\View
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * Create a new User object
     *
     * @return \Illuminate\Contracts\View\\Illuminate\Contracts\View\Factory|\Illuminate\View\\Illuminate\View\View
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Edit User object
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\\Illuminate\Contracts\View\Factory|\Illuminate\View\\Illuminate\View\View
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Save User object instance (POST request)
     *
     * @return \Illuminate\Http\\Illuminate\Http\RedirectResponse|\Illuminate\Routing\\Illuminate\Routing\Redirector
     */
    public function store()
    {
        return redirect('home');
    }

    /**
     * Update User object instance (PUT request)
     *
     * @param User $user
     * @return \Illuminate\Http\\Illuminate\Http\RedirectResponse|\Illuminate\Routing\\Illuminate\Routing\Redirector
     */
    public function update(User $user)
    {
        $user->update(Input::all());
        return redirect('home');
    }

    /**
     * Delete User object (DELETE request)
     *
     * @param User $user
     * @return \Illuminate\Http\\Illuminate\Http\RedirectResponse|\Illuminate\Routing\\Illuminate\Routing\Redirector
     */
    public function destroy(User $user)
    {
        return redirect('home');
    }
}
