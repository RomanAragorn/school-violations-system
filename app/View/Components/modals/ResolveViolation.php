<?php

namespace App\View\Components\modals;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ResolveViolation extends Component
{
    public $id;
    public $record;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $record)
    {
        $this->id = $id;
        $this->record = $record;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modals.resolve-violation');
    }
}
