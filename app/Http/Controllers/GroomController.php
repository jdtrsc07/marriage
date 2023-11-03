<?php

namespace App\Http\Controllers;

use App\Models\Groom;
use App\Http\Resources\GroomResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GroomController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function fetchgroom()
    {
        $userId = auth()->user()->id;

        $groomRecord = Groom::where('user_id', $userId)->first();

        $groomResource = new GroomResource($groomRecord);
        if (!$groomRecord) {
            return response()->json(
                [
                    'message' => 'No record yet'
                    //     'error' => 'No groom record found for the authenticated user'
                ],
                // 404
            );
        }
        return response()->json([
            'status' => 200,
            'grooms' => $groomResource,
        ]);

    }
}
