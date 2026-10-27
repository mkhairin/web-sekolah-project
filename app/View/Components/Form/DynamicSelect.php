<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

class DynamicSelect extends Component
{
    public EloquentCollection $users;
    public string $name;
    public mixed $value;
    public string $role;
    public string $label;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $name,
        string $role = 'student',
        mixed $value = null,
        ?string $label = null
    ) {
        $this->name = $name;
        $this->role = $role;
        $this->value = $value;

        $this->label = $label
            ?? ($role === 'teacher' ? 'Nama Guru' : 'Nama Siswa');

        $this->users = User::where('role', $role)
            ->orderBy('name')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.dynamic-select');
    }
}
