
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Enviar Foto</h1>
   <form action="/images" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="photo"> <br>
    <input type="file" name="image"><br>

    <button type="submit">Enviar</button>
    
</body>
</html>