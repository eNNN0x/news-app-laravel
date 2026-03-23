<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naujienos</title>
    <style>
        body { font-family: sans-serif; max-width: 900px; margin: 40px auto; padding: 0 20px; }
        .card { border: 1px solid #ddd; border-radius: 8px; padding: 16px; margin-bottom: 16px; }
        .btn { padding: 8px 16px; border-radius: 4px; border: none; cursor: pointer; text-decoration: none; }
        .btn-primary { background: #3b82f6; color: white; }
        .btn-warning { background: #f59e0b; color: white; }
        .btn-danger { background: #ef4444; color: white; }
        .alert { padding: 12px; border-radius: 4px; margin-bottom: 16px; background: #d1fae5; color: #065f46; }
    </style>
</head>
<body>
    <h1>Naujienos</h1>
    <a href="{{ route('news.create') }}" class="btn btn-primary">+ Nauja naujiena</a>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    @forelse($news as $item)
        <div class="card">
            <h2>{{ $item->title }}</h2>
            <p>{{ $item->excerpt }}</p>
            <small>{{ $item->created_at->format('Y-m-d H:i') }}</small>
            <br><br>
            <a href="{{ route('news.show', $item) }}" class="btn btn-primary">Skaityti</a>
            <a href="{{ route('news.edit', $item) }}" class="btn btn-warning">Redaguoti</a>
            <form action="{{ route('news.destroy', $item) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button class="btn btn-danger" onclick="return confirm('Ištrinti?')">Ištrinti</button>
            </form>
        </div>
    @empty
        <p>Naujienų nėra.</p>
    @endforelse

    {{ $news->links() }}
</body>
</html>