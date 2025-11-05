<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $messages = Message::paginate(config('pagination.default'));

        return view('admin.messages.index', get_defined_vars());
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message): View
    {
        return view('admin.messages.show', get_defined_vars());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message): RedirectResponse
    {
        $message->delete();

        return to_route('admin.messages.index')->with('success', __('keywords.message_deleted_successfully'));
    }
}
