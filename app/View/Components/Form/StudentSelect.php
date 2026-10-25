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
    public mixed $value;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $name,
        mixed $value = null
    ) {
        $this->name = $name;
        $this->value = $value;
        $this->users = User::where('role', 'student')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.student-select');
    }
}
