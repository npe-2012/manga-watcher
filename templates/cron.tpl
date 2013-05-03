<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Manga Watcher</title>

	<link rel="icon" href="/img/favicon.gif" type="image/gif">

{* including css files *}
{$cb_styles_cron}
{* /including ... *}

</head>
<body>
	<div class="container">
		<div class="row header">
			<div class="span4">
				<a href="http://manga-watcher.loc" class="logo">
					<img src="http://dummyimage.com/180x100/4d494d/686a82.gif&text=Manga+Watcher" alt="Manga Watcher" class="img-circle">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<div class="navbar">
				    <div class="navbar-inner">
					    {$cb_navigation_cron}
				    </div>
			    </div>
			</div>
		</div>
		<div class="row body">
			<div class="span12 content">
				{$content}
			</div>
		</div>
		<div class="row footer">
			<div class="span3">
			</div>
			<div class="span9">
				<p class="lead">2013 &copy; MangaWatcher</p>
				<small>Daniil Shinkarev and Sergey Kuzmich</small>
			</div>
		</div>
	</div>

{* including js files *}
{$cb_scripts_cron}
{* /including ... *}

</body>
</html>