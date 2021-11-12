<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TicketController extends Controller
{

   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usertype=Auth::user()->user_type;
        $tickets = ticket::all();

        if($usertype =="1") {
            return view('technician.tickets', compact('tickets'));


        }
        elseif($usertype =="2") {
            return view('user.tickets', compact('tickets'));


        }
        else {
            return view('admin.tickets', compact('tickets'));

        }


       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usertype=Auth::user()->user_type;

        if($usertype =="1") {
            return view('technician.tickets');


        }
        elseif($usertype =="2") {
            return view('user.newticket');


        }
        elseif($usertype =="0")  {
            return view('admin.tickets');

        } 
        else {
            return view('404');

        } 
    
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ref' => 'required',
            'sujet' => 'required',
            'description' => 'required',
            'service' => 'required',
            'criticité' => 'required',


        ]);
    
        ticket::create($request->all());
     
        return redirect()->route('tickets.index')
                        ->with('success','Ticket created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticket $ticket)
    {
        //
    }
}
