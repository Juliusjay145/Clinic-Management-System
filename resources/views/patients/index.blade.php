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
      <th scope="col">Doctor</th>
      <th scope="col">Symptoms</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Profile Picture</th>
      <th scope="col">Gender</th>
      <th scope="col">Blood Type</th>
      <th scope="col">Birthday</th>
      <th scope="col">Age</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
      <!-- <th>Contact Number</th> -->
      <th with="140px" class="text-center">
        <a href="{{route('patients.create')}}" class="button green" style=" margin-bottom: 1px">
          <i class="fas fa-plus-square" style="width: 90px;"> Add Patient</i>
        </a>
      </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($patients as $patient)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $patient->doc_id }}</td>
        <td>{{ $patient->symptoms }}</td>
        <td>{{ $patient->firstname }}</td>
        <td>{{ $patient->lastname }}</td>
        <td><img style="width: auto; height: 100px;" src="data:image/jpeg;base64, {{ $patient->profilepic }}" /></td>
        <td>{{ $patient->gender }}</td>
        <td>{{ $patient->bloodtype }}</td>
        <td>{{ $patient->birthday }}</td>
        <td>{{ $patient->age }}</td>
        <td>{{ $patient->addr }}</td>
        <td>{{ $patient->contactnum }}</td>
        <!-- <td>{{ $patient->contactnum }}</td> -->
        <td>
          <a class="button teal" style="width: 100px" href="{{route('patients.show',$patient->patients_id)}}">
              <i class="far fa-eye"> View</i>
          </a>
          <a class="button rss" style="width: 100px;" href="{{route('patients.edit',$patient->patients_id)}}">
              <i class="fas fa-edit"> Edit</i>
          </a>
            {!! Form::open(['method' => 'DELETE','route' => ['patients.destroy', $patient->patients_id],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline; width: 100px" class="button btn dsgnmoo">
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