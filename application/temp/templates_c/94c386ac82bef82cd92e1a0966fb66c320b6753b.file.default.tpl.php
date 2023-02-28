<?php /* Smarty version Smarty-3.1.7, created on 2012-01-10 17:31:58
         compiled from "C:\Documents and Settings\Talentos4\Desktop\Servidor\htdocs\YooInternet\application\templates\layouts\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253384f0c31238e8ab0-56450782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94c386ac82bef82cd92e1a0966fb66c320b6753b' => 
    array (
      0 => 'C:\\Documents and Settings\\Talentos4\\Desktop\\Servidor\\htdocs\\YooInternet\\application\\templates\\layouts\\default.tpl',
      1 => 1326213113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253384f0c31238e8ab0-56450782',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0c31238e99e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0c31238e99e')) {function content_4f0c31238e99e($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Documents and Settings\\Talentos4\\Desktop\\Servidor\\htdocs\\YooInternet\\libraries\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="pt-br" xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
    <head>
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        
        <link href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/media/css/framework/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/media/css/framework/reset.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/media/css/framework/normalize.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/media/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/media/css/superfish.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/media/css/buttons/btn.css" rel="stylesheet" type="text/css" />
        
        <script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/media/js/jQuery.superfish.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/media/js/jQuery.hoverIntent.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/media/js/jQuery.twitter.js"></script>

    </head>
    <body>
        <div class="top-bar">
            <div class="container">

                <ul class="nav sf-menu2">
                    <li><a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/" title="Vá para o inicio">Inicio</a></li>
                    <li><a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/empresa/" title="Saiba Quem Somos">Quem Somos</a></li>
                    <li><a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/servicos/" title="Nosos serviços">Serviços</a></li>
                    <li><a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/contato/" title="Entre em contato">Contato</a></li>
                </ul>

                <ul class="social">
                    <li><a class="twitter" href="http://twitter.com/yoointernet">twitter</a></li>
                    <li><a class="facebook" href="https://www.facebook.com/pages/YOO-Internet-ltda/200642183290159">facebook</a></li>
                    <li><a class="mail" href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/contato/" title="Entre em contato">email</a></li>
                </ul>

            </div>
        </div><!-- top-bar -->

        <div class="header">
            <div class="container">
                <div class="logo-container">
                    <a class="logo" href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/" title="<?php echo $_smarty_tpl->getConfigVariable('name');?>
 - <?php echo $_smarty_tpl->getConfigVariable('slogan');?>
">
                        <img src="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/media/img/logo.png" alt="<?php echo $_smarty_tpl->getConfigVariable('name');?>
 - <?php echo $_smarty_tpl->getConfigVariable('slogan');?>
" />
                    </a>
                    <span class="tagline"><?php echo $_smarty_tpl->getConfigVariable('slogan');?>
</span>
                </div>

                <ul id="main-nav" class="sf-menu">
                    <li><a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/" title="Ir para Home">Home</a></li>
                    <li><a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/servicos/" title="Nosos Serviços">Serviços</a>
                        <ul>
                            <li><a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/servicos/criacao/" title="Criação de Sites">Criação de Sites</a></li>
                            <li><a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/servicos/hospedagem/" title="Hospedagem de Sites">Hospedagem de Sites</a></li>
                            <li><a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/servicos/administracao/" title="Administração de Sites">Administração de Sites</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/empresa/" title="Saiba Quem Somos">Quem Somos</a></li>
                    <li><a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/contato/" title="Contato">Contato</a></li>
                </ul>

            </div>
        </div><!-- header -->

        <div class="footer">
            <div class="container">
                <div class="row">

                    <div class="span4">
                        <h3>Oportunidade...</h3>
                        <p>
                            Conheça o nosso <a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/afiliados/" title="Programa de Afiliados"><b>Programa de Afiliados</b></a> e ganhe dinheiro sem sair de casa. Tenha benefícios exclusivos em nosso 
                            <a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/afiliados/" title="Clube de Vantagens"><b>Clube de Vantagens</b></a>, ganhos em dinheiro, benefícios e vantagens exclusivas.
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
                        <img style="margin-bottom: 10px;" src="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/media/img/logo-small.png" alt="" />
                        <p class="footer-description">YOO Internet, empresa especializada na criação de sites e na hospedagem de sites e arquivos. Entre em <a href="#">contato</a> . </p>
                    </div>

                </div>  
            </div>
        </div><!-- footer -->

        <div class="small-footer container">
            <div class="footer-left"><p>Copyright &copy; <?php echo $_smarty_tpl->getConfigVariable('name');?>
 2007-<?php echo smarty_modifier_date_format(time(),"%Y");?>
. Todos os direitos reservados.</p></div>
            <div class="footer-right">
                <p><a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/" title="Home">Home</a> / <a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/empresa/" title="Saiba Quem Somos">Quem Somos</a> / <a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/portfolio/" title="Nosso Portfólio">Portfólio</a> / <a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/servicos/" title="Nossos Serviços">Serviços</a> / <a href="<?php echo $_smarty_tpl->getConfigVariable('url');?>
/contato/" tite="Contato">Contato</a></p>
            </div>
        </div>

    </body>
</html><?php }} ?>