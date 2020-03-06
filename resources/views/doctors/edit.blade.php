@extends('layouts.app')
@section('content')
<div id="page-wrapper" style="background: white">

    <div>
      {{ Form::model($doctors,['route'=>['doctors.update',$doctors->id],'method'=>'PATCH', 'files' => true]) }}
      @include('doctors.form_master')
      {{ Form::close() }}
    </div>
</div>
@endsection
