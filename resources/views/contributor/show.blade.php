@extends('layouts.site')

@section('content')
    <!-- PROJECT SHOW -->
    <!-- HEADER -->
    <h1 class="mt-10 px-10 text-5xl font-normal leading-normal text-center">{{$contributor->name}}</h1>

    <!-- CONTENT -->
    <div class="pb-16 lg:pb-40 border-b">
        <div class=" w-10/12 lg:w-1/2 mx-auto text-twill-grey-3 mt-8 lg:flex">
            <img class=" lg:w-4/12"
                 src="{{ $contributor->image('avatar', 'default',['w'=>1200, 'fit'=>null]) }}"
                 alt="{{$contributor->name}}"/>

            <div class="lg:w-1/2 lg:pl-8 mt-8 lg:mt-0 flex flex-col justify-between">
                @component('components.contributor.credits', compact('contributor'))
                @endcomponent
            </div>

        </div>

        <!-- HTML CONTENT -->
        <div class="w-10/12 lg:w-1/2 mt-12 mx-auto text-twill-grey-3 project_description">
            {!! $contributor->renderBlocks() !!}
        </div>
    </div>
@endsection

@push('additional_css')
    <style>
        .project_description p {
            margin-bottom: 1rem;
        }
    </style>
@endpush




