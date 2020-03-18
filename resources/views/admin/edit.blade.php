@extends('layouts.superadminapp')
@section('content')
<div id="page-wrapper" style="background: white">

    <div>
      {{ Form::model($superadmin,['route'=>['admin.update',$superadmin->id],'method'=>'PATCH', 'files' => true]) }}
      @include('admin.form_master')
      {{ Form::close() }}
    </div>
</div>
@endsection