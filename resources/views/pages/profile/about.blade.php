<div class="col-lg-4 col-md-4">
        <div class="block">
            <div class="heading">
                <h3><i class="fa fa-info-circle"></i> About</h3>
            </div>
            <ul class="about-profile g-content">
                <li><strong> NAME: </strong> {{$user->firstname.' '.$user->initial.' '.$user->lastname}}</li>
                <li><strong> LOCATION: </strong> {{$user->address}}</li>
                <li><strong> AGE: </strong>{{\Carbon\Carbon::parse($user->birthdate)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}</li>
                <li><strong> JOINED: </strong> {{date('F, Y', strtotime($user->date_registered))}}</li>      						
            </ul>
            <div class="clearfix"></div>
            <div class="space25"></div>
            <div class="heading">
                <h3><i class="fa fa-crosshairs"></i> Main Character</h3>
            </div>
            <ul class="profile-clans about-profile g-content">
                @if(!empty($game))
                <li>
                    <a href="">
                        <div class="pclan-img"><img alt="img" src="storage/profile/{{Auth::user()->profile_picture}}"></div> 
                        <div class="pclan-title">{{$game ? $game->CharacterName : ''}}</div>
                        <div class="pclan-info">{{$game ? $game->GuildName : ''}}</div>
                        <div class="clear"></div>
                    </a>
                </li>
                @else
                <li>Empty</li>
                @endif
            </ul>	
            <div class="space25"></div>
            <div class="heading">
                    <h3><i class="fa fa-crosshairs"></i> Sub Characters</h3>
                </div>
                <ul class="profile-clans about-profile g-content">
                    @if(!empty($game) and ($game->Name1 != $game->CharacterName))
                    <li>
                        <a href="">
                            <div class="pclan-img"><img alt="img" src="images/xtra/logo-helmet.jpg"></div> 
                            <div class="pclan-title">{{$game ? $game->Name1 : ''}}</div>
                            <div class="clear"></div>
                        </a>
                        <div class="clearfix"></div>
                    </li>
                    @endif
                    @if(!empty($game) and $game->Name2 != $game->CharacterName)
                    <li>
                        <a href="">
                            <div class="pclan-img"><img alt="img" src="images/xtra/logo-helmet.jpg"></div> 
                            <div class="pclan-title">{{$game ? $game->Name2 : ''}}</div>
                            <div class="clear"></div>
                        </a>
                    <div class="clearfix"></div>
                    </li>
                    @endif
                    @if(!empty($game) and $game->Name3 != $game->CharacterName)
                    <li>
                        <a href="">
                            <div class="pclan-img"><img alt="img" src="images/xtra/logo-helmet.jpg"></div> 
                            <div class="pclan-title">{{$game ? $game->Name3 : ''}}</div>
                            <div class="clear"></div>
                        </a>
                    <div class="clearfix"></div>
                    </li>
                    @endif
                    @if(empty($game))
                    <li>Empty</li>
                    @endif
                </ul>						
            <div class="clearfix"></div>
            <div class="space30"></div>								
        </div>
    </div>