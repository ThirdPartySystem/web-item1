<!doctype html>
<html>
<head>
<meta charset="UTF-8">
{include file="common/meta.tpl"}
{include file="common/stylesheet.tpl"}
{include file="common/javascript.tpl"}
</head>

<body>
<div id="page">
<header>
<p class="logo"><img src="{$imageDir}/logo.png" width="200" height="75"></p>
<div class="wrapper">
<ul class="menu clearfix">
<li><a href="#">ホーム</a></li>
<li><a href="#">サービス</a></li>
<li><a href="#">企業情報</a></li>
<li><a href="#">お問い合わせ</a></li>
</ul>
</div>
</header>
<section id="content">
{include file="{$templatePath}"}
</section>
<footer>
</footer>
</div><!-- #page -->
</body>
</html>