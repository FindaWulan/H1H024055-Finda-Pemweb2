<?php

namespace App\View\Components;

use Illuminate\View\Component;

class KartuInfo extends Component
{
    public function __construct(public string $judul)
    {
    }

    public function render()
    {
        return view('components.kartu-info');
    }
}
