<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>Naujiena</title>
    <style>
        body { font-family: sans-serif; max-width: 700px; margin: 40px auto; padding: 0 20px; }
    </style>
</head>
<body>
    <a href="{{ route('news.index') }}">← Atgal</a>
    <h1>{{ $news->title }}</h1>
    <small>{{ $news->created_at->format('Y-m-d H:i') }}</small>
    <p>{!! nl2br(e($news->content)) !!}</p>
</body>
</html>