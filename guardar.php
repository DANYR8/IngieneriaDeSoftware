$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$numero = $_POST['numero_celular'];
$nss = $_POST['nss'];

if ($tipo == "oficio") {
    $edad = $_POST['edad'];

    $sql = "INSERT INTO oficios (nombre, apellido, edad, numero_celular, nss)
            VALUES ('$nombre', '$apellido', '$edad', '$numero', '$nss')";
} else {
    $sql = "INSERT INTO contratistas (nombre, apellido, numero_celular, nss)
            VALUES ('$nombre', '$apellido', '$numero', '$nss')";
}

$result = pg_query($conn, $sql);

if ($result) {
    echo "Registro guardado 👍";
} else {
    echo "Error: " . pg_last_error($conn);
}
?>