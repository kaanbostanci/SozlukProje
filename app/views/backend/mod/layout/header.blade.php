<header id="header" class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
					<div class="brand-wrap pull-left">
						<div class="brand-img">
                                                    <a class="brand" href="{{ URL::to('modpanel') }}">
                                                            <img src="{{ URL::to('') }}" alt="" style="width: 117px; height: 21px;">
							</a>
						</div>
					</div>
                    
                    <div id="header-right" class="clearfix">
						<div id="nav-toggle" data-toggle="collapse" data-target="#navigation" class="collapsed">
							<i class="icon-caret-down"></i>
						</div>
						<div id="header-search">
							<span id="search-toggle" data-toggle="dropdown">
								<i class="icon-search"></i>
							</span>
							<form class="navbar-search">
								<input type="text" class="search-query" placeholder="Ara">
							</form>
						</div>

               
                        
                        <div id="header-functions" class="pull-right">
                        	<div id="user-info" class="clearfix">
                                <span class="info">
                                	Hoşgeldiniz
                                    <span class="name">{{Auth::user()->namesurname}}</span>
                                </span>
                            	<div class="avatar">
                                	<a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                            <img src="@if(Auth::user()->profil!='') {{ URL::to('Backend/avatar/'.Auth::user()->profil.'') }}  @else {{ URL::to('Backend/assets/images/pp.jpg') }} @endif" alt="Avatar">
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ URL::to('modpanel/profil') }}"><i class="icol-user"></i> Profilim</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{ URL::to('logout') }}"><i class="icol-key"></i> Çıkış Yap</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="logout-ribbon">
                                <a href="{{ URL::to('logout') }}"><i class="icon-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>