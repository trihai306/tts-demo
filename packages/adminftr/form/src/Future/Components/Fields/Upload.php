<?php

namespace Adminftr\Form\Future\Components\Fields;

use Adminftr\Form\Future\Components\Field;
use Adminftr\Form\Future\Components\UrlHelper;

class Upload extends Field
{
    // Determines if the field can be hidden
    public bool $canHide = false;

    // Maximum number of files allowed to be uploaded
    protected int $maxfiles = 5;
    // Path where the uploaded files will be stored
    protected string $path = '';
    // Accepted file types for upload, e.g., 'image/png, image/jpeg'
    protected string $acceptedFileTypes = '';
    // Name used to save the file
    protected string $namesave = '';
    // Disk to store files on, defaults to 'public'
    protected string $disk = 'public';
    // Determines if multiple files can be uploaded
    protected bool $multiple = false;
    // Determines if the field is related to another model (relationship)
    protected bool $isRelationship = false;
    // Name of the relationship, if applicable
    protected string $relationshipName = '';
    // Path to the file related to the relationship
    protected $filePath = '';

    // Set whether multiple files can be uploaded
    public function multiple(bool $multiple = true)
    {
        $this->multiple = $multiple;

        return $this;
    }

    // Get whether the field is a relationship field
    public function getRelationship()
    {
        return $this->isRelationship;
    }

    // Set the relationship details
    public function relationship(string $name, string $path, callable $modifyQueryUsing = null)
    {
        $this->relationshipName = $name;
        $this->filePath = $path;
        $this->modifyQueryUsing = $modifyQueryUsing;
        $this->isRelationship = true;
        return $this;
    }

    // Set the maximum number of files allowed
    public function maxFiles(int $maxfiles)
    {
        $this->maxfiles = $maxfiles;

        return $this;
    }

    // Set the storage path, file name, and disk
    public function storeAs($path, $name, $disk)
    {
        $this->path = $path;
        $this->namesave = $name;
        $this->disk = $disk;

        return $this;
    }

    // Set the accepted file types for the upload field
    public function accept(string $acceptedFileTypes)
    {
        $this->acceptedFileTypes = $acceptedFileTypes;

        return $this;
    }

    // Render the upload field
    public function render()
    {
        // Use lazy model binding if multiple files are allowed
        $wireModelDirective = $this->multiple ? 'wire:model.lazy' : 'wire:model';
        // If the field cannot be hidden, render the view
        if (!$this->canHide) {
            return view('form::base.form.upload', [
                'name' => $this->name,
                'multiple' => $this->multiple,
                'label' => $this->label,
                'wireModelDirective' => $wireModelDirective,
                'maxfiles' => $this->maxfiles,
                'acceptedFileTypes' => $this->acceptedFileTypes,
                'isRelationship' => $this->isRelationship,
                'relationshipName' => $this->relationshipName,
                'filePath' => $this->filePath,
            ]);
        }

        // Return an empty string if the field can be hidden
        return '';
    }

    // Getter methods for protected properties
    // Get the maximum number of files allowed
    public function getMaxFiles(): int
    {
        return $this->maxfiles;
    }

    // Get the storage path
    public function getPath(): string
    {
        return $this->path;
    }

    // Get the accepted file types
    public function getAcceptedFileTypes(): string
    {
        return $this->acceptedFileTypes;
    }

    // Get the name used to save the file
    public function getNameSave(): string
    {
        return $this->namesave;
    }

    // Get the disk used for storage
    public function getDisk(): string
    {
        return $this->disk;
    }

    // Get whether multiple files can be uploaded
    public function getMultiple(): bool
    {
        return $this->multiple;
    }

    // Get whether the field is a relationship field
    public function getIsRelationship(): bool
    {
        return $this->isRelationship;
    }

    // Get the relationship name
    public function getRelationshipName(): string
    {
        return $this->relationshipName;
    }

    // Get the file path for the relationship
    public function getFilePath()
    {
        return $this->filePath;
    }
}
