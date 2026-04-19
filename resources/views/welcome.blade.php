<!DOCTYPE html>
<html>
<head>
    <title>Laravel + React</title>
    @vite(['resources/js/app.jsx'])
</head>
<body>

<div id="app" data-status="{{ $status ?? 'error' }}"></div>

</body>
</html>