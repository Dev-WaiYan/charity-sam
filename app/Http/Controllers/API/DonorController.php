<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index()
    {
        $donors = Donor::with('user')->get();
        return response()->json($donors);
    }

    public function store(Request $request)
    {
        $donor = new Donor();
        $donor->donation_amount = $request->input('donation_amount');
        $donor->user_id = $request->input('user_id');
        $donor->save();

        return response()->json($donor, 201);
    }

    public function show($id)
    {
        $donor = Donor::findOrFail($id);
        return response()->json($donor);
    }

    public function update(Request $request, $id)
    {
        $donor = Donor::findOrFail($id);
        $donor->donation_amount = $request->input('donation_amount');
        $donor->user_id = $request->input('user_id');
        $donor->save();

        return response()->json($donor);
    }

    public function destroy($id)
    {
        $donor = Donor::findOrFail($id);
        $donor->delete();

        return response()->json(['message' => 'Donor deleted successfully']);
    }
}
