@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <!--  <div class="col-md-8">
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
        </div> -->
        <br><br>
        <div class="row">
            <div class="card-panel light-blue darken-4">
                <span class="white-text">Dashboard</span>
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
