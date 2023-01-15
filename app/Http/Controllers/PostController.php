<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class PostController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('post.index')->with([
            'posts' => Post::latest()->limit(3)->get()
        ]);
    }

    public function create(): Factory|View|Application
    {
        return view('post.create');
    }

    public function store(Request $request): Redirector|Application|RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['string', 'min:4', 'max:255'],
            'body' => ['string', 'min:4', 'max:65535'],
        ]);

        $validated['user_id'] = $request->user()->id;

        Post::create($validated);

        return redirect(route('post.index'));
    }
}
