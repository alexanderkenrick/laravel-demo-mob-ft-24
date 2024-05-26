<?php

namespace App\View\Components;

use App\Models\Jurusan;
use App\Models\Member;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class item extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Member $member)
    {
        //

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.item');
    }
}
