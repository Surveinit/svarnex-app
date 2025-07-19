<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Status;
use Illuminate\Http\Request;

class AdminClientController extends Controller
{
    /**
     * Display a paginated list of pending clients.
     */

    public function allClients()
    {
        $clients = Client::latest()->Paginate(10);
        return view('admin.clients', compact('clients'));
    }

    public function pendingClients()
    {
        $pendingClients = Client::where('status_code', 'NL')
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Paginate with 10 items per page

        return view('admin.pending-clients', compact('pendingClients'));
    }

    public function meetingClients()
    {
        $meetingClients = Client::where('status_code', 'MT')
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Paginate with 10 items per page

        return view('admin.meeting-clients', compact('meetingClients'));
    }

    public function deliveredClients()
    {
        $deliveredClients = Client::where('status_code', 'PD')
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Paginate with 10 items per page

        return view('admin.delivered-clients', compact('deliveredClients'));
    }

    public function lostClients()
    {
        $lostClients = Client::where('status_code', 'CL')
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Paginate with 10 items per page

        return view('admin.lost-clients', compact('lostClients'));
    }

    /**
     * Display the specified client.
     */
    public function showClient(Client $client)
    {
        $statuses = Status::all(); // Get all possible statuses for dropdown or reference
        return view('admin.client-detail', compact('client', 'statuses'));
    }

    /**
     * Update the status of the specified client.
     */
    public function updateStatus(Request $request, Client $client)
    {
        $request->validate([
            'status_code' => ['required', 'exists:statuses,status_code'],
        ]);

        $client->update([
            'status_code' => $request->status_code,
        ]);

        return redirect()->back()->with('success', 'Client status updated successfully!');
    }
}
