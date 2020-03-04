@extends('layouts.app')
@section('content')
<div id="page-wrapper" style="background: white; margin-top: 10px">

    <div>
      {{ Form::open(['route'=>'posts.store', 'method'=>'POST', 'files' => true]) }}
        @include('posts.form_master')
      {{ form::close() }}
    </div>

</div>
@endsection
