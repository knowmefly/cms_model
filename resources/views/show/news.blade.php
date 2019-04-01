@extends('layout.show')
@section('content')
    <div>
        <div >
            <ul class="rec-list">
                @foreach($data as $inputs)
                    <li><a href='look?table=recent_news&id={{$inputs->id}}'>{{$inputs->title}}<span class='list-time'>{{$inputs->date}}</span></a></li>
                @endforeach
            </ul>
        </div>
    </div>
@stop