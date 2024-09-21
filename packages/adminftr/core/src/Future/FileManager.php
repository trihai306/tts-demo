<?php

namespace Adminftr\Core\Future;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class FileManager extends Component
{
    public function getFiles(string $folderName='')
    {
        $this->skipRender();
        $folders = Storage::disk('public')->directories();
        $files = Storage::disk('public')->files();
        return [
            'folders' => $folders,
            'files' => $files
        ];
    }

    public function createFolder($folderName)
    {
        $this->skipRender();
        Storage::disk('public')->makeDirectory($folderName);
    }

    public function render()
    {
        return view('future::future.file-manager');
    }
}
