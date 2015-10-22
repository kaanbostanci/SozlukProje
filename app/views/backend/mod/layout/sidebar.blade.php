<aside id="sidebar">
    <nav id="navigation" class="collapse">
        <ul>
            <li @if(Request::segment(1)=='modpanel') class="active" @endif>
                <span title="Ayarlar">
                    <i class="icon-home"></i>
                    <span class="nav-title">Ayarlar</span>
                </span>
                <ul class="inner-nav">
                    <li @if(Request::segment(2)=='ayarlar') class="active" @endif><a href="{{ URL::to('modpanel/ayarlar') }}"><i class="icol-dashboard"></i> Ayarlar</a></li>
                </ul>
            </li>
            <li @if(Request::segment(1)=='modentry') class="active" @endif>
                <span title="Entry">
                    <i class="icon-align-justify"></i>
                    <span class="nav-title">Entry</span>
                </span>
                <ul class="inner-nav">
                    <li @if(Request::segment(2)=='entrylistele') class="active" @endif><a href="{{ URL::to('modentry/entrylistele') }}"><i class="icon-list"></i> Entry Listesi</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>

<div id="sidebar-separator"></div>