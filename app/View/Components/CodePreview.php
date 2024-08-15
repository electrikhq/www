<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CodePreview extends Component
{
    public $code;

    /**
     * Create a new component instance.
     *
     * @param string $code
     * @return void
     */
    public function __construct($code = null)
    {
        $this->code = $code;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.code-preview');
    }
}
