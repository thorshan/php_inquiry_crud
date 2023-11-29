<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Type;
use App\Models\Status;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inquiries = Inquiry::all();
        return view("dashboard.index", compact("inquiries"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $statuses = Status::all();
        return view("dashboard.create", compact("types","statuses"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $data_validation = $request->validate([
            "date"=> "required",
            "name"=> "required",
            "city"=> "required",
            "type_id"=> "required",
            "phone"=> "required",
            "status_id"=> "required",
        ]);

        //
        $inquiry = new Inquiry();
        $inquiry->date = $data_validation['date'];
        $inquiry->name = $data_validation['name'];
        $inquiry->city = $data_validation['city'];
        $inquiry->phone = $data_validation['phone'];
        $inquiry->status_id = $data_validation['status_id'];
        $inquiry->remark = $request->remark;
        $inquiry->type_id = $data_validation['type_id'];

        $inquiry->save();

        return redirect()->route("inquiries.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inquiry = Inquiry::find($id);
        $statuses = Status::all();
        $types = Type::all();
        return view("dashboard.view", compact("inquiry","statuses","types"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $inquiry = Inquiry::find($id);
        $statuses = Status::all();
        $types = Type::all();
        return view("dashboard.edit", compact("inquiry","statuses","types"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_validation = $request->validate([
            "date"=> "required",
            "name"=> "required",
            "city"=> "required",
            "type_id"=> "required",
            "phone"=> "required",
            "status_id"=> "required",
        ]);

        //
        $inquiry = Inquiry::find( $id );
        $inquiry->date = $data_validation['date'];
        $inquiry->name = $data_validation['name'];
        $inquiry->city = $data_validation['city'];
        $inquiry->phone = $data_validation['phone'];
        $inquiry->status_id = $data_validation['status_id'];
        $inquiry->remark = $request->remark;
        $inquiry->type_id = $data_validation['type_id'];

        $inquiry->save();

        return redirect()->route("inquiries.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Inquiry::destroy($id);
        return redirect()->route("inquiries.index");
    }
}
