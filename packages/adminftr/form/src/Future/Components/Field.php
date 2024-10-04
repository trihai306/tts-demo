<?php

namespace Adminftr\Form\Future\Components;

class Field
{
    public string $name;
    public string $label = '';
    protected bool $isRequired = false;
    protected string $classes = '';
    protected array $StyleAttributes = [];
    protected string $rule = '';
    protected mixed $defaultValue = null;
    protected bool $reactive = false;
    protected array $messages = [];
    protected string $helpText = '';
    protected bool $canHide = false;

    protected array $col = [];

    protected string $placeholder = '';

    protected ?string $url;

    protected $afterStateUpdated = null;
    protected $beforeSave = null;

    protected string $relationshipName;
    protected $modifyQueryUsing;
    protected $rules;

    public function __construct(string $name,string $label, ?string $url = null)
    {
        $this->name = trim($name);
        $this->label = trim($label);
        $this->url = $url;
    }

    public function beforeSave(callable $beforeSave)
    {
        $this->beforeSave = $beforeSave;

        return $this;
    }

    public function isRequired(): bool
    {
        return $this->isRequired;
    }

    public function getClasses(): string
    {
        return $this->classes;
    }

    public function getStyleAttributes(): array
    {
        return $this->StyleAttributes;
    }

    public function getRule()
    {
        return $this->rule;
    }

    public function isReactive(): bool
    {
        return $this->reactive;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function canHide(): bool
    {
        return $this->canHide;
    }

    public function getCol(): array
    {
        return $this->col;
    }

    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getAfterStateUpdated()
    {
        return $this->afterStateUpdated;
    }

    public function getBeforeSave()
    {
        return $this->beforeSave;
    }

    public function getRelationshipName(): ?string
    {
        return $this->relationshipName ?? null;
    }

    public function getModifyQueryUsing(): string
    {
        return $this->modifyQueryUsing;
    }

    public static function make(string $name,string $label=''): self
    {
        return new static(trim($name),trim($label));
    }

    public function getRelationship()
    {
        return false;
    }

    public function required(): self
    {
        $this->isRequired = true;

        return $this;
    }

    public function classes(string $classes): self
    {
        $this->classes = $classes;

        return $this;
    }

    public function addAttribute(string $name, string $value): self
    {
        $this->StyleAttributes[$name] = $value;

        return $this;
    }

    public function defaultValue(mixed $value): self
    {
        $this->defaultValue = $value;

        return $this;
    }

    public function label(string $label): self
    {
        $this->label = trim($label);

        return $this;
    }

    public function col(int $sm=12, int $md=12, int $lg=12): self
    {
        $this->col = [
            'sm' => $sm,
            'md' => $md,
            'lg' => $lg,
        ];
        return $this;
    }

    public function helpText(string $helpText): self
    {
        $this->helpText = $helpText;

        return $this;
    }

    public function getAttributes(): string
    {
        $StyleAttributes = '';
        foreach ($this->StyleAttributes as $name => $value) {
            $StyleAttributes .= " {$name}=\"{$value}\"";
        }

        return $StyleAttributes;
    }

    public function hide(callable $callback): self
    {
        if ($callback()) {
            $this->canHide = true;
        }

        return $this;
    }

    public function canUpdate($hide)
    {
        $currentRouteName = UrlHelper::getUrl();
        if (str_contains($currentRouteName, 'edit')) {
            $this->canHide = ! $hide;
        }

        return $this;
    }

    public function canStore($hide)
    {
        $currentRouteName = UrlHelper::getUrl();
        if (str_contains($currentRouteName, 'create')) {
            $this->canHide = ! $hide;
        }

        return $this;
    }

    public function setUrl(string $url)
    {
        $this->url = $url;

        return $this;
    }

    public function getRules()
    {
        return $this->rules;
    }

    public function getDefaultValue(): mixed
    {
        return $this->defaultValue;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getHelpText(): string
    {
        return $this->helpText;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function placeholder(string $placeholder): self
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function reactive()
    {
        $this->reactive = true;

        return $this;
    }

    public function afterStateUpdated(callable $callback)
    {
        $this->afterStateUpdated = $callback;

        return $this;
    }

    public function rules(string $rule = ''): self
    {
        $this->rule = $rule;

        return $this;
    }

    public function messages(array $messages): self
    {
        $this->messages = $messages;

        return $this;
    }
}
