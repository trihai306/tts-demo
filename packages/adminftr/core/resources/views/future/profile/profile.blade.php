<div class="row g-0">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header card-no-border pb-0">
                <h3 class="card-title mb-0">My Profile</h3>
                <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i
                            class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                                                data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                </div>
            </div>
            <div class="card-body">
                    <div class="row mb-4">
                        <div class="profile-title">
                            <div class="d-flex gap-3">
                                <img class="img-70 rounded-circle" alt="Profile Picture"
                                     src="{{ asset(Auth::user()->avatar ?'storage/'. Auth::user()->avatar: 'admiro/assets/images/user/7.jpg') }}">
                                <div class="flex-grow-1">
                                    <h3 class="mb-1">{{ Auth::user()->name }}</h3>
                                    <p>{{ Auth::user()->role }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <form wire:submit.prevent="updatePassword">
                        <div class="mb-3">
                            <label class="form-label">Current Password</label>
                            <input class="form-control" type="password" wire:model.defer="currentPassword">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <input class="form-control" type="password" wire:model.defer="newPassword">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm New Password</label>
                            <input class="form-control" type="password" wire:model.defer="confirmNewPassword">
                        </div>
                        <div class="form-footer">
                            <button class="btn btn-primary btn-block" type="submit">Save</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
