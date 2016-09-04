<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Memory;
use Mail;

class MemoryController extends Controller
{

    /**
     * get approved memories
     *
     * @return Response
     */
    public function index()
    {

      return Memory::where('approved',1)->get();

    }

    /**
     * store the new memory
     *
     * @return Response
     */
    public function store(Request $request)
    {

      $this->validate($request, [
        'name' => 'required|string',
        'body' => 'required|string',
      ],[
        'body.required' => 'please type in a memory or goodbye.',
      ]);

      $memory = Memory::create([
        'name' => $request->get('name'),
        'body' => $request->get('body'),
      ]);

      Mail::send('email.approval', ['memory' => $memory], function($m) {

        $m->to(env('ADMIN_EMAIL'));
        $m->from('approvals@rememberernie.com');
        $m->subject('Approval needed');

      });

      return response('OK', '200');

    }

}
