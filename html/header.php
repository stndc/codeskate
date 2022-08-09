<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$data['page_title'];?></title>

<!-- Custon CSS -->
<link rel="stylesheet" href="<?=base_url();?>/">

<style type="text/css">
*, ::after, ::before {
	box-sizing: border-box;
}

body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
}

a {color: #FFF;}

p {
	margin-top: 0;
	margin-bottom: 1rem;
	display: block;
	margin-block-start: 1em;
	margin-block-end: 1em;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
}

h1, h5 {
	margin-top: 0;
	margin-bottom: 0.5rem;
	font-weight: 500;
	line-height: 1.2;
}

h1 {
	font-size: calc(1.375rem + 1.5vw);
}

h5 {
	font-size: 1.25rem;
}

.d-flex {
	display: flex;
}

.justify-content-center {
	justify-content: center;
}

.align-items-center {
	align-items: center;
}

.vh-100 {
	height: 100vh;
}

.container {
	width: 100%;
	padding-right: 7.5rem;
	padding-left: 7.5rem;
	margin-right: auto;
	margin-left: auto;
}

.bg-codeskate {
	background-image: url('assets/img/codeskate.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	color: #FFF;
}

.bg-codeskate a {
	color: #FFF;
}

@media (min-width: 768px)
.container {
    max-width: 720px;
}

@media (min-width: 992px)
.container {
    max-width: 960px;
}
</style>
</head>
<body>
