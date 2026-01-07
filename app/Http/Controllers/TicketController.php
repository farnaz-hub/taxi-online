<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\Ticket;

class TicketController extends Controller
{
    public function list()
    {
        $tickets = \App\Models\Ticket::all();
        return redirect(route('ticket.list', compact('tickets')));
    }
}
