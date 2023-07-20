@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Welcome to the INDEX page
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <ul>
                @foreach ($projects as $project)
                <li>
                    {{$project -> name}}  
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection