<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Memory;

class MemoryApprovalController extends Controller
{

    public function update($id)
    {

        $memory = Memory::where('unique_id', $id)->firstOrFail();

        $memory->approved = 1;

        $memory->save();

        return response('OK', 200);

    }

}
