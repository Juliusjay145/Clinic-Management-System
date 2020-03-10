@extends('layouts.app')
@section('content')
 <div id="page-wrapper" style="background: white;">
  <div class="row">
  <div class="col-sm-12">
    <div class="full-right">
      <h2 style="margin-left: 20px">Over All Patients</h2>
    </div>
  </div>
  </div>

  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
<center>
<div style="overflow-x:auto;">
  <table class="table">
     <thead class="thead-dark">
    <tr>
      <th with="80px" scope="row">No</th>
      <th scope="col">Lastname</th>
      <th scope="col">Firstname</th>
      <th scope="col">Phone No.</th>
      <th scope="col">Age</th>
      <th scope="col">Address</th>
      <th scope="col">State</th>
      <th scope="col">Doctors Username</th>
      <th scope="col">Doctors Password</th>

      <!-- <th>Contact Number</th> -->
      <th with="140px" class="text-center">
        <a href="{{route('doctors.create')}}" class="button green" style=" margin-bottom: 1px">
          <i class="fas fa-plus-square" style="width: 90px;"> Add Patient</i>
        </a>
      </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($doctors as $doctor)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $doctor->lastname }}</td>
        <td>{{ $doctor->firstname }}</td>
        <td>{{ $doctor->phone_no }}</td>
        <td>{{ $doctor->age }}</td>
        <td>{{ $doctor->address }}</td>
        <td>{{ $doctor->state }}</td>
        <td>{{ $doctor->docs_username }}</td>
        <td>{{ $doctor->docs_password }}</td>
        <td>
          <a class="button teal" style="width: 100px" href="{{route('doctors.show',$doctor->doctors_id)}}">
              <i class="far fa-eye"> View</i>
          </a>
          <a class="button rss" style="width: 100px;" href="{{route('doctors.edit',$doctor->doctors_id)}}">
              <i class="fas fa-edit"> Edit</i>
          </a>
            {!! Form::open(['method' => 'DELETE','route' => ['doctors.destroy', $doctor->doctors_id],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline; width: 100px;" class="button btn dsgnmoo">
                <i class="fas fa-trash" style="font-size: 13px"> Delete</i>
              </button> 
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </thead>
  </table>
  </div>
</div>
</center>
</div>
@endsection