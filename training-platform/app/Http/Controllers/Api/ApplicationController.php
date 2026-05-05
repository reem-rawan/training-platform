<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'graduate_id' => 'required',
            'opportunity_id' => 'required',
        ]);

        $application = Application::create([
            'graduate_id' => $request->graduate_id,
            'opportunity_id' => $request->opportunity_id,
            'status' => 'تحت المراجعة',
        ]);

        return response()->json([
            'message' => 'تم إرسال الطلب',
            'data' => $application
        ]);
    }

    public function myApplications($id)
    {
        return response()->json(
            Application::where('graduate_id', $id)->get()
        );
    }
}