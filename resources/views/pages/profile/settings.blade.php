@include('pages.profile.header')
                <div id="item-nav">
                    <div class="item-list-tabs no-ajax" id="object-nav" role="navigation">
                        <ul>
                            <li id="xprofile-personal-li"><a id="user-xprofile" href="/profile"><i class="fa fa-user"></i> profile</a></li>
                            <li id="activity-personal-li" class="current selected"><a id="user-activity" href="/setting#item-nav"><i class="fa fa-cog"></i> setting</a></li>
                            <li id="friends-personal-li"><a id="user-friends" href="/friends"><i class="fa fa-users"></i> friends</a></li>
                            <li id="groups-personal-li"><a id="user-groups" href="/ashram"><i class="fa fa-users"></i> ashram</a></li>
                            <li id="forums-personal-li"><a id="user-forums" href="/forums"><i class="fa fa-forumbee"></i> forums</a></li>
                        </ul>
                    </div>
                </div>
                <div id="item-body">
                    <div class="col-lg-8 col-md-8 block" id="subnav">
                        <div class="item-list-tabs extra no-ajax" id="subnav">
                            <ul>
                                <li class="current selected"><a href="/setting#item-nav">Update Profile</a></li>
                                <li><a href="/changepassword#item-nav">Change Password</a></li>
                                <li><a href="/unstuck#item-nav">Character Unstuck</a></li>
                            </ul>
                        </div>
                        <div class="reg-form container">
                                <div class="col-md-11 reg-form-inner">
                                    {!! Form::open(['action' => ['ProfileController@updateprofiledone'], 'method' => 'POST', 'enctype' => 'multipart/form-data'   ]) !!}
                                        @csrf
                                        {{Form::label('profile_image', 'Profile Picture')}}
                                        {{Form::file('profile_image')}}
                                        
                                        {{Form::label('firstname', 'Firstname')}}
                                        {{Form::text('firstname', $user->firstname,['placeholder' => 'Firstname', 'required' => 'required'])}}
         
                                        {{Form::label('middleinitial', 'Middle Initial')}}
                                        {{Form::text('middleinitial', $user->initial,['placeholder' => 'Middle Initial'])}}
           
                                        {{Form::label('lastname', 'Middle Initial')}}
                                        {{Form::text('lastname', $user->lastname,['placeholder' => 'Last Name', 'required' => 'required'])}}

                                        {{Form::label('birthdate', 'Birthdate')}}
                                        {{Form::date('birthdate', $user->birthdate)}}

                                        {{Form::label('address', 'Address')}}
                                        {{Form::text('address', $user->address, ['placeholder' => 'Address'])}}

                                        {{Form::submit('Update', ['class' => 'button-green button-small center-block'])}}
                                        {!! Form::close() !!}
                                    </form>
                                </div>
                            </div>
                    </div>
                    @include('pages.profile.about')
                </div>
            </div>
        </div>
    </div>