@extends('layouts.app')
@section('content')
<h6 style="margin-right:20px">
  <a href="{{route('patients.create')}}" class="btn btn-success btn-lg btn3d w3-right d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100" style="margin-right: 200px; height:35px">
    <h6 style="margin-top:-1%" >    
      <i class="fas fa-plus-square" > Add Patients</i>
    </h6>
  </a>
</h6>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Patient Check up Table</h1>

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
    <h6 class="m-0 font-weight-bold text-primary">Patients Table</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
    <tr>
      <th with="80px" scope="row">No</th>
      <th scope="col" >Doctor</th>
      <th scope="col">Patients Profile</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Actions</th>
    </tr>
    </thead>


      <tbody>
        <?php $no=1; ?>
        @foreach ($patients as $patient)
          <tr>
            <td>{{$no++}}</td>
            <td>{{ $patient->doctor->name }}</td>    
            
            <td><center><img style="width: auto; height: 50px; border-radius: 20%" src="data:image/jpeg;base64, {{ $patient->profilepic }}" /></center></td>
            <td>{{ $patient->firstname }}</td>
            <td>{{ $patient->lastname }}</td>
            
            <!-- <td>{{ $patient->contactnum }}</td> -->
            <td>
              <a class="btn btn-info btn-lg btn3d" style="width: 54px; height:30px" href="{{route('patients.show',$patient->patients_id)}}">
                <h6 style="margin-top:-10%">     
                  <i class="far fa-eye"></i>
                </h6>
              </a>
              <a class="btn btn-warning btn-lg btn3d" style="width: 54px; height:30px" href="{{route('patients.edit',$patient->patients_id)}}">
                <h6 style="margin-top:-10%">     
                  <i class="fas fa-edit"></i>
                </h6>
              </a>
                {!! Form::open(['method' => 'DELETE','route' => ['patients.destroy', $patient->patients_id],'style'=>'display:inline']) !!}
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