<div class="card mt-5" id="cardss">
    <div class="card-body">
        <div class="row">
            
            <div class="col-md-5">
                <div class="mb-5">
                    <div class="row" id="users-img">
                        <div class="col-md-12">
                            <div class="profile " id="userpp">
                                {{-- @if ($user->profile_pic != null) --}}
                                    {{-- <img src="{{asset("images/". $user->profile_pic)}}" id="users-profile"> --}}
                                {{-- @else --}}
                                    <img src="{{asset("img/pp.png")}}" id="users-profile">
                                {{-- @endif --}}
                            </div>
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <div class="change-pp">
                                        <label for="fileupload">
                                            <span class="links-name text-white"><i class="fad fa-camera" style="font-size: 0.95em"></i>{{isset($student) ? 'Change' : 'Change'}} Photo</span>
                                        </label>
                                        {{-- <input type="file" id="fileupload"> --}}
                                        {!! Form::file('profile_pic', ['id'=>'fileupload', 'accept' => "image/*"]) !!}
                                        <span class="errspan p-info-err-span" id="errspan">{{ $errors->first('profile_pic') }}</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7 mt-2" id="usersinfo">
                <div class="card" >

                    <div class="row userdetails">

                        <h2>User Details</h2>
                        
                        <div class="details">
                            <ul>
                                <div class="mb-4">
                                    <div class="row">
                                        <div class="col form-group @error('lastname') has-error @enderror">
                                            {!! Form::label('lastname','Last Name',[],false) !!}
                                            @error('lastname')<span class="errspanicon" id="errspanicon"><i class="fal fa-exclamation-circle"></i></span>@enderror
                                            {!! Form::text('lastname', null, ['class'=>'form-control', 'id'=>'lastname','required' => '']) !!}
                                            <span class="errspan" id="errspan">{{ $errors->first('lastname') }}</span>    
                                        </div>
                                        <div class="col form-group @error('firstname') has-error @enderror">
                                            {!! Form::label('firstname','First Name',[],false) !!}
                                            @error('firstname')<span class="errspanicon" id="errspanicon"><i class="fal fa-exclamation-circle"></i></span>@enderror
                                            {!! Form::text('firstname', null, ['class'=>'form-control', 'id'=>'firstname','required' => '']) !!}
                                            <span class="errspan" id="errspan">{{ $errors->first('firstname') }}</span>    
                                        </div>
                                        <div class="col form-group @error('middlename') has-error @enderror">
                                            {!! Form::label('middlename','Middle Name',[],false) !!}
                                            @error('middlename')<span class="errspanicon" id="errspanicon"><i class="fal fa-exclamation-circle"></i></span>@enderror
                                            {!! Form::text('middlename', null, ['class'=>'form-control', 'id'=>'middlename','required' => '']) !!}
                                            <span class="errspan" id="errspan">{{ $errors->first('middlename') }}</span>    
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 form-group @error('username') has-error @enderror">
                                    {!! Form::label('username','Username',[],false) !!}
                                    {!! Form::text('username', null, ['class'=>'form-control', 'id'=>'username']) !!}
                                    <span class="errspan" id="errspan">{{ $errors->first('username') }}</span>
                                </div>
                                <div class="mb-3 form-group @error('email') has-error @enderror">
                                    {!! Form::label('email','Email Address',[],false) !!}
                                    {!! Form::text('email', null, ['class'=>'form-control', 'id'=>'email']) !!}
                                    <span class="errspan" id="errspan">{{ $errors->first('email') }}</span>
                                </div>
                                <div class="mb-3 form-group @error('contact') has-error @enderror">
                                    {!! Form::label('contact','Contact Number',[],false) !!}
                                    {!! Form::text('contact', null, ['class'=>'form-control', 'id'=>'contact']) !!}
                                    <span class="errspan" id="errspan">{{ $errors->first('contact') }}</span>
                                </div>

                                <div class="form-group justify-content-between"> 
                                    <div class="col-md-3 float-end">
                                        <button type="submit" class="btn btn-primary form-control"><i class="fas fa-check"></i> Save</button> 
                                    </div>   
                                    <div class="col-md-3 float-start">
                                        <a href="" class="btn btn-secondary form-control">Cancel</a>
                                    </div>
                                </div>
                                
                            </ul>
                        </div>

                    </div>
                </div>
                
            </div>

        </div>
    </div>
</div>
