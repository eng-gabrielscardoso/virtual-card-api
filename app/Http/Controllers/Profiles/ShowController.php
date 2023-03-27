<?php

namespace App\Http\Controllers\Profiles;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $profile = Profile::where('name', $request->name)->first();

        if (is_null($profile)) {
            return response()->json(['error' => 'Profile not found or not exists in database'], 404);
        }

        return new ProfileResource($profile);
    }
}
