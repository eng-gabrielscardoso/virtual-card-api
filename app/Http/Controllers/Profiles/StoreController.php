<?php

namespace App\Http\Controllers\Profiles;

use App\Models\Profile;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request;

            $user = Profile::where('name', Arr::get($data, 'name'))->first();

            if (is_null($user)) {
                $user = Profile::create([
                    'name' => Arr::get($data, 'name'),
                    'linkedin' => Arr::get($data, 'linkedin'),
                    'github' => Arr::get($data, 'github'),
                ]);
            }

            DB::commit();

            return new ProfileResource($user->where('name', $user->name)->first());
        } catch (\Exception $error) {
            DB::rollBack();

            throw $error;
        }
    }
}
