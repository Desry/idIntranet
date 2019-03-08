@extends('layouts.admin-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <br><br>
        <div class="row">
            <div class="card-panel light-blue darken-4">
                <span class="white-text">Dashboard | Administrator</span>
            </div>

            <div class="card-panel">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <span class="black-text">You are logged in!</span>
            </div>
        </div>
    </div>
</div>
@endsection
