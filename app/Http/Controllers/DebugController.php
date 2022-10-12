<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DebugController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
        $tags = Tag::get();

        return view('test', [
            'tags' => $tags
        ]);
    }
}
