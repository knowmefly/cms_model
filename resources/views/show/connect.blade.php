@extends('layout.show')
@section('content')

    <div class="main">
        <div class="article">
            <h3>{{$data->title}}</h3>
            <span>{{$data->date}}&nbsp;&nbsp;&nbsp;&nbsp;{{$data->department}}</span><br>
            <img src='{{$data->pic}}'>
            <br>
            {{$data->content}}<br>
            <a class=\"media\" href='{{$data->pdf}}'></a>

        </div>
    </div>
    @stop