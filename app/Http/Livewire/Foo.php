<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Foo extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
            </div>
        blade;
    }
}
