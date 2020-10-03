<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">


</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">SimpleWork</a></h1>
		</div>
		<div id="menu">
			<ul>
			<li class="{{ (request()->path('/')) ? 'active' : '' }}"><a href="/" accesskey="1" title="">Homepage</a></li>
				<li class="{{ (request()->is('/ourclients')) ? 'active' : '' }}"><a href="ourclients" accesskey="2" title="">Our Clients</a></li>
                <li class="{{ (request()->is('/about')) ? 'active' : '' }}"><a href="/about" accesskey="3" title="">About Us</a></li>
				<li class="{{ (request()->is('/articles')) ? 'active' : '' }}"><a href="/articles" accesskey="4" title="">Articles</a></li>
                <li class="{{ (request()->is('/contact')) ? 'active' : '' }}"><a href="/contact" accesskey="5" title="">Contact Us</a></li>
                <li class="{{ (request()->is('/template')) ? 'active' : '' }}"><a href="/template" accesskey="6" title="">Template</a></li>
			</ul>
		</div>
	</div>
	@yield ('header')

		
			
				
			</div>
		</div>
	</div>
</div>

</body>
</html>
