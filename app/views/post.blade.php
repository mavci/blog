<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{{ $post->title }}}</title>
</head>
<body>
	<h1>{{{ $post->title }}}</h1>

	<p>{{ $post->content }}</p>

	<p>Yazar: {{ $post->user->name }}</p>

	<p><a href="/">Geri dön</a>
</body>
</html>