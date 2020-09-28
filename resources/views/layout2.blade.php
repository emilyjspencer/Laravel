<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet"/>
<link href="css/fonts.css" rel="stylesheet" />


@yield ('header')
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="/">Testing Laravel</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="{{ (request()->is('/')) ? 'current_page_item' : '' }}"><a href="/" accesskey="1" title="">Homepage</a></li>
				<li class="{{ (request()->is('/songlist')) ? 'current_page_item' : '' }}"><a href="/songlist" accesskey="2" title="">Songlist</a></li>
				<li class="{{ (request()->is('/about')) ? 'current_page_item' : '' }}"><a href="/about" accesskey="3" title="">About</a></li>
				<li class="{{ (request()->is('/booklist')) ? 'current_page_item' : '' }}"><a href="/booklist" accesskey="4" title="">Booklist</a></li>
				<li class="{{ (request()->is('/emily')) ? 'current_page_item' : '' }}"><a href="/emily" accesskey="5" title="">Emily</a></li>
			</ul>
		</div>
	</div>
  @yield ('content')
</body>
</html>
