<div x-data="filemanager" class="card">
    <div class="card-body">
        <div class="row justify-content-between">
            <div class="col-auto">
                <form class="d-flex" role="search">
                    <div class="input-icon mb-3 w-100">
                        <input type="text" x-model="search" class="form-control" placeholder="Search…">
                        <span class="input-icon-addon">
                            <template x-if="loading">
                                <!-- Loading icon -->
                                <div class="spinner-border spinner-border-sm text-secondary" role="status"></div>
                            </template>
                            <template x-if="!loading">
                                <!-- Search icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                    <circle cx="10" cy="10" r="7"></circle>
                                    <line x1="21" y1="21" x2="15" y2="15"></line>
                                </svg>
                            </template>
                        </span>
                    </div>
                </form>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    {{ __('Upload') }}
                </a>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col">
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="icon icon-tabler icons-tabler-outline icon-tabler-adjustments-horizontal">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                            <path d="M4 6l8 0"/>
                            <path d="M16 6l4 0"/>
                            <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                            <path d="M4 12l2 0"/>
                            <path d="M10 12l10 0"/>
                            <path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                            <path d="M4 18l11 0"/>
                            <path d="M19 18l1 0"/>
                        </svg>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">{{ __('Move to Trash') }}</a></li>
                        <li><a class="dropdown-item" href="#">{{ __('Permanently Delete') }}</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        {{ __('New Folder') }}
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                            <line x1="3" y1="3" x2="21" y2="21"></line>
                            <line x1="21" y1="3" x2="3" y2="21"></line>
                        </svg>
                        {{ __('New File') }}
                    </button>
                </div>
            </div>
            <div class="col-auto">
                <div class="btn-group">
                    <button type="button" class="btn active text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="icon icon-tabler icons-tabler-outline icon-tabler-grip-horizontal">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                            <path d="M5 15m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                            <path d="M12 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                            <path d="M12 15m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                            <path d="M19 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                            <path d="M19 15m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                        </svg>
                    </button>
                    <button type="button" class="btn text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="icon icon-tabler icons-tabler-outline icon-tabler-list">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M9 6l11 0"/>
                            <path d="M9 12l11 0"/>
                            <path d="M9 18l11 0"/>
                            <path d="M5 6l0 .01"/>
                            <path d="M5 12l0 .01"/>
                            <path d="M5 18l0 .01"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Hiển thị danh sách thư mục và tệp -->
        <div class="row mt-5">
            <template x-for="item in folders">
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 mb-3">
                    <div class="card folder-card" style="cursor: pointer;">
                        <div class="card-body text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-folder">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                            </svg>
                            <h3 class="card-text text-truncate mb-1" x-text="item"></h3>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
    <!-- Modal Upload -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true"
         x-data="fileUpload">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('Upload Files') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form x-ref="uploadForm">
                        <div class="mb-3">
                            <label for="fileInput" class="form-label">{{ __('Choose files to upload') }}</label>
                            <input class="form-control" type="file" id="fileInput" x-on:change="handleFileSelection"
                                   multiple>
                        </div>
                    </form>

                    <!-- Danh sách tệp được chọn -->
                    <div class="mt-3" x-show="files.length > 0">
                        <h5>{{ __('Selected Files') }}</h5>
                        <ul class="list-group">
                            <template x-for="(file, index) in files" :key="index">
                                <li class="list-group-item d-flex align-items-center">
                                    <!-- Hiển thị ảnh thu nhỏ nếu là hình ảnh -->
                                    <template x-if="file.isImage">
                                        <img :src="file.url" alt=""
                                             style="width: 40px; height: 40px; object-fit: cover; border-radius: 4px;">
                                    </template>
                                    <!-- Hiển thị biểu tượng nếu không phải hình ảnh -->
                                    <template x-if="!file.isImage">
                                        <i :class="getFileIconClass(file)" style="font-size: 24px;"></i>
                                    </template>
                                    <!-- Thông tin tệp -->
                                    <div class="ms-2">
                                        <div><strong x-text="file.name"></strong></div>
                                        <div class="text-muted" x-text="formatFileSize(file.size)"></div>
                                    </div>
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" class="btn btn-primary" @click="uploadFiles">{{ __('Upload') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>

@script
<script>
    Alpine.data('filemanager', () => ({
        search: '',
        loading: false,
        files: [],
        folders: [],
        folder:'',
        init() {
            this.$watch('search', () => {
                // Xử lý tìm kiếm nếu cần
            });
            this.getFileManager();
        },
        getFileManager() {
            $wire.call('getFiles').then(filePaths => {
                this.files = filePaths['files'];
                this.folders = filePaths['folders'];
            })
        },
        buildFileTree(filePaths) {
            let tree = [];
            filePaths.forEach(path => {
                const parts = path.split('/');
                let currentLevel = tree;
                parts.forEach((part, index) => {
                    let existingPath = currentLevel.find(item => item.name === part);
                    if (!existingPath) {

                        existingPath = {
                            name:part,
                            url: path,
                            type: index === parts.length - 1 ? 'file' : 'folder',
                            children: []
                        };
                        currentLevel.push(existingPath);
                    }

                    currentLevel = existingPath.children;
                });
            });

            return tree;
        },
        get filteredFiles() {
            if (this.search === '') {
                return this.files;
            } else {
                // Lọc danh sách tệp dựa trên từ khóa tìm kiếm
                return this.filterFiles(this.files, this.search.toLowerCase());
            }
        },
    }));

    Alpine.data('fileUpload', () => ({
        files: [],
        handleFileSelection(event) {
            this.files = [];
            for (let i = 0; i < event.target.files.length; i++) {
                let file = event.target.files[i];
                let isImage = file.type.startsWith('image/');
                let fileItem = {
                    file: file,
                    name: file.name,
                    size: file.size,
                    status: 'Chưa upload',
                    progress: 0,
                    isImage: isImage,
                    url: ''
                };
                if (isImage) {
                    fileItem.url = URL.createObjectURL(file);
                }
                this.files.push(fileItem);
            }
        },
        formatFileSize(size) {
            let i = Math.floor(Math.log(size) / Math.log(1024));
            let sizes = ['B', 'KB', 'MB', 'GB', 'TB'];
            return (size / Math.pow(1024, i)).toFixed(2) + ' ' + sizes[i];
        },
        getFileIconClass(file) {
            const extension = file.name.split('.').pop().toLowerCase();
            const iconMap = {
                'default': 'bi bi-file-earmark'
            };
            return iconMap[extension] || iconMap['default'];
        },
        uploadFiles() {
            if (this.files.length === 0) {
                alert('Vui lòng chọn tệp để upload.');
                return;
            }

            this.files.forEach((fileItem, index) => {
                this.uploadFile(fileItem, index);
            });
        },
        uploadFile(fileItem, index) {
            fileItem.status = 'Đang upload';

            let formData = new FormData();
            formData.append('file', fileItem.file);

            let xhr = new XMLHttpRequest();
            xhr.open('POST', '/upload'); // Thay '/upload' bằng đường dẫn API của bạn

            xhr.upload.addEventListener('progress', (event) => {
                if (event.lengthComputable) {
                    let percentComplete = Math.round((event.loaded / event.total) * 100);
                    this.files[index].progress = percentComplete;
                }
            });

            xhr.addEventListener('load', () => {
                if (xhr.status === 200) {
                    this.files[index].status = 'Hoàn thành';
                } else {
                    this.files[index].status = 'Lỗi';
                }
                // Hủy URL đối tượng sau khi upload xong để giải phóng bộ nhớ
                if (this.files[index].isImage) {
                    URL.revokeObjectURL(this.files[index].url);
                }
            });

            xhr.addEventListener('error', () => {
                this.files[index].status = 'Lỗi';
            });

            xhr.send(formData);
        }
    }));
</script>
@endscript

