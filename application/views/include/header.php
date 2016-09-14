<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
         <title><?php echo $title;?></title>
        <!--Dependencies -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>dist/app.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/bootstrap/dist/css/bootstrap.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>node_modules/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/app.js"></script>

    </head>
    <body>
	<div class="main">
	    <div class="header">
			<div class="header__logo">
				<a href="/login"><img src="<?php echo base_url(); ?>img/icon.png"></a>
			</div>
			<h2 class="header__title">Login</h2>
			<div class="header__user">
				<div class="header__user__content">
					<img src="<?php echo base_url(); ?>img/user.png">
					<p class="header__user__text">Usuario <span><a href="pages/venda.html">sair</a></span></p>
				</div>
			</div>
		</div>
		<div class="main__content">
			<div class="main__content__menu<?php echo $classe_menu; ?>">
				<ul class="menu__itens">
					<li class="menu__item"><a href="#">Usuario</a></li>
					<li class="menu__item"><a href="#">Vendas</a></li>
					<li class="menu__item"><a href="#">Clientes</a></li>
					<li class="menu__item"><a href="#">Medicamentos</a></li>
				</ul>
			</div>
