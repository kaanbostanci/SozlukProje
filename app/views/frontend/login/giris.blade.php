<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>MkuSozluk-Giriş Yap</title>

    <link rel="stylesheet" href="{{URL::to('Frontend/login/css/style.css')}}">

</head>

<body>

  <html lang="en-US">
  <head>

    <meta charset="utf-8">

    <title>Giriş Yap</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

  </head>

  <body>

    <div class="container">

      <div id="login">

        <form action="{{ URL::to('giris/girispost') }}" method="post">

          <fieldset class="clearfix" action="">

            <p><span class="fontawesome-user"></span><input type="text" name="email" value="E-mail" onBlur="if(this.value == '') this.value = 'E-mail'" onFocus="if(this.value == 'E-mail') this.value = ''" required></p> 
            <p><span class="fontawesome-lock"></span><input type="password" name="password" value="Şifre" onBlur="if(this.value == '') this.value = 'Şifre'" onFocus="if(this.value == 'Şifre') this.value = ''" required></p> 
            <p><input type="submit" class="btn btn-success btn-block btn-large" value="Giriş Yap"></p>

          </fieldset>
            {{Form::token()}}

        </form>

        <p>Üye Değil misin ? <a href="{{ URL::to('kayitol') }}">Şimdi Kayıt ol</a></span></p>

      </div> 

    </div>

  </body>
</html>

</body>

</html>