@extends('layouts.site')

@section('content')
    <h1 class="mt-10 px-10 text-5xl font-normal leading-normal text-center">Contributors</h1>
    <!-- PROJECTS LIST -->
    <div class="w-10/12  mt-12 mx-auto flex flex-wrap justify-between">
    @foreach($contributors as $contributor)

        <!-- HEADER -->
            <div class="w-4/12 p-2 ">

                <a href="/contributors/{{$contributor->slug}}">
                    <img
                        src="{{$contributor->image('avatar', 'default', ['w'=>900,'fit'=>null])}}"
                        alt="{{$contributor->name}}">

                    <h2 class="mt-5 text-base lg:text-2xl font-bold">{{$contributor->name}}</h2>

                    <span class="text-sm lg:text-base"> <strong>Skills</strong> &mdash; {!! $contributor->present()->tagsAsString !!}</span>
                </a>


            </div>
        @endforeach
    </div>

@endsection




