<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::with('user')->get();
        return response()->json($partners);
    }

    public function store(Request $request)
    {
        $partner = new Partner();
        $partner->user_id = $request->input('user_id');
        $partner->save();

        return response()->json($partner, 201);
    }

    public function show($id)
    {
        $partner = Partner::findOrFail($id);
        return response()->json($partner);
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);
        $partner->user_id = $request->input('user_id');
        $partner->save();

        return response()->json($partner);
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();

        return response()->json(['message' => 'Partner deleted successfully']);
    }
}
