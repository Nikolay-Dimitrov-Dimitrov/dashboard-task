<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Dashboard</title>
</head>
<body>
    <div class="grid-container">
        @for ($i = 1; $i <= 9; $i++)
            <div class="grid-item">
                @if (isset($buttons[$i]))
                    <a href="{{ $buttons[$i]->url }}" class="button" style="background-color: {{ $buttons[$i]->color }};">Link</a>
                    <form method="POST" action="{{ route('delete', $i) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                @else
                    <a href="{{ route('configure', $i) }}" class="button configure">Configure</a>
                @endif
            </div>
        @endfor
    </div>
</body>
</html>
