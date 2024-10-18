@extends('future::layouts.app-demo')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Profile</h2>
                    <p class="mb-0 text-title-gray">Thông tin tài khoản</p>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><i class="iconly-Home icli svg-color"></i></li>
                        <li class="breadcrumb-item">profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        @livewire('future::admin.profile')

    </div>
@endsection
