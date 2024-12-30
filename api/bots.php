<?php
// La URL de la página de la que queremos obtener el contenido
$url = 'http://api.gridsurvey.com/simquery.php?region=FETCH_RANDOM_ONLINE_REGION_FROM_DATABASE';

// Usamos file_get_contents para obtener el contenido de la página
$response = file_get_contents($url);

// La lista de UUIDs
$uuids = [
    "0815079d-5085-43d0-8035-ae09bfa4303a",
    "5d9b4e09-62eb-4467-ad06-4de73eb419fe",
    "a43bc927-60eb-4711-81c3-763d196646ae",
    "2cb676cf-8b59-4c9e-84cb-34383a18950d",
    "43086a02-34be-4b17-afce-4c1795de9ad1"
    // Más UUIDs...
];

// Calcular el índice secuencial basado en el número de ejecuciones
static $execution_count = 0; // Variable estática para mantener el contador
$current_index = $execution_count % count($uuids); // Calcular el índice

// Incrementar el contador (reinicia automáticamente en cada carga de PHP)
$execution_count++;

// Seleccionar la UUID en orden
$selected_uuid = $uuids[$current_index];

// Comprobamos si la respuesta se obtuvo correctamente
if ($response === FALSE) {
    echo 'Hubo un error al obtener el contenido de la página.';
} else {
    // Imprimir UUID y la respuesta de la región
    echo $selected_uuid . "\n";
    echo $response . "\n";
}
?>

