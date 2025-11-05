<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\StoreSubscriberRequest;
use App\Models\Message;
use App\Models\Subscriber;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class FrontController extends Controller
{
    public function index(): View
    {
        return view('frontend.index', get_defined_vars());
    }

    public function about(): View
    {
        return view('frontend.about', get_defined_vars());
    }

    public function contact(): View
    {
        return view('frontend.contact', get_defined_vars());
    }

    public function services(): View
    {
        return view('frontend.services', get_defined_vars());
    }

    public function subscribe(StoreSubscriberRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Subscriber::create($data);
        return to_route('frontend.index')->with('subscribe_success', 'Subscribed successfully');
    }

    public function storeContact(StoreMessageRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Message::create($data);
        return back()->with('message_success', 'Message sent successfully');
    }
}
