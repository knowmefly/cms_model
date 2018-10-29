@extends('layout.show')
@section('content')

    <div class="main">
        <div class="article">
            <h3>{{$data->title}}</h3>
            <span>{{$data->date}}&nbsp;&nbsp;&nbsp;&nbsp;{{$data->department}}</span><br>
            <img src='{{'http://118.89.245.83/cms_model/public'.$data->pic}}'>
            <br>
            {{$data->content}}<br>
            <a class=\"media\" href='{{'http://118.89.245.83/cms_model/public'.$data->pdf}}'></a>

        </div>
    </div>

    @stop