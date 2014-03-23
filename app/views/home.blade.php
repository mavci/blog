<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Yazılar</title>
</head>
<body>
	
	<ul>
		@foreach ($posts as $post)
		<li><a href="/post/{{ $post->slug }}">{{{ $post->title }}}</a></li>
		@endforeach
	</ul>

</body>
</html>