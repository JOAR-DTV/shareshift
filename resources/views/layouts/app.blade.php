<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
<title>user register</title>
<!-- CSS と JavaScript -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
<script src="{{ asset('./js/liff.js') }}"></script>
</head>
<body>
    @yield('content')
</body>
</html>