<div class="container no-padding">
        <div class="page_header no-margin">
            <div class="col-lg-12">
                <h1>{{$title}}</h1>
            </div>
        </div>
        <div class="container main-content no-padding">
            <div class="row row-fluid">
                <div class="col-lg-12 col-md-12">
                    <div id="buddypress">
                        <div id="members-directory-form" class="dir-form">
                            <div class="row no-margin">
                                <div class="col-md-7 no-padding">
                                    <div class="item-list-tabs" role="navigation">
                                        <ul>
                                            <li class="selected" id="members-all">
                                                <a href="./members.html">All Players <span>{{$count}}</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="members-dir-search" class="dir-search">
                                        <form id="search-members-form">
                                            <label><input name="s" id="members_search" placeholder="Search Players..." type="text"></label>
                                            <input id="members_search_submit" name="members_search_submit" value="Search" type="submit">
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-10 no-padding">
                                        <div class="item-list-tabs" id="subnav" role="navigation">
                                            <ul>
                                                <li id="members-order-select" class="last filter">
                                                    <label for="members-order-by">Filter Gods:</label>
                                                    <select id="members-order-by">
                                                        <option value="all">All</option>
                                                        <option value="brahma">Brahma</option>
                                                        <option value="vishnu">Vishnu</option>
                                                        <option value="shiva">Shiva</option>
                                                    </select>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <div class="col-md-12 no-padding">
                                    <div class="item-list-tabs" id="subnav" role="navigation">
                                        <ul>
                                            <li id="members-order-select" class="last filter">
                                                <label for="members-order-by">Filter Tribe:</label>
                                                <select id="members-order-by">
                                                    <option value="all">All</option>
                                                    <option value="asura">Asura</option>
                                                    <option value="rakshasa">Rakshasa</option>
                                                    <option value="deva">Deva</option>
                                                    <option value="garuda">Garuda</option>
                                                    <option value="yaksa">Yaksa</option>
                                                    <option value="gandharva">Ganharva</option>
                                                    <option value="naga">Naga</option>
                                                    <option value="kimnara">Kimnara</option>
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                                <div class="g-content">
                                    <ul id="members-list" class="item-list">
                                    @if(count($ranking) > 0)
                                        @foreach($ranking as $rank)
                                        <li>
                                            <div class="item-avatar">
                                                @if(App\User::select('profile_picture')->where('userid', $rank->UserID)->first())
                                                <img src="storage/profile/{{App\User::select('profile_picture')->where('userid', $rank->UserID)->first()->profile_picture}}" alt="" class="avatar" height="50" width="50"><span class="item-number">{{$increment++}}</span>
                                                @else
                                                <img src="storage/profile/noimage.jpg" alt="" class="avatar" height="50" width="50"><span class="item-number">{{$increment++}}</span>
                                                @endif
                                            </div>
                                            <div class="item">
                                                <div class="item-title">
                                                    <a href="">{{$rank->CharacterName}}</a>
                                                    <div class="item-meta"><span class="activity">{{number_format($rank->MBrahmanPoint)}} Monthly MP</span></div>
                                                </div>
                                            </div>
                                            <div class="action">
                                            </div>
                                            <div class="clear"></div>
                                        </li>
                                        @endforeach
                                    @endif
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>