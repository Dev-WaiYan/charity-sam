<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index()
    {
        $volunteers = Volunteer::with('user')->get();
        return response()->json($volunteers);
    }

    public function store(Request $request)
    {
        $volunteer = new Volunteer();
        $volunteer->user_id = $request->input('user_id');
        $volunteer->save();

        return response()->json($volunteer, 201);
    }

    public function show($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return response()->json($volunteer);
    }

    public function update(Request $request, $id)
    {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->user_id = $request->input('user_id');
        $volunteer->save();

        return response()->json($volunteer);
    }

    public function destroy($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->delete();

        return response()->json(['message' => 'Volunteer deleted successfully']);
    }
}
