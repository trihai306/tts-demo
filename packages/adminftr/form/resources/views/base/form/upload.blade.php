@php
    $keyName = $name;
@endphp
<div x-data="{
    url: null,
    init() {
        const input = document.getElementById('{{ $name }}');
        const pond = FilePond.create(input, {
            allowReorder: true,
            imageCropAspectRatio: 1,
            maxFiles: {{ $maxfiles ?? 1 }},
            allowImageCrop: true,
            allowImagePreview: true,
            allowVideoPreview: true,
            server: {
                process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    if (file instanceof File) {
                        $wire.upload('{{ $isRelationship ? 'relations' : 'data' }}.{{$name }}', file, (response) => {
                            load(response);
                        }, (response) => {
                            error(response.error);
                        }, (event) => {
                            progress(event.lengthComputable, event.loaded, event.total);
                        });
                    } else {
                        load(file['name']);
                    }
                },
                revert: (uniqueFileId, load, error) => {

                    let data = $wire.get('{{ $isRelationship ? 'relations' : 'data' }}.{{$name }}');
                    if(Array.isArray(data)) {
                       for (let i = 0; i < data.length; i++) {
                        if (data[i]['{{ $filePath }}'].includes(uniqueFileId)) {
                            data.splice(i, 1);
                            break;
                        }
                    }
                    }
                    else {
                        data = null;
                    }
                    console.log(data)
                    $wire.set('{{ $isRelationship ? 'relations' : 'data' }}.{{ $name }}', data);
                       load();

                },
                load: (source, load, error, progress, abort, headers) => {
                    fetch(source)
                        .then(response => response.blob())
                        .then(blob => {
                            load(blob);
                        })
                        .catch(() => {
                            error('Không thể tải tệp.');
                        });
                }
            },
        });

        const existingFiles = $wire.get('{{ $isRelationship ? 'relations' : 'data' }}.{{ $name }}');
        if (Array.isArray(existingFiles)) {
            existingFiles.forEach(fileData => {
                const fileUrl = `{{ asset('storage') }}/` + fileData['{{ $filePath ?? $keyName }}'];
                pond.addFile(fileUrl).then(file => {
                    file.setMetadata('uploaded', true);
                });
            });
        } else if (existingFiles) {
            const fileUrl = `{{ asset('storage/') }}/` + existingFiles;
            pond.addFile(fileUrl).then(file => {
                file.setMetadata('uploaded', true);
            });
        }

        pond.on('addfile', (error, file) => {
            if (error) {
                console.error('FilePond error:', error);
            }
        });
    }
}" wire:ignore>
    <div class="row justify-content-between mb-2">
        <label for="{{ $name }}" class="form-label col-auto">{{ $label }}</label>
{{--        <a type="button" class="col-auto" data-bs-toggle="modal" data-bs-target="#file-manager">--}}
{{--            <i class="fa fa-folder-open"></i>--}}
{{--        </a>--}}
    </div>
    <input type="file"
           class="form-control"
           name="{{ $name }}"
           @if($acceptedFileTypes)
               accept="{{ $acceptedFileTypes }}"
           @endif
           id="{{ $name }}"
           multiple="{{ $multiple }}">
</div>
@error('data.' . $name)
<div class="invalid-feedback d-block">
    {{ $message }}
</div>
@enderror
