<?php

namespace Adminftr\Widgets\Future;

use Closure;

class Stat extends Widget
{
    protected $value;
    protected $description;
    protected $color = 'primary';
    protected $icon;
    protected $currentDay;

    public static function make($value, $description)
    {
        $instance = new self();
        $instance->value = $value instanceof Closure ? $value() : $value;
        $instance->description = $description instanceof Closure ? $description() : $description;
        return $instance;
    }
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }

    public function render()
    {
        $this->currentDay = now()->format('l j, M Y');
        return view('widget::stat', [
            'value' => $this->value,
            'description' => $this->description,
            'color' => $this->color,
            'col'=>$this->col,
            'icon'=>$this->icon,
            'currentDay'=>$this->currentDay
        ]);
    }
}
