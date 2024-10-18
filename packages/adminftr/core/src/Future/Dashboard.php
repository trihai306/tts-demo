<?php

namespace Adminftr\Core\Future;

use Livewire\Component;

class Dashboard extends Component
{
    public string $currentDay = '';

    public function mount()
    {
        $this->currentDay = now()->format('l j, M Y');
    }

    public function render()
    {
        $widgets = $this->getWidgets();
        return view('future::future.dashboard', compact('widgets'));
    }

    protected function getWidgets()
    {
        return config('future.future.dashboard.widgets');
    }
}
