@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 100% !important;">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->
    <router-view></router-view>
    <!-- <detail-component :props="json_encode($projects)"></detail-component> -->
    <!-- @foreach( $projects as $project)
       {{ $project->id }} : {{ $project->title }} : {{ $project->description }}
    @endforeach -->
</div>
@endsection
