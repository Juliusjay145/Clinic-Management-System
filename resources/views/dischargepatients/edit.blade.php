@extends('layouts.app')
@section('content')
<div id="page-wrapper" style="background: white; border-radius:10px" class="w3-panel w3-card-4">

    <div>
      {{ Form::model($dischargepatient,['route'=>['dischargepatients.update',$dischargepatient->discharge_id],'method'=>'PATCH', 'files' => true]) }}
      @include('dischargepatients.form_master')
      {{ Form::close() }}
    </div>
</div>
@endsection