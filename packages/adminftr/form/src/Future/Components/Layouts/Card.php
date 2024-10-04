<?php

namespace Adminftr\Form\Future\Components\Layouts;

class Card
{
    // Properties of the Card class
    protected $canHide = false; // Whether the card can be hidden
    protected $title; // Title of the card
    protected $fields = []; // Fields contained within the card
    protected $classes = ''; // CSS classes for the card
    protected $headerClasses = ''; // CSS classes for the header
    protected $bodyClasses = ''; // CSS classes for the body
    protected $footer; // Footer content of the card
    protected $attributes = []; // Additional HTML attributes for the card
    protected $url; // URL associated with the card
    protected $ribbon; // Ribbon icon or content for the card
    protected $subtitle; // Subtitle of the card
    protected $subTitleClasses; // CSS classes for the subtitle

    // Static factory method to create a new instance of the Card class
    public static function make(?string $title = null)
    {
        $instance = new static;
        $instance->title = $title;

        return $instance;
    }

    // Set CSS classes for the card
    public function classes(string $classes)
    {
        $this->classes = $classes;

        return $this;
    }

    // Set CSS classes for the header
    public function headerClasses(string $classes)
    {
        $this->headerClasses = $classes;

        return $this;
    }

    // Set CSS classes for the body
    public function bodyClasses(string $classes)
    {
        $this->bodyClasses = $classes;

        return $this;
    }

    // Set footer content for the card
    public function footer(string $footer)
    {
        $this->footer = $footer;

        return $this;
    }

    // Get the fields of the card
    public function getFields()
    {
        return $this->fields;
    }

    // Add an attribute to the card
    public function addAttribute(string $name, string $value)
    {
        $this->attributes[$name] = $value;

        return $this;
    }

    // Set the schema for the card by adding multiple fields
    public function schema(array $rows)
    {
        foreach ($rows as $row) {
            $this->addField($row); // Add each row as a field
        }

        return $this;
    }

    // Add a field to the card
    public function addField($field)
    {
        $this->fields[] = $field;

        return $this;
    }

    // Set the URL for the card
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    // Set a ribbon icon or content for the card
    public function ribbon($icon)
    {
        $this->ribbon = $icon;
    }

    // Set the subtitle and optional CSS classes for the subtitle
    public function subTitle(string $subtitle, string $classes = '')
    {
        $this->subtitle = $subtitle;
        $this->subTitleClasses = $classes;
    }

    // Get whether the card can be hidden
    public function getCanHide()
    {
        return $this->canHide;
    }

    // Get the title of the card
    public function getTitle()
    {
        return $this->title;
    }

    // Get the CSS classes for the card
    public function getClasses()
    {
        return $this->classes;
    }

    // Get the CSS classes for the header
    public function getHeaderClasses()
    {
        return $this->headerClasses;
    }

    // Get the CSS classes for the body
    public function getBodyClasses()
    {
        return $this->bodyClasses;
    }

    // Get the footer content of the card
    public function getFooter()
    {
        return $this->footer;
    }

    // Get the additional attributes of the card
    public function getAttributes()
    {
        return $this->attributes;
    }

    // Get the URL associated with the card
    public function getUrl()
    {
        return $this->url;
    }

    // Get the ribbon content of the card
    public function getRibbon()
    {
        return $this->ribbon;
    }
    public function canHide(): bool
    {
        return $this->canHide;
    }

    // Get the subtitle of the card
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    // Get the CSS classes for the subtitle
    public function getSubTitleClasses()
    {
        return $this->subTitleClasses;
    }

    // Render the card view with all the properties
    public function render()
    {
        return view('form::layouts.card', [
            'title' => $this->title,
            'fields' => $this->fields,
            'classes' => $this->classes,
            'headerClasses' => $this->headerClasses,
            'bodyClasses' => $this->bodyClasses,
            'footer' => $this->footer,
            'attributes' => $this->attributes,
            'url' => $this->url,
            'subtitle' => $this->subtitle,
            'subTitleClasses' => $this->subTitleClasses,
            'ribbon' => $this->ribbon,
        ])->render();
    }
}
