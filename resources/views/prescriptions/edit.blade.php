@extends('layouts.app')
@section('content')
<div id="page-wrapper" style="background: white; border-radius:10px" class="w3-panel w3-card-4">

    <div>
      {{ Form::model($prescription,['route'=>['prescriptions.update',$prescription->prescription_id],'method'=>'PATCH', 'files' => true]) }}
      @include('prescriptions.form_master')
      {{ Form::close() }}
    </div>
</div>
@endsection