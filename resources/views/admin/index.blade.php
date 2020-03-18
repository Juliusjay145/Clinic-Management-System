@extends('layouts.superadminapp')
@section('content')
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {

  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #235CC6;
  color: white;
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
      <th scope="col">Admins Name</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>

      <!-- <th>Contact Number</th> -->
      <th with="140px" class="text-center">
        
      </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($admin as $superadmin)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $superadmin->name }}</td>
        <td>{{ $superadmin->email }}</td>
        <td>
          <a class="button teal" style="width: 100px" href="{{route('admin.show',$superadmin->id)}}">
              <i class="far fa-eye"> View</i>
          </a>
          <!-- <a class="button rss" style="width: 100px;" href="{{route('admin.edit',$superadmin->id)}}">
              <i class="fas fa-edit"> Edit</i>
          </a> -->
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