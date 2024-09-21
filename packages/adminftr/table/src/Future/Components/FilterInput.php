<?php

namespace Adminftr\Table\Future\Components;

use Exception;
use Illuminate\Support\HtmlString;

/**
 * Class FilterInput
 *
 * Provides a way to create various types of input filters for a table.
 */
class FilterInput
{
    /**
     * The name of the filter.
     *
     * @var string
     */
    protected $name;

    /**
     * The type of the input filter.
     *
     * @var string
     */
    protected $type;

    /**
     * Options for select, radio, and checkbox inputs.
     *
     * @var array
     */
    protected $options;

    /**
     * Constructor to initialize the filter input.
     *
     * @param string $name
     * @param string $type
     * @param array $options
     */
    public function __construct(string $name, string $type = 'text', array $options = [])
    {
        $this->name = $name;
        $this->type = $type;
        $this->options = $options;
    }

    /**
     * Static method to create a new instance of FilterInput.
     *
     * @param string $name
     * @param string $type
     * @param array $options
     * @return self
     */
    public static function make(string $name, string $type = 'text', array $options = []): self
    {
        return new static($name, $type, $options);
    }

    /**
     * Render the input filter based on its type.
     *
     * @return HtmlString
     * @throws Exception
     */
    public function render(): HtmlString
    {
        switch ($this->type) {
            case 'text':
                return $this->renderTextInput();
            case 'select':
                return $this->renderSelectInput();
            case 'checkbox':
                return $this->renderCheckboxInput();
            case 'radio':
                return $this->renderRadioInput();
            case 'date':
                return $this->renderDateInput();
            case 'number':
                return $this->renderNumberInput();
            case 'email':
                return $this->renderEmailInput();
            default:
                throw new Exception("Unsupported input type: {$this->type}");
        }
    }

    /**
     * Render a text input filter.
     *
     * @return HtmlString
     */
    protected function renderTextInput(): HtmlString
    {
        return new HtmlString("<label class='form-label fw-semibold'>{$this->name}</label><input type='text' class='form-control' wire:model='filters.{$this->name}' />");
    }

    /**
     * Render a select input filter.
     *
     * @return HtmlString
     */
    protected function renderSelectInput(): HtmlString
    {
        $optionsHtml = '';
        foreach ($this->options as $value => $label) {
            $optionsHtml .= "<option value='{$value}'>{$label}</option>";
        }

        return new HtmlString("
            <label class='form-label fw-semibold'>{$this->name}</label>
            <select class='form-select' wire:model='filters.{$this->name}'>
                {$optionsHtml}
            </select>
        ");
    }

    /**
     * Render a checkbox input filter.
     *
     * @return HtmlString
     */
    protected function renderCheckboxInput(): HtmlString
    {
        return new HtmlString("<label class='form-label fw-semibold'>{$this->name}</label><input type='checkbox' class='form-check-input' wire:model='filters.{$this->name}' />");
    }

    /**
     * Render a radio input filter.
     *
     * @return HtmlString
     */
    protected function renderRadioInput(): HtmlString
    {
        $optionsHtml = '';
        foreach ($this->options as $value => $label) {
            $optionsHtml .= "<div class='form-check'><input class='form-check-input' type='radio' value='{$value}' wire:model='filters.{$this->name}' /><label class='form-check-label'>{$label}</label></div>";
        }

        return new HtmlString("<label class='form-label fw-semibold'>{$this->name}</label>".$optionsHtml);
    }

    /**
     * Render a date input filter.
     *
     * @return HtmlString
     */
    protected function renderDateInput(): HtmlString
    {
        return new HtmlString("<label class='form-label fw-semibold'>{$this->name}</label><input type='date' class='form-control' wire:model='filters.{$this->name}' />");
    }

    /**
     * Render a number input filter.
     *
     * @return HtmlString
     */
    protected function renderNumberInput(): HtmlString
    {
        return new HtmlString("<label class='form-label fw-semibold'>{$this->name}</label><input type='number' class='form-control' wire:model='filters.{$this->name}' />");
    }

    /**
     * Render an email input filter.
     *
     * @return HtmlString
     */
    protected function renderEmailInput(): HtmlString
    {
        return new HtmlString("<label class='form-label fw-semibold'>{$this->name}</label><input type='email' class='form-control' wire:model='filters.{$this->name}' />");
    }
}
