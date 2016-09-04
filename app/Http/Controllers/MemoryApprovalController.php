<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Memory;

class MemoryApprovalController extends Controller
{

    public function update($id)
    {

        Memory::where('unique_id', $id)->update([
          'approved' => 1
        ]);

        return response('OK', 200);

    }

}
