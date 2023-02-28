<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="pt-br" xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
    <head>
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        {* css *}
        <link href="{#url#}/media/css/framework/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{#url#}/media/css/framework/reset.css" rel="stylesheet" type="text/css" />
        <link href="{#url#}/media/css/framework/normalize.css" rel="stylesheet" type="text/css" />
        <link href="{#url#}/media/css/style.css" rel="stylesheet" type="text/css" />
        <link href="{#url#}/media/css/superfish.css" rel="stylesheet" type="text/css" />
        <link href="{#url#}/media/css/buttons/btn.css" rel="stylesheet" type="text/css" />
        {* js *}
        <script type="text/javascript" src="{#url#}/media/js/jQuery.superfish.js"></script>
        <script type="text/javascript" src="{#url#}/media/js/jQuery.hoverIntent.js"></script>
        <script type="text/javascript" src="{#url#}/media/js/jQuery.twitter.js"></script>

    </head>
    <body>
        <div class="top-bar">
            <div class="container">

                <ul class="nav sf-menu2">
                    <li><a href="{#url#}/" title="Vá para o inicio">Inicio</a></li>
                    <li><a href="{#url#}/empresa/" title="Saiba Quem Somos">Quem Somos</a></li>
                    <li><a href="{#url#}/servicos/" title="Nosos serviços">Serviços</a></li>
                    <li><a href="{#url#}/contato/" title="Entre em contato">Contato</a></li>
                </ul>

                <ul class="social">
                    <li><a class="twitter" href="http://twitter.com/yoointernet">twitter</a></li>
                    <li><a class="facebook" href="https://www.facebook.com/pages/YOO-Internet-ltda/200642183290159">facebook</a></li>
                    <li><a class="mail" href="{#url#}/contato/" title="Entre em contato">email</a></li>
                </ul>

            </div>
        </div><!-- top-bar -->

        <div class="header">
            <div class="container">
                <div class="logo-container">
                    <a class="logo" href="{#url#}/" title="{#name#} - {#slogan#}">
                        <img src="{#url#}/media/img/logo.png" alt="{#name#} - {#slogan#}" />
                    </a>
                    <span class="tagline">{#slogan#}</span>
                </div>

                <ul id="main-nav" class="sf-menu">
                    <li><a href="{#url#}/" title="Ir para Home">Home</a></li>
                    <li><a href="{#url#}/servicos/" title="Nosos Serviços">Serviços</a>
                        <ul>
                            <li><a href="{#url#}/servicos/criacao/" title="Criação de Sites">Criação de Sites</a></li>
                            <li><a href="{#url#}/servicos/hospedagem/" title="Hospedagem de Sites">Hospedagem de Sites</a></li>
                            <li><a href="{#url#}/servicos/administracao/" title="Administração de Sites">Administração de Sites</a></li>
                        </ul>
                    </li>
                    <li><a href="{#url#}/empresa/" title="Saiba Quem Somos">Quem Somos</a></li>
                    <li><a href="{#url#}/contato/" title="Contato">Contato</a></li>
                </ul>

            </div>
        </div><!-- header -->

        <div class="footer">
            <div class="container">
                <div class="row">

                    <div class="span4">
                        <h3>Oportunidade...</h3>
                        <p>
                            Conheça o nosso <a href="{#url#}/afiliados/" title="Programa de Afiliados"><b>Programa de Afiliados</b></a> e ganhe dinheiro sem sair de casa. Tenha benefícios exclusivos em nosso 
                            <a href="{#url#}/afiliados/" title="Clube de Vantagens"><b>Clube de Vantagens</b></a>, ganhos em dinheiro, benefícios e vantagens exclusivas.
                        </p>
                        <a style="margin-top: 10px;" class="small-btn blue rounded-1" href="#" title="Saiba mais sobre o programa de afiliados">Saiba Mais</a>
                    </div>

                    <div class="span4">
                        <h3>Politica de Qualidade</h3>
                        <p>Mascetur ridiculus mus. <a href="#">Nullam faucibus, nisi sed</a> ultricies elementum, magna mauris pharetra.</p>
                        <p>Vivamus et nisl nulla. Orci lacus adipiscing ipsum, vitae eleifend lorem velit vitae turpis.</p>
                        <a style="margin-top: 10px;" class="small-btn blue rounded-1" href="#">Read more</a>
                    </div>

                    <div class="span4">
                        <h3>Novidades...</h3>
                        <div class="tweet"></div>
                        <a class="small-btn blue rounded-1" href="http://twitter.com/yoointernet">Siga-nos no Twitter</a>
                    </div>

                    <div class="span4">
                        <img style="margin-bottom: 10px;" src="{#url#}/media/img/logo-small.png" alt="" />
                        <p class="footer-description">YOO Internet, empresa especializada na criação de sites e na hospedagem de sites e arquivos. Entre em <a href="#">contato</a> . </p>
                    </div>

                </div>  
            </div>
        </div><!-- footer -->

        <div class="small-footer container">
            <div class="footer-left"><p>Copyright &copy; {#name#} 2007-{$smarty.now|date_format:"%Y"}. Todos os direitos reservados.</p></div>
            <div class="footer-right">
                <p><a href="{#url#}/" title="Home">Home</a> / <a href="{#url#}/empresa/" title="Saiba Quem Somos">Quem Somos</a> / <a href="{#url#}/portfolio/" title="Nosso Portfólio">Portfólio</a> / <a href="{#url#}/servicos/" title="Nossos Serviços">Serviços</a> / <a href="{#url#}/contato/" tite="Contato">Contato</a></p>
            </div>
        </div>

    </body>
</html>