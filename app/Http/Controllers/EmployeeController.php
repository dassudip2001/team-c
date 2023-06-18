<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeCreateRequest;
use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=employee::all();
        return response()->json($data,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $emp=new employee();
        $emp->fast_name=$request['fast_name'];
        $emp->last_name=$request['last_name'];
        $emp->email=$request['email'];
        $emp->date_of_birth=$request['date_of_birth'];
        $emp->education=$request['education'];
        $emp->gender=$request['gender'];
        $emp->company=$request['company'];
        $emp->packages=$request['packages'];
        $emp->experience=$request['experience'];
        try {
            $emp->save();
             return response()->json($emp, 200, );
            //code...
        } catch (\Throwable $th) {
            throw $th;
        }




    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $emp=employee::find($id);
        return response()->json($emp,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $emp= employee::find($id);
        $emp->fast_name=$request['fast_name'];
        $emp->last_name=$request['last_name'];
        $emp->email=$request['email'];
        $emp->date_of_birth=$request['date_of_birth'];
        $emp->education=$request['education'];
        $emp->gender=$request['gender'];
        $emp->company=$request['company'];
        $emp->packages=$request['packages'];
        $emp->experience=$request['experience'];
        try {
            $emp->save();
            return response()->json($emp, 200, );
            //code...
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        employee::find($id);
        return response()->json("recode delete successfully");
    }
}
