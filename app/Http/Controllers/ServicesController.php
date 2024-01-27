<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\TeamMemberResource;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::All();
        return response()->json([
            'services' => $services,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($service_id, $date)
    {
        $service = Service::find($service_id);

        $teamMembersModel = new TeamMember();
        $teamMembers = $teamMembersModel->whoAvailableOn($date, $service_id);

        return response()->json([
            'service'       => ServiceResource::make($service),
            'teamMembers'   => TeamMemberResource::collection($teamMembers),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
