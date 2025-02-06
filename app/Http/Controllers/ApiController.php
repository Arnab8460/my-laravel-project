<?php

namespace App\Http\Controllers;
use App\Models\TaskModel;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function user_response()
    {
        $data=TaskModel::all();
        return response()->json($data);
    }
}
