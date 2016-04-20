<!doctype html>
<html lang="en" id="global" itemscope itemtype="http://schema.org/WebPage">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

	<title>@yield('title') | Lunch & Learn</title>
	<meta name="description" content="@yield('description')">

	<link rel="stylesheet" href="/assets/css/style.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!--[if lte IE 9]>
	<script src="/assets/js/ie9.min.js"></script>
	<![endif]-->
</head>
<body>

@yield('content')

<script src="/assets/js/script.min.js"></script>
</body>
</html>