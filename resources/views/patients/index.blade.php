@extends('layouts.app')
@section('content')
<style>
main {
  display: flex;
  flex-direction: column;
  padding: 1em;
  align-items: center;
}

.table-wrapper {
  overflow: auto;
  max-width: 100%;
  background: linear-gradient(to right, white 30%, rgba(255, 255, 255, 0)),
    linear-gradient(to right, rgba(255, 255, 255, 0), white 70%) 0 100%,
    radial-gradient(
      farthest-side at 0% 50%,
      rgba(0, 0, 0, 0.2),
      rgba(0, 0, 0, 0)
    ),
    radial-gradient(
        farthest-side at 100% 50%,
        rgba(0, 0, 0, 0.2),
        rgba(0, 0, 0, 0)
      )
      0 100%;
  background-repeat: no-repeat;
  background-color: white;
  background-size: 40px 100%, 40px 100%, 14px 100%, 14px 100%;
  background-position: 0 0, 100%, 0 0, 100%;
  background-attachment: local, local, scroll, scroll;
}

tr {
  border-bottom: 1px solid;
}

th {
  background-color: #555;
  color: #fff;
  white-space: nowrap;
  cursor: pointer;
}

th,
td {
  text-align: left;
  padding: 0.5em 1em;
}

input[type=search] {
  border: 1px solid;
  font-size: initial;
  margin-bottom: 1em;
  padding: 0.25em;
}

.hidden {
  display: none;
}
</style>

 <div id="page-wrapper" class="w3-panel w3-card-4" style="background: white; border-radius:5px">
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
<div style="overflow-x:auto; ">
  <table id="filterTable" style="margin: 10px;">
     <thead>
    <tr>
      <th with="80px" scope="row">No</th>
      <th scope="col" >Doctor</th>
      <th scope="col" with="80px">Symptoms</th>
      <th scope="col">Patients Profile</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
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
        
     
        <td>{{ $patient->doctor->name }}</td>    
        <td>{{ $patient->symptoms }}</td>
        <td><img style="width: auto; height: 100px; border-radius: 50%" src="data:image/jpeg;base64, {{ $patient->profilepic }}" /></td>
        <td>{{ $patient->firstname }}</td>
        <td>{{ $patient->lastname }}</td>
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