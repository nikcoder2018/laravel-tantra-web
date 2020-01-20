@include('pages.profile.header')
                <div id="item-nav">
                    <div class="item-list-tabs no-ajax" id="object-nav" role="navigation">
                        <ul>
                            <li id="xprofile-personal-li" class="current selected"><a id="user-xprofile" href="/profile"><i class="fa fa-user"></i> profile</a></li>
                            <li id="activity-personal-li"><a id="user-activity" href="/setting#item-nav"><i class="fa fa-cog"></i> setting</a></li>
                            <li id="friends-personal-li"><a id="user-friends" href="/friends"><i class="fa fa-users"></i> friends</a></li>
                            <li id="groups-personal-li"><a id="user-groups" href="/ashram"><i class="fa fa-users"></i> ashram</a></li>
                            <li id="forums-personal-li"><a id="user-forums" href="/forums"><i class="fa fa-forumbee"></i> forums</a></li>
                        </ul>
                    </div>
                </div>
                <div id="item-body">
                    <div class="col-lg-8 col-md-8 block">
                        <div class="heading">
                            <h3><i class="fa fa-bullhorn"></i> Reminders</h3>
                        </div>
                        <div class="g-content introduction">
                            <p>Hey, Welcome to your profile. Our Website is might not completely finished. some functions or links you'll visit will not work. we are working now on more updates.</p>
                        </div>
                    </div>
                    @include('pages.profile.about')
                </div>
            </div>
        </div>
    </div>