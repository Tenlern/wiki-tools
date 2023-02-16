<?php

namespace App\View\Components;

use App\Models\Section;
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
        $sections = Section::get();

        return view('layouts.app', ['sections' => $sections]);
    }
}
