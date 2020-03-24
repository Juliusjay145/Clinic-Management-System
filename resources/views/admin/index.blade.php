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
 <div id="page-wrapper" class="w3-panel w3-card-4" style="background: white; border-radius:10px">
  <div class="row">
  <div class="col-sm-12">
    <div class="full-right">
      <h2 style="margin-left: 20px">Registered Doctors</h2>
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
  <table id="customers" style="margin: 10px;">
     <thead style="border-radius:10px">
    <tr style="color: #000000; border-radius:10px">
      <th with="80px" scope="row">No</th>
      <th scope="col">Profile Picture</th>
      <th scope="col">Fullname</th>
      <th scope="col">Phone No.</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>

      <!-- <th>Contact Number</th> -->
      <th with="140px" class="text-center">
        <a href="{{route('admin.create')}}" class="button green" style=" margin-bottom: 1px">
          <i class="fas fa-plus-square" style="width: 90px;"> Add Doctor</i>
        </a>
      </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($admin as $superadmin)
      <tr>
        <td>{{$no++}}</td>
        <td><img style="width: auto; height: 100px; border-radius: 50%" src="data:image/jpeg;base64, {{ $superadmin->profilepic }}" /></td>
        <td>{{ $superadmin->name }}</td>
        <td>{{ $superadmin->contactno }}</td>
        <td>{{ $superadmin->email }}</td>
        <td>{{ $superadmin->address }}</td>

        <td>
          <a class="button teal" style="width: 100px" href="{{route('admin.show',$superadmin->id)}}">
              <i class="far fa-eye"> View</i>
          </a>
          <a class="button rss" style="width: 100px;" href="{{route('admin.edit',$superadmin->id)}}">
              <i class="fas fa-edit"> Edit</i>
          </a>
            {!! Form::open(['method' => 'DELETE','route' => ['admin.destroy', $superadmin->id],'style'=>'display:inline']) !!}
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