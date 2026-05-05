<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Graduate;
use Illuminate\Http\Request;

class GraduateController extends Controller
{
    public function show($id)
    {
        return response()->json(
            Graduate::findOrFail($id)
        );
    }
}
