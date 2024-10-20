@props(['title', 'skipSiteName' => false])
<html>
<head>
    <title>{{ $title ?? '' }}{{ $title && !$skipSiteName ? ' | ' : '' }}{{ !$skipSiteName ? 'Krisalis.@' : '' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
{{ $slot }}
</body>
</html>
