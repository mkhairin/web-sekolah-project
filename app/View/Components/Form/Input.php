<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public string $label;
    public string $name;
    public string $type;
    public string $placeholder;
    public bool $required;
    public mixed $value;

    public function __construct(
        string $name,
        string $label,
        string $type = 'text',
        string $placeholder = '',
        bool $required = false,
        mixed $value = null
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
