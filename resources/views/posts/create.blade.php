@extends('layouts.app')
@section('content')
<div id="page-wrapper" class="w3-panel w3-card-4" style="background: white; margin-top: 10px">

    <div>
      {{ Form::open(['route'=>'posts.store', 'method'=>'POST', 'files' => true]) }}
        @include('posts.form_master')
      {{ form::close() }}
    </div>

</div>
@endsection
