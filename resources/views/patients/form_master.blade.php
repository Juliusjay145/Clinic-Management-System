<style>
  button.button.green {
    width: 100px;
    background: #cae285;
    background: -webkit-gradient(linear, 0 0, 0 bottom, from(#cae285), to(#a3cd5a));
    background: -moz-linear-gradient(#cae285, #a3cd5a);
    background: linear-gradient(#cae285, #a3cd5a);
    border: solid 1px #aad063;
    border-bottom: solid 3px #799545;
    box-shadow: inset 0 0 0 1px #e0eeb6;
    color: #5d7731;
    text-shadow: 0 1px 0 #d0e5a4; }

button.button.green:hover {
    background: #abd164;
    background: -webkit-gradient(linear, 0 0, 0 bottom, from(#abd164), to(#b9d972));
    background: -moz-linear-gradient(#abd164, #b9d972);
    background: linear-gradient(#abd164, #b9d972);
    border: solid 1px #98b85b;
    border-bottom: solid 3px #799545;
    box-shadow: inset 0 0 0 1px #cce3a1; }

button.button.green:active {
    background: #a4cb5d;
    background: -webkit-gradient(linear, 0 0, 0 bottom, from(#a4cb5d), to(#9ec45a));
    background: -moz-linear-gradient(#a4cb5d, #9ec45a);
    background: linear-gradient(#a4cb5d, #9ec45a);
    border: solid 1px #6e883f;
    box-shadow: inset 0 10px 15px 0 #90b352; }


</style>
<div class="container-fluid" style="margin-top: 10px; border-radius:10px;">

 <h1 class="h3 mb-1 text-gray-900">Patient Form</h1>

          <!-- Content Row -->
          <div class="row" >

            <!-- Border Left Utilities -->
            <div class="col-lg-6" style="margin-top: 20px">

              <div class="row" hidden>
                  <div class="col-sm-2">
                    {!! form::label('bosy','Doctor') !!}
                  </div>
                  <br><br><br>
                  <div class="col-sm-10">

                  <div class="form-group {{ $errors->has('doctors_id') ? 'has-error' : "" }}" style="color: red; margin-top:10px; margin-bottom:-10px">
                  <input type="text" id="doctors_id" name="doctors_id" value="{{ Auth::user()->id }}">
                  </div>


                  </div>
                </div>

                <div class="row" >
                    <div class="col-sm-2 ">

                      {!! form::label('symptoms','Symptoms Case') !!}
                    </div>
                  <div class="col-sm-10">
                    <div class=" form-group {{ $errors->has('symptoms') ? 'has-error' : "" }}" style="color: red">
                      {{ Form::text('symptoms',NULL, ['class'=>'form-control', 'id'=>'symptoms', 'placeholder'=>'Symptoms Cases...']) }}
                      {{ $errors->first('symptoms') }}
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-sm-2">
                    {!! form::label('bosy','Firstname') !!}
                  </div>
                  <div class="col-sm-10">

                    <div class="form-group {{ $errors->has('firstname') ? 'has-error' : "" }}" style="color: red">
                      {{ Form::text('firstname',NULL, ['class'=>'form-control', 'id'=>'firstname', 'placeholder'=>'First Name...']) }}
                      {{ $errors->first('firstname') }}
                    </div>
                  </div>
                </div>

                <div class="row">

                  <div class="col-sm-2">
                    {!! form::label('bosy','Lastname') !!}
                  </div>
                  <div class="col-sm-10">
                    <div class="form-group {{ $errors->has('lastname') ? 'has-error' : "" }}" style="color: red">
                      {{ Form::text('lastname',NULL, ['class'=>'form-control', 'id'=>'lastname', 'placeholder'=>'Last Name...']) }}
                      {{ $errors->first('lastname') }}
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-sm-2"> {!!form::label('bosy','Prof') !!} </div>
                    <div class="col-sm-10">
                      <div class="form-group {{$errors->has('profilepic') ? 'has-error' : "" }}" style="color:
                        red"> {{ $errors->first('profilepic') }} <!-- <input type="file"
                        id="avatar" name="profilepic" accept="image/png, image/jpeg">
                        -->
                              <h6 style="color: black"> {!!
                                Form::file('profilepic') !!}
                              </h6>
                      </div>
                  </div>
                </div>





            </div>

            <!-- Border Bottom Utilities -->
            <div class="col-lg-6" style="margin-top: 20px">

              <div class="row">
                <div class="col-sm-2">
                  {!! form::label('bosy','Gender') !!}
                </div>

                <div class="col-sm-10">
                  <div class="form-group {{ $errors->has('gender') ? 'has-error' : "" }}" style="color: red">
                    {{ $errors->first('gender') }}<br>
                   <input type="radio" id="male" name="gender" value="male" checked>
                    <label for="male"  style="color: grey">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female"  style="color: grey">Female</label><br>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-2">
                  {!! form::label('bosy','Blood Type') !!}
                </div>
                <div class="col-sm-10">
                  <div class="form-group {{ $errors->has('bloodtype') ? 'has-error' : "" }}" style="color: red">
                    {{ $errors->first('bloodtype') }}
                      <select id="bloodtype" name="bloodtype" class="form-control" style="width: 100px">

                        <option id="A+" value="A+">
                          <b for="A+" >A+</b>
                        </option>

                        <option id="A-" value="A-">
                          <b for="A-" >A-</b>
                        </option>

                        <option id="B+" value="B+">
                          <b for="B+" >B+</b>
                        </option>

                        <option id="B-" value="B-">
                          <b for="B-" >B-</b>
                        </option>

                        <option id="O+" value="O+">
                          <b for="volvo" >A</b>
                        </option>

                        <option id="O-" value="O-">
                          <b for="O-" >O-</b>
                        </option>

                        <option id="AB+" value="AB+">
                          <b for="AB+" >AB+</b>
                        </option>

                        <option id="AB-" value="AB-">
                          <b for="AB-" >AB-</b>
                        </option>


                      </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-2">
                  {!! form::label('bosy','Birthday') !!}
                </div>
                <div class="col-sm-10">
                  <div class="form-group {{ $errors->has('birthday') ? 'has-error' : "" }}" style="color: red">
                    <input class="form-control" style="width: 200px" type="date" id="birthday" name="birthday">
                    {{ $errors->first('birthday') }}
                  </div>
                </div>
              </div>

             <div class="row">
              <div class="col-sm-2">
                {!! form::label('bosy','Age') !!}
              </div>
                <div class="col-sm-10">
                  <div class="form-group {{ $errors->has('birthday') ? 'has-error' : "" }}" style="color: red">
                    {{ Form::text('age',NULL, ['class'=>'form-control', 'id'=>'age', 'placeholder'=>'Age...']) }}
                    {{ $errors->first('age') }}
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-2">
                  {!! form::label('bosy','Address') !!}
                </div>
                <div class="col-sm-10">
                  <div class="form-group {{ $errors->has('addr') ? 'has-error' : "" }}" style="color: red">
                    {{ Form::text('addr',NULL, ['class'=>'form-control', 'id'=>'addr', 'placeholder'=>'Address...']) }}
                    {{ $errors->first('addr') }}
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-2">
                  {!! form::label('bosy','Contact Number') !!}
                </div>
                <div class="col-sm-10">
                  <div class="form-group {{ $errors->has('contactnum') ? 'has-error' : "" }}" style="color: red">
                    {{ Form::text('contactnum',NULL, ['class'=>'form-control', 'id'=>'contactnum', 'placeholder'=>'Contact Number...']) }}
                    {{ $errors->first('contactnum') }}
                  </div>
                </div>
              </div>





              <button type="submit" class="button green form-control w3-right" style="margin-bottom: 20px"><i class="fas fa-save"> Save</i></button>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
  // the selector will match all input controls of type :checkbox
// and attach a click event handler
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>


    </div>
  </div>
</div>
