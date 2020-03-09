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
<div class="container-fluid"  style="margin-top: 10px">

 <h1 class="h3 mb-1 text-gray-900">Patient Form</h1>

          <!-- Content Row -->
          <div class="row" >

            <!-- Border Left Utilities -->
            <div class="col-lg-6" style="margin-top: 20px">



              <div class="row" >
                 <div class="col-sm-2">
                    {!! form::label('symptoms','Symptoms Case') !!}
                  </div>
                <div class="col-sm-10">
                  <div class="form-group {{ $errors->has('symptoms') ? 'has-error' : "" }}" style="color: red">
                    {{ Form::text('symptoms',NULL, ['class'=>'form-control', 'id'=>'symptoms', 'placeholder'=>'Symptoms Cases...']) }}
                    {{ $errors->first('symptoms') }}
                  </div>
                </div>
              </div>



              <button type="submit" class="button green form-control w3-right"><i class="fas fa-save"> Save</i></button>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </div>
  </div>
</div>