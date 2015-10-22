<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">			
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ URL::to('/') }}" class="navbar-brand">Mku Sozluk</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ara">
                </div>
                <button type="submit" class="btn btn-default">Getir</button>
            </form>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ URL::to('/') }}">Anasayfa</a></li>
                <li><a href="giris">Giriş</a></li>
                <li><a href="kayitol">Kayit Ol</a></li>
            </ul>
        </nav>
    </div>
</header>