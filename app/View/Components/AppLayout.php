<?php

namespace App\View\Components;

use App\Models\Tag;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return View
     */
    public function render(): View
    {
        $sections = Tag::query()
            ->root()
            ->get();

        return view('layouts.app');
    }
}
