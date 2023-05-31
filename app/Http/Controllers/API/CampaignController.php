<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::all();
        return response()->json($campaigns);
    }

    public function store(Request $request)
    {
        $campaign = new Campaign();
        $campaign->title = $request->input('title');
        $campaign->status = $request->input('status');
        $campaign->description = $request->input('description');
        $campaign->fund = $request->input('fund');
        $campaign->save();

        return response()->json($campaign, 201);
    }

    public function show($id)
    {
        $campaign = Campaign::findOrFail($id);
        return response()->json($campaign);
    }

    public function update(Request $request, $id)
    {
        $campaign = Campaign::findOrFail($id);
        $campaign->title = $request->input('title');
        $campaign->status = $request->input('status');
        $campaign->description = $request->input('description');
        $campaign->fund = $request->input('fund');
        $campaign->save();

        return response()->json($campaign);
    }

    public function destroy($id)
    {
        $campaign = Campaign::findOrFail($id);
        $campaign->delete();

        return response()->json(['message' => 'Campaign deleted successfully']);
    }
}
