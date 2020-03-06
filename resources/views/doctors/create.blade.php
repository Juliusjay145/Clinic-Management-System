@extends('layouts.app')
@section('content')
<div id="page-wrapper" style="background: white; margin-top: 10px">

    <div>
      {{ Form::open(['route'=>'doctors.store', 'method'=>'DOCTOR', 'files' => true]) }}
        @include('doctors.form_master')
      {{ form::close() }}
    </div>

</div>
@endsection
