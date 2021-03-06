<aside id="sidebar">
    <nav id="navigation" class="collapse">
        <ul>
            <li @if(Request::segment(1)=='panel') class="active" @endif>
                <span title="Ayarlar">
                    <i class="icon-home"></i>
                    <span class="nav-title">Ayarlar</span>
                </span>
                <ul class="inner-nav">
                    <li @if(Request::segment(2)=='ayarlar') class="active" @endif><a href="{{ URL::to('panel/ayarlar') }}"><i class="icol-dashboard"></i> Ayarlar</a></li>
                </ul>
            </li>
            <li @if(Request::segment(1)=='kullanici') class="active" @endif>
                <span title="Kullanıcı">
                    <i class="icon-official"></i>
                    <span class="nav-title">Kullanıcı</span>
                </span>
                <ul class="inner-nav">
                    <li @if(Request::segment(2)=='kullaniciekle') class="active" @endif><a href="{{ URL::to('kullanici/kullaniciekle') }}"><i class="icon-plus-sign"></i> Kullanıcı Ekle</a></li>
                    <li @if(Request::segment(2)=='kullanicilistele') class="active" @endif><a href="{{ URL::to('kullanici/kullanicilistele') }}"><i class="icon-list"></i> Kullanıcı Listesi</a></li>
                </ul>
            </li>
            <li @if(Request::segment(1)=='entry') class="active" @endif>
                <span title="Entry">
                    <i class="icon-align-justify"></i>
                    <span class="nav-title">Entry</span>
                </span>
                <ul class="inner-nav">
                    <li @if(Request::segment(2)=='entrylistele') class="active" @endif><a href="{{ URL::to('entry/entrylistele') }}"><i class="icon-list"></i> Entry Listesi</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>

<div id="sidebar-separator"></div>