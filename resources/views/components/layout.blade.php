@props(['title', 'skipSiteName' => false])
<html>
<head>
    <title>{{ $title ?? '' }}{{ $title && !$skipSiteName ? ' | ' : '' }}{{ !$skipSiteName ? 'Krisalis.@' : '' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
{{ $slot }}
</body>
</html>
