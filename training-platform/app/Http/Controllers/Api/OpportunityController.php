<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OpportunityTraining;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function index()
    {
        return response()->json(OpportunityTraining::all());
    }

    public function show($id)
    {
        return response()->json(
            OpportunityTraining::findOrFail($id)
        );
    }
}