@extends('layouts.app')
@section('content')
<div id="page-wrapper" style="background: white">

    <div>
      {{ Form::model($doctor,['route'=>['doctors.update',$doctor->doctors_id],'method'=>'PATCH', 'files' => true]) }}
      @include('doctors.form_master')
      {{ Form::close() }}
    </div>
</div>
@endsection