<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Post por aprobar</h1>
    <p>se a creado un pos nuevo que necesita tu aprobacion</p>

    <a href="{{route('posts.show', $post)}}">Click aquí para aprobar</a>
</body>
</html>