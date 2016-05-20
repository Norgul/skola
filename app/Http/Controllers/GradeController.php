<?php

namespace App\Http\Controllers;

use App\Grade;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class GradeController extends Controller
{
    /**
     * Show all instances of Grade objects
     *
     * @return \Illuminate\Contracts\View\\Illuminate\Contracts\View\Factory|\Illuminate\View\\Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();
        $grades = Grade::all();
        return view('grade.index', compact('grades', 'users'));
    }

    /**
     * Show one instance of Grade object
     *
     * @param Grade $grade
     * @return \Illuminate\Contracts\View\\Illuminate\Contracts\View\Factory|\Illuminate\View\\Illuminate\View\View
     */
    public function show(Grade $grade)
    {
        return view('grade.show', compact('grade'));
    }

    /**
     * Create a new Grade object
     *
     * @return \Illuminate\Contracts\View\\Illuminate\Contracts\View\Factory|\Illuminate\View\\Illuminate\View\View
     */
    public function create()
    {
        return view('grade.create');
    }

    /**
     * Edit Grade object
     *
     * @param Grade $grade
     * @return \Illuminate\Contracts\View\\Illuminate\Contracts\View\Factory|\Illuminate\View\\Illuminate\View\View
     */
    public function edit(Grade $grade)
    {
        return view('grade.edit', compact('grade'));
    }

    /**
     * Save Grade object instance (POST request)
     *
     * @return \Illuminate\Http\\Illuminate\Http\RedirectResponse|\Illuminate\Routing\\Illuminate\Routing\Redirector
     */
    public function store()
    {
        return redirect('home');
    }

    /**
     * Update Grade object instance (PUT request)
     *
     * @param Grade $grade
     * @return \Illuminate\Http\\Illuminate\Http\RedirectResponse|\Illuminate\Routing\\Illuminate\Routing\Redirector
     */
    public function update(Grade $grade)
    {
        return redirect('home');
    }

    /**
     * Delete Grade object (DELETE request)
     *
     * @param Grade $grade
     * @return \Illuminate\Http\\Illuminate\Http\RedirectResponse|\Illuminate\Routing\\Illuminate\Routing\Redirector
     */
    public function destroy(Grade $grade)
    {
        return redirect('home');
    }
}
