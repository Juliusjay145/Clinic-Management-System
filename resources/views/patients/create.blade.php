@extends('layouts.app')
@section('content')
<div id="page-wrapper" style="background: white; margin-top: 10px">

    <div>
      {{ Form::open(['route'=>'patients.store', 'method'=>'POST', 'files' => true]) }}
        @include('patients.form_master')
      {{ form::close() }}
    </div>

</div>
@endsection
