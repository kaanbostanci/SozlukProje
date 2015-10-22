<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">

    <title>MkuSozluk-Kayit Ol</title>

    <link rel="stylesheet" href="{{URL::to('Frontend/login/css/style.css')}}">

    </head>

    <body>

    <html lang="en-US">
        <head>

            <meta charset="utf-8">

        <title>Kayit Ol</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

            <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
         <![endif]-->

            </head>

            <body>
                
            <div class="container">

                <div id="login">

                    <form action="{{ URL::to('kayitol/kayit') }}" method="post">

                        <fieldset class="clearfix" action="">
                            <p><span class="fontawesome-user"></span><input type="text" name="adsoyad" value="Kullanici Adi Giriniz" onBlur="if (this.value == '')
                           this.value = 'E-mail'" onFocus="if (this.value == 'E-mail')
                                       this.value = ''" required></p> 
                                <p><span class="fontawesome-user"></span><input type="text" name="email" value="E-mail Giriniz" onBlur="if (this.value == '')
                        this.value = 'E-mail'" onFocus="if (this.value == 'E-mail')
                                    this.value = ''" required></p> 
                                    <p><span class="fontawesome-lock"></span><input type="password" name="password" value="Şifre Giriniz" onBlur="if (this.value == '')
                        this.value = 'Şifre'" onFocus="if (this.value == 'Şifre')
                                    this.value = ''" required></p> 
                                       
                                            <p><input type="submit" class="btn btn-success btn-block btn-large" value="Kayit Ol"></p>
<p>Kayitli misin ? <a href="{{ URL::to('giris') }}">Şimdi Giriş Yap</a></p>

                                                </fieldset>
                                                {{Form::token()}}

                                                </form>
                                                </div> <!-- end login -->

                                                </div>

                                                </body>
                                                </html>

                                                </body>

                                                </html>