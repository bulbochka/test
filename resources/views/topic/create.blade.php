@extends('layouts.master')
@section('title', 'PageTitle')
@section('menu')
@parent
@endsection

@section('content')
    <div class="row">
        <div class="label label-info" style="display:inline-block; widht:100%;">
            {{$page}}
        </div>
    </div>

    <div class="row">
        {!!Form::model($topic, array('action'=>'TopicController@store'))!!}
        <div class='form-group'>
            {!!Form::label('topicnameform', 'Topic name')!!}
            {!!Form::text('topicnameform', '', array('class'=>'form-control'))!!}
        </div>
        <button class="btn btn-success" type="submit">Add Topic</button>
        {!!Form::close()!!}
    </div>
@endsection