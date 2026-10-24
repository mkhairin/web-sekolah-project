<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

class StudentSelect extends Component
{
    public EloquentCollection $users;
    public string $name;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $name
    ) {
        $this->name = $name;
        $this->users = User::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.student-select');
    }
}
