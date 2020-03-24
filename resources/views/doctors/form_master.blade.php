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
<div class="container-fluid " style="margin-top: 20px; margin-bottom: 2px; border-radius:10px" >

 <h1 class="h3 mb-1 text-gray-900">Doctors Form</h1>
 
 <div class="row" >
<!-- Border Left Utilities -->
<div class="col-lg-6" style="margin-top: 20px">


<div class="row" >

          
              
              <div class="col-sm-2">
                    {!! form::label('last_name','Last Name') !!}
                  </div>
                <div class="col-sm-10">
                  <div class="form-group {{ $errors->has('user_id') ? 'has-error' : "" }}" style="color: red">
                    {{ Form::text('user_id',NULL, ['class'=>'form-control', 'id'=>'user_id', 'placeholder'=>'User Name...']) }}
                    {{ $errors->first('user_id') }}
                  </div>
                </div>

                <div class="col-sm-10">
                  <div class="form-group {{ $errors->has('last_name') ? 'has-error' : "" }}" style="color: red">
                    {{ Form::text('last_name',NULL, ['class'=>'form-control', 'id'=>'last_name', 'placeholder'=>'Last Name...']) }}
                    {{ $errors->first('last_name') }}
                  </div>
                </div>
              </div>

              <div class="row" >
                 <div class="col-sm-2">
                    {!! form::label('first_name','First Name') !!}
                  </div>
                <div class="col-sm-10">
                  <div class="form-group {{ $errors->has('firstname') ? 'has-error' : "" }}" style="color: red">
                    {{ Form::text('first_name',NULL, ['class'=>'form-control', 'id'=>'first_name', 'placeholder'=>'First Name...']) }}
                    {{ $errors->first('first_name') }}
                  </div>
                </div>
              </div>
              

              <div class="row" >
                 <div class="col-sm-2">
                    {!! form::label('phone_no','Phone No.') !!}
                  </div>
                <div class="col-sm-10">
                  <div class="form-group {{ $errors->has('phone_no') ? 'has-error' : "" }}" style="color: red">
                    {{ Form::text('phone_no',NULL, ['class'=>'form-control', 'id'=>'phone_no', 'placeholder'=>'Phone No...']) }}
                    {{ $errors->first('phone_no') }}
                  </div>
                </div>
              </div>

              <div class="row" >
                 <div class="col-sm-2">
                    {!! form::label('age','Age') !!}
                  </div>
                <div class="col-sm-10">
                  <div class="form-group {{ $errors->has('age') ? 'has-error' : "" }}" style="color: red">
                    {{ Form::text('age',NULL, ['class'=>'form-control', 'id'=>'age', 'placeholder'=>'Age...']) }}
                    {{ $errors->first('age') }}
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-2"> {!!form::label('bosy','Profile Picture') !!} </div>
                  <div class="col-sm-10">
                    <div class="form-group {{$errors->has('profile_pic') ? 'has-error' : "" }}" style="color:
                      red"> {{ $errors->first('profile_pic') }} <!-- <input type="file"
                      id="avatar" name="profilepic" accept="image/png, image/jpeg">
                      -->
                            <h6 style="color: black"> {!!
                              Form::file('profile_pic') !!}
                          </h6>
                  </div>
                </div>
              </div>
</div>

<!-- Border Bottom Utilities -->
<div class="col-lg-6" style="margin-top: 20px">

<div class="row" >
                 <div class="col-sm-2">
                    {!! form::label('address','Address') !!}
                  </div>
                <div class="col-sm-10">
                  <div class="form-group {{ $errors->has('address') ? 'has-error' : "" }}" style="color: red">
                    {{ Form::text('address',NULL, ['class'=>'form-control', 'id'=>'address', 'placeholder'=>'Address...']) }}
                    {{ $errors->first('address') }}
                  </div>
                </div>
              </div>

              <div class="row" >
                 <div class="col-sm-2">
                    {!! form::label('state','State') !!}
                  </div>
                <div class="col-sm-10">
                  <div class="form-group {{ $errors->has('state') ? 'has-error' : "" }}" style="color: red">
                    {{ Form::text('state',NULL, ['class'=>'form-control', 'id'=>'state', 'placeholder'=>'State...']) }}
                    {{ $errors->first('state') }}
                  </div>
                </div>
              </div>

            
              <div class="card mb-4 py-3 border-bottom-warning">
                <center>
                    <div class="col-sm-2" style="margin-left: -80%">
                      <b>
                        {!! form::label('docs_username','Username') !!}
                      </b>  
                    </div>
                    <div class="col-sm-10">
                      <div class="form-group {{ $errors->has('docs_username') ? 'has-error' : "" }}" style="color: red">
                        {{ Form::text('docs_username',NULL, ['class'=>'form-control', 'id'=>'docs_username', 'placeholder'=>'Username...']) }}
                        {{ $errors->first('docs_username') }}
                      </div>
                    </div>
                
                    <div class="col-sm-2" style="margin-left: -80%">
                      <b>
                        {!! form::label('docs_password','Password') !!}
                      </b>  
                    </div>
                    <div class="col-sm-10">
                      <div class="form-group {{ $errors->has('docs_password') ? 'has-error' : "" }}" style="color: red">
                        {{ Form::text('docs_password',NULL, ['class'=>'form-control', 'id'=>'docs_password', 'placeholder'=>'Password...']) }}
                        {{ $errors->first('docs_username') }}
                      </div>
                    </div>
                    </center>
                  </div>
                  
                  </div>
              </div>
              <button type="submit" style="margin-bottom: 20px" class="button green form-control w3-right" style="margin-bottom: 20px"><i class="fas fa-save"> Save</i></button>

  
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    </div>
  </div>
</div>