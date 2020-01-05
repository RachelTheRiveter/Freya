<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Freya</h1>
    <ul>
        @forelse ($templates as $template)
            <li><a href="{{ $template->path()  }}">{{ $template->title }}</a></li>

       @empty
            <li>No Templates Yet!</li>
        @endforelse
    </ul>
</body>
</html>
