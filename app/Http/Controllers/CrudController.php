<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
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
        return view("addStuForm");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new crud;
        $res->name = $request->input("name");
        $res->email = $request->input("email");
        $res->number = $request->input("number");
        $res->class = $request->input("class");
        $res->save();
        $request->session()->flash("msg", "Student Added Successfully");
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(crud $crud)
    {
        return view("home")->with("SavedStudends", crud::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(crud $crud, $id)
    {
        return view("editUser")->with("SingleStudent", crud::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, crud $crud)
    {
        $res = crud::find($request->id);
        $res->name = $request->input("name");
        $res->email = $request->input("email");
        $res->number = $request->input("number");
        $res->class = $request->input("class");
        $res->save();
        $request->session()->flash("msg", "Student data updated Successfully");
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(crud $crud, $id)
    {
        crud::destroy(array("id", $id));
        return redirect("/");
    }
}
