@extends('layouts.layout')

<style>
   /* body {
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
    }*/
    #calendar {
        max-width: 900px;
        margin: 0 auto;
    }
    #calendardiv
    {
        margin: 40px 10px;
    }
</style>

@section('content')

    <div id="calendardiv">
        <div id='calendar'>
        </div>
    </div>
@endsection

<!-- dynamic getting of events -->
