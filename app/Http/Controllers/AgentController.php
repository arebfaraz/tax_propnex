<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allAgents = Agent::latest()->get();

        return view('agents', compact('allAgents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'account_name' => 'required',
            'biz_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'passport_no' => 'required|max:30',
        ]);

        $pxRandomNumber = rand(100000000, 999999999);
        $newpxRandomNumber = "PX" . $pxRandomNumber;
        $pxcRandomNumber = rand(100000000, 999999999);
        $newpxcRandomNumber = "PXC" . $pxcRandomNumber;

        if ($validated) {
            $addAgent = new Agent();
            $addAgent->account_name = $request->account_name;
            $addAgent->biz_name = $request->biz_name;
            $addAgent->phone = $request->phone;
            $addAgent->email = $request->email;
            $addAgent->id_passport_no = $request->passport_no;
            $addAgent->propnex_id = $newpxRandomNumber;
            $addAgent->pxc_id = $newpxcRandomNumber;
            $addAgent->save();

            return redirect('/agents')->with('message', 'Add agent successfully!');
        } else {
            return back()->with('error', 'something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pageData = Agent::find($id);
        return view("editagentform", compact('pageData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        // return $request;



        $request->validate([
            'account_name' => 'required',
            'biz_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'passport_no' => 'required',
        ]);

        // return $request;
        $pageData = Agent::find($id);
        $pageData->account_name = $request->account_name;
        $pageData->biz_name = $request->biz_name;
        $pageData->phone = $request->phone;
        $pageData->email = $request->email;
        $pageData->id_passport_no = $request->passport_no;
        $pageData->active = $request->status;
        $pageData->save();

        return redirect('/agents')->with('message', 'Updated agent successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $pageData = Agent::find($id);
        $pageData->delete();
        return redirect()->back()->with('message', 'Successfully deleted');
    }
}
