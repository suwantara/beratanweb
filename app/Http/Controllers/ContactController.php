<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->paginate(9);
        // Ubah ini untuk mengirim ke view dashboard
        return view('dashboard', compact('messages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create($validated);

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim.');
    }

    public function markAsRead(Message $message)
    {
        $message->update([
            'read_at' => now()
        ]);

        return back()->with('success', 'Pesan ditandai sebagai sudah dibaca');
    }
}
