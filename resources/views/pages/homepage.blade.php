@extends('layouts.site')

@section('content')
    <h1 class="mt-10 px-10 text-5xl font-normal leading-normal text-center">Made with Twill</h1>
    <h2 class="mt-2 px-10 text-base font-normal text-twill-grey text-center">By AREA 17 — @opticalcortex</h2>

    <!-- PROJECTS LIST -->
    <div class="mt-12 flex flex-wrap border-t">

        @foreach($projects as $project)
            <div class="w-full lg:w-1/2 border-b border-r py-12">
                <div class="mx-auto w-3/4 flex flex-col justify-between">
                    <a href="/projects/{{$project->slug}}">
                        <img
                            src="{{$project->image('screengrab_desktop', 'default', ['w'=>900,'fit'=>null])}}"
                            alt="{{$project->title}}">

                        <h2 class="mt-5 text-base font-bold">
                            {{$project->title}}
                        </h2>

                        <span class="text-base">
                         {{$project->headline}}
                    </span>

                        <a class="mt-3 text-base hover:underline text-twill-purple"
                           href="{{$project->headline}}">{{$project->domain}}</a>
                    </a>
                </div>
            </div>
        @endforeach

    </div>
@endsection



