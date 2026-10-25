<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public string $label;
    public string $name;
    public array $options;
    public string $placeholder;
    public bool $required;
    public mixed $value;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $name,
        string $label,
        string $type,
        string $placeholder = 'Pilih opsi',
        bool $required = false,
        mixed $value = null,
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->value = $value;

        $this->options = match ($type) {
             'gender' => [
                'L' => 'Laki-laki',
                'P' => 'Perempuan',
            ],

            'religion' => [
                'islam' => 'Islam',
                'kristen' => 'Kristen',
                'katholik' => 'Katholik',
                'hindu' => 'Hindu',
                'buddha' => 'Buddha',
            ],

            default => [],
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.select');
    }
}
