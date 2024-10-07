@extends('future::layouts.app-demo')

@section('content')
    <!--begin::Content-->
    <div class="container-fluid">
        <!--begin::Card-->
        @livewire($table)

        <!--end::Card-->
    </div>
    <!--end::Content-->
@endsection
