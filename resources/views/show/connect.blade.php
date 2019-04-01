@extends('layout.show')
@section('content')
    {{--<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">--}}
    {{--<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>--}}
    {{--<script type="text/javascript" src="js/jquery.media.js"></script>--}}
    {{--<script type="text/javascript">--}}
        {{--$(function() {--}}
            {{--$('a.media').media({width:800, height:600});--}}
        {{--});--}}
    {{--</script>--}}
        {{--<div class="panel panel-primary">--}}
            {{--<div class="panel-heading" align="center">--}}
                {{--<h2>预览pdf文件</h2>--}}
            {{--</div>--}}
            {{--<div class="panel-body">--}}
                {{--<a class="media" href="{{'http://118.89.245.83/cms_model/storage/app'.$data->pdf}}"></a>--}}
            {{--</div>--}}
        {{--</div>--}}

    <div class="main">
        <div class="article">
            <h3>{{$data->title}}</h3>
            <span>{{$data->date}}&nbsp;&nbsp;&nbsp;&nbsp;{{$data->department}}</span><br>
            @if(!empty($data->pic))
                <img src='{{'http://118.89.245.83/cms_model/storage/app'.$data->pic}}' style="width: 800px;">
            @else
            @endif
            <br>
            {{$data->content}}<br>
            @if(!empty($data->pdf))
                <div class="media" style="background-color: rgb(255,255,255);width: 860px;align-content: center;"></div>
                {{--<a class=\"media\" href='{{'http://118.89.245.83/cms_model/storage/app'.$data->pdf}}'></a>--}}
                <iframe  src="{{'http://118.89.245.83/cms_model/storage/app'.$data->pdf}}" style="border: medium none;" width="800" height="610">
                </iframe>
            @else
            @endif

            {{--<embed src="{{'http://118.89.245.83/cms_model/storage/app'.$data->pdf}}" />--}}
        </div>
    </div>

    @stop