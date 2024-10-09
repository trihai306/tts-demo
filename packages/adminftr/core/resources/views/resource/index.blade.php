@extends('future::layouts.app-demo')

@section('content')
    <!--begin::Content-->
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>{{$title ?? 'Table'}}</h2>
                    @if($description)
                        <p class="mb-0 text-title-gray">{{$description}}</p>
                    @endif
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin"><i class="iconly-Home icli svg-color"></i></a></li>
                        @foreach(request()->segments() as $key => $segment)
                            @if($segment !== 'admin')
                                @if($key + 1 < count(request()->segments()))
                                    <li class="breadcrumb-item">
                                        <a href="{{ url(implode('/', array_slice(request()->segments(), 0, $key + 1))) }}">
                                            {{ ucfirst($segment) }}
                                        </a>
                                    </li>
                                @else
                                    <li class="breadcrumb-item active">{{ ucfirst($segment) }}</li>
                                @endif
                            @endif
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!--begin::Card-->
        @livewire($table)

        <!--end::Card-->
    </div>
    <!--end::Content-->
@endsection
