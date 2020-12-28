<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RegisterController extends Controller
{
    public function create(Request $request)
    {
        $request->validate(
            $this->rules()
        );
        $create = User::create(
            [
                'name' =>  $request->name,
                'number' => $request->number,
                'type' => $request->type,
            ]
        );
        if($create){
//           return Inertia::render('Message/Success');
            return response()->json(['status' => 'success','message' => 'details submitted successfully '], 200);
        }
        return response()->json(['status' => 'error','message' => 'not submitted'],422);
    }
    private function rules()
    {
        return [
            'name' => 'required|string',
            'number' => 'required|numeric',
            'type' => 'required|string|in:passenger,driver'
        ];
    }
}
