<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>

<h2>Crear cuenta</h2>

<form action="guardar.php" method="POST">

    <label>Tipo de usuario:</label>
    <select name="tipo">
        <option value="oficio">Oficio</option>
        <option value="contratista">Contratista</option>
    </select>
    <br><br>

    <input type="text" name="nombre" placeholder="Nombre" required><br><br>
    <input type="text" name="apellido" placeholder="Apellido" required><br><br>

    <input type="number" name="edad" placeholder="Edad (solo oficio)"><br><br>

    <input type="text" name="numero_celular" placeholder="Celular" required><br><br>
    <input type="text" name="nss" placeholder="NSS" required><br><br>

    <button type="submit">Registrar</button>

</form>

</body>
</html>