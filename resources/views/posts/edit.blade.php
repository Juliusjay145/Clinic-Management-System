@extends('layouts.app')
@section('content')
<div id="page-wrapper" style="background: white">

    <div>
      {{ Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PATCH', 'files' => true]) }}
      @include('posts.form_master')
      {{ Form::close() }}
    </div>
</div>
@endsection