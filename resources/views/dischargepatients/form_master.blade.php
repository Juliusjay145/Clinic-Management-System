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

 <h1 class="h3 mb-1 text-gray-900">Discharge Patient Form</h1>

          <!-- Content Row -->
          <div class="row" >

            <!-- Border Left Utilities -->
            <div class="col-lg-6" style="margin-top: 20px">

                <div class="row" >
                    <div class="col-sm-2 ">

                    <h6 style="font-size:12px">Discharge ID</h6>
                    </div>
                  <div class="col-sm-10">
                    <div class=" form-group {{ $errors->has('pat_discharge_id') ? 'has-error' : "" }}" style="color: red">
                      {{ Form::text('pat_discharge_id',NULL, ['class'=>'form-control', 'id'=>'pat_discharge_id', 'placeholder'=>'Discharge ID...']) }}
                      {{ $errors->first('pat_discharge_id') }}
                    </div>
                  </div>
                </div>


                <div class="row" >
                    <div class="col-sm-2 ">

                    <h6 style="font-size:12px">Number of Days in Bed</h6>
                    </div>
                  <div class="col-sm-10">
                    <div class=" form-group {{ $errors->has('prescriptions') ? 'has-error' : "" }}" style="color: red">
                      {{ Form::text('bed_days',NULL, ['class'=>'form-control', 'id'=>'bed_days', 'placeholder'=>'Number of Days in Bed...']) }}
                      {{ $errors->first('bed_days') }}
                    </div>
                  </div>
                </div>

                <div class="row" >
                    <div class="col-sm-2 ">

                    <h6 style="font-size:12px">Charges</h6>
                    </div>
                  <div class="col-sm-10">
                    <div class=" form-group {{ $errors->has('charges') ? 'has-error' : "" }}" style="color: red">
                      {{ Form::text('charges',NULL, ['class'=>'form-control', 'id'=>'charges', 'placeholder'=>'Charges...']) }}
                      {{ $errors->first('charges') }}
                    </div>
                  </div>
                </div>


                


              <button type="submit" class="button green form-control w3-right" style="margin-bottom: 20px"><i class="fas fa-save"> Save</i></button>


            </div>

            <!-- Border Bottom Utilities -->
            <div class="col-lg-6" style="margin-top: 20px">

             



              


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