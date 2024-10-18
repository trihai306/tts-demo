<?php

namespace Adminftr\Widgets\Future;

class WidgetGroup extends Widget
{
    protected $widgets = [];
    protected array $col = ['sm' => 12, 'md' => 8, 'xl' => 8];
    protected $title = '';
    public static function make($title,array $widgets = [])
    {
        $instance = new self();
        $instance->widgets = $widgets;
        $instance->title = $title;
        return $instance;
    }

    public function col($sm = 12, $md = 8, $xl = 8)
    {
        $this->col = ['sm' => $sm, 'md' => $md, 'xl' => $xl];

        return $this;
    }

    public function addWidget(array $widget)
    {
        $this->widgets[] = $widget;
        return $this;
    }


    public function render()
    {
        return view('widget::widget-group', [
            'widgets' => $this->widgets,
            'col' => $this->col,
            'title' => $this->title,
        ]);
    }
}
