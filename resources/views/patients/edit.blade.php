@extends('layouts.app')
@section('content')
<div id="page-wrapper" style="background: white">

    <div>
      {{ Form::model($patient,['route'=>['patients.update',$patient->patients_id],'method'=>'PATCH', 'files' => true]) }}
      @include('patients.form_master')
      {{ Form::close() }}
    </div>
</div>
@endsection