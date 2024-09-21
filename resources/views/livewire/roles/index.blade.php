<section class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-5 g-xl-9">
    <!--begin::Col-->
    @foreach ($roles as $role)
        <div class="col">
            <div class="card card-flush h-100 shadow-sm">
                <div class="card-header py-2 pt-3 px-3 border-bottom-0">
                    <div class="card-title">
                        <h5 class="text-capitalize mb-0">Total {{ $role->users()->count() }} users</h5>
                    </div>
                </div>
                <div class="card-body px-3 py-2 border-bottom-0 d-flex justify-content-between align-items-center">
                    <div class="fw-bold text-gray-600 text-capitalize">{{ $role->name }}</div>
                    @if ($role->users)
                        <ul class="list-unstyled d-flex role-avatar">
                            @foreach ($role->users as $index => $user)
                                <li><img data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $user->name }}"
                                        src="{{ !empty($user->avatar) ? Storage::url($user->avatar) : asset('static/icon/user-circle.svg') }}"
                                        alt="{{ $user->name }}"></li>
                                {{-- Méo hiểu dùng @break toàn format lệch ghét vãi --}}
                                @php
                                    if ($index >= 4) {
                                        break;
                                    }
                                @endphp
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="card-footer flex-wrap border-top-0 px-2 d-flex justify-content-end">
                    <a href="{{ route('admin.permissions.showRole', $role->id) }}" class="btn btn-ghost-primary btn-md"
                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="View">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler me-0 icons-tabler-outline icon-tabler-eye">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path
                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                        </svg>
                    </a>
                    <button type="button" class="btn btn-ghost-facebook btn-md"
                        @click="$dispatch('editRole', { id: {{ $role->id }} })" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler me-0 icons-tabler-outline icon-tabler-edit">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                            <path d="M16 5l3 3" />
                        </svg>
                    </button>
                    <button type="button" class="btn btn-ghost-danger btn-md"
                        onclick="confimDetele({{ $role->id }})" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler me-0 icons-tabler-outline icon-tabler-trash">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 7l16 0" />
                            <path d="M10 11l0 6" />
                            <path d="M14 11l0 6" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
    <!--end::Col-->
    <!--begin::Add new card-->
    <div class="ol-md-4">
        <!--begin::Card-->
        <div class="card shadow-sm h-100">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Button-->
                <button type="button" class="btn btn-outline-primary d-flex flex-column flex-center w-100 h-100"
                    onclick="showModal()">
                    <!--begin::Label-->
                    <svg style="width: 40px; height: 40px;" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                    </svg>
                    <div class="fw-bold fs-3 text-gray-600 text-hover-white text-sm">Add New Role</div>
                    <!--end::Label-->
                </button>
                <!--begin::Button-->
            </div>
            <!--begin::Card body-->
        </div>
        <!--begin::Card body-->
    </div>
    <!--begin::Add new card-->
</section>
