@extends('layouts.app')
@section('content')
<h6 style="margin-right:20px">
  <a href="{{route('prescriptions.create')}}" class="btn btn-success btn-lg btn3d w3-right d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100" style="margin-right: 200px; height:35px">
    <h6 style="margin-top:-1%" >    
      <i class="fas fa-plus-square" > Add Prescription Patients</i>
    </h6>
  </a>
</h6>


 <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Patient Prescription Table</h1>


  <p class="mb-4">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
  </p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Discharge Patients Table</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
      <tr>
        <th with="80px" scope="row">No</th>
        <th scope="col">Patients Profile</th>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">prescriptions</th>
        <!-- <th scope="col">Prescription looks like</th> -->
        <th scope="col">usage</th>
        <!-- <th scope="col">quantity</th> -->
        <!-- <th>Contact Number</th> -->
        <th scope="col">
          Actions
        </th>
      </tr>
    </thead>

    <tbody>

      <?php $no=1; ?>
      @foreach ($prescriptions as $prescription)
        <tr>
          <td>{{$no++}}</td>
          <td><center><img style="width: auto; height: 50px; border-radius: 20%"" src="data:image/jpeg;base64, {{ $prescription->patient->profilepic }}" /></center></td>   
          <td>{{ $prescription->patient->firstname }}</td>
          <td>{{ $prescription->patient->lastname }}</td>
          <td>{{ $prescription->prescriptions }}</td>
          <!-- <td><img style="width: auto; height: 50px; border-radius: 20%"" src="data:image/jpeg;base64, {{ $prescription->profilepic }}" /></td> -->
          <td>{{ $prescription->usage }}</td>
          <!-- <td>{{ $prescription->quantity }}</td> -->
          <td>
            <a class="btn btn-info btn-lg btn3d" style="width: 54px; height:30px" href="{{route('prescriptions.show',$prescription->prescription_id)}}">
              <h6 style="margin-top:-10%">     
                <i class="far fa-eye"></i>
              </h6>
            </a>
            <a class="btn btn-warning btn-lg btn3d" style="width: 54px; height:30px" href="{{route('prescriptions.edit', $prescription->prescription_id)}}">
              <h6 style="margin-top:-10%">     
                <i class="fas fa-edit"></i>
              </h6>
            </a>
              {!! Form::open(['method' => 'DELETE','route' => ['prescriptions.destroy', $prescription->prescription_id],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline; width: 54px; height:30px" class="btn btn-danger btn-lg btn3d">
                <h6 style="margin-top:-10%">  
                  <i class="fas fa-trash" style="font-size: 13px; margin-top:-10%"></i>
                </h6>  
                </button>
              {!! Form::close() !!}
          </td>
        </tr>
      @endforeach
          
      </tbody>
      </table>
    </div>
  </div>
</div>

</div>
@endsection