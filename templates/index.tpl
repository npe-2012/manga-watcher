<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Manga Watcher</title>

{* including css files *}
{$cb_styles}
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
			<div class="span4 promo">
				<a href="#" title="Скоро на Windows Phone 8"><img src="/img/windows_phone.jpg" alt="Скоро на Windows Phone 8" class="img-polaroid"></a>
			</div>
			<div class="span4 search">
				    <form class="form-search">
					    <input type="text" class="input-medium search-query" placeholder="Поиск">
					    <button type="submit" class="btn">Найти</button>
				    </form>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<div class="navbar">
				    <div class="navbar-inner">
					    {$cb_navigation}
				    </div>
			    </div>
			</div>
		</div>
		<div class="row body">
			<div class="span9 content">
				{$content}
			</div>
			<div class="span3 sidebar">
				{$sidebar}
			</div>
		</div>
		<div class="row footer">
			<div class="span3">
				{$cb_navigation}
			</div>
			<div class="span9">
				<p class="lead">2013 &copy; MangaWatcher</p>
				<small>Daniil Shinkarev and Sergey Kuzmich</small>
			</div>
		</div>
	</div>

{* including js files *}
{$cb_scripts}
{* /including ... *}

</body>
</html>