<!-- resources/views/news/edit.blade.php -->
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>Redaguoti</title>
    <style>
        body { font-family: sans-serif; max-width: 700px; margin: 40px auto; padding: 0 20px; }
        input, textarea { width: 100%; padding: 8px; margin-bottom: 12px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        .btn { padding: 8px 16px; border-radius: 4px; border: none; cursor: pointer; }
        .btn-primary { background: #3b82f6; color: white; }
        .error { color: #ef4444; font-size: 0.875rem; }
    </style>
</head>
<body>
    <h1>Redaguoti naujieną</h1>
    <a href="{{ route('news.index') }}">← Atgal</a>

    <form action="{{ route('news.update', $news) }}" method="POST">
        @csrf @method('PUT')
        <label>Pavadinimas</label>
        <input type="text" name="title" value="{{ old('title', $news->title) }}">
        @error('title') <p class="error">{{ $message }}</p> @enderror

        <label>Turinys</label>
        <textarea name="content" rows="8">{{ old('content', $news->content) }}</textarea>
        @error('content') <p class="error">{{ $message }}</p> @enderror

        <button type="submit" class="btn btn-primary">Atnaujinti</button>
    </form>
</body>
</html>