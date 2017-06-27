<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kappert</title>
	<link rel="stylesheet" href="<?= URL ?>css/bootstrap-3.3.7.css">
	<link rel="stylesheet" href="<?= URL ?>">
</head>
<body>
	<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?= URL ?>home/index">Home</a>
            </div>

            <ul class="nav navbar-nav">
                <li><a href="<?= URL ?>challenge/register">Registreer</a></li>
	        </ul>

            <!-- navbar part that's on the right side -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= URL ?>challenge/login"><span class="glyphicon glyphicon-log-in"></span> Inloggen</a></li>
            </ul>

        </div>
	</nav>