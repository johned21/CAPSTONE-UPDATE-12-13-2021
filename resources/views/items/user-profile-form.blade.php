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
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7 mt-2" id="usersinfo">
                <div class="card" >

                    <div class="row userdetails">

                        <h2>User Details</h2>
            
                        <div class="edit">
                            <ul>
                                <li class="editprofile">
                                    <span><a href=""><i class="fas fa-pen"></i> Edit Profile</a></span>
                                    <span><a href=""><i class="fas fa-key"></i> Change Password</a></span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="details">
                            <ul>
                                <div class="row fullname">
                                    <div class="col-md-4">
                                        <li>
                                            <dl>
                                                <dt>Last Name</dt>
                                                <dd></dd>
                                            </dl>
                                        </li>
                                    </div>
                                    <div class="col-md-4">
                                        <li>
                                            <dl>
                                                <dt>First Name</dt>
                                                <dd></dd>
                                            </dl>
                                        </li>
                                    </div>
                                    <div class="col-md-4">
                                        <li>
                                            <dl>
                                                <dt>Middle Name</dt>
                                                <dd></dd>
                                            </dl>
                                        </li>
                                    </div>
                                </div>
                                <div class="row fullname">
                                    <li>
                                        <dl>
                                            <dt>Username</dt>
                                            <dd></dd>
                                        </dl>
                                    </li>
                                </div>
                                <div class="row fullname">
                                    <li>
                                        <dl>
                                            <dt>Email Address</dt>
                                            <dd></dd>
                                        </dl>
                                    </li>
                                </div>
                                <div class="row fullname">
                                    <li>
                                        <dl>
                                            <dt>Contact Number</dt>
                                            <dd></dd>
                                        </dl>
                                    </li>
                                </div>
                            </ul>
                        </div>

                    </div>
                    

                </div>
                
            </div>

        </div>
    </div>
</div>
