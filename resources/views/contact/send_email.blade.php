<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Send Email Marbyt</title>
</head>
<body>
    <p>Tienes un nuevo correo desde la web</p>
    <p>Te ha contactado {{ $email }}</p>
    <p>Datos</p>
    <p><?php print_r($datos) ?></p>
</body>
</html>