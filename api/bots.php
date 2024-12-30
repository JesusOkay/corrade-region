<?php
// La URL de la página de la que queremos obtener el contenido
$url = 'http://api.gridsurvey.com/simquery.php?region=FETCH_RANDOM_ONLINE_REGION_FROM_DATABASE';

// Usamos file_get_contents para obtener el contenido de la página
$response = file_get_contents($url);

// Comprobamos si la respuesta se obtuvo correctamente
if ($response === FALSE) {
    echo 'Hubo un error al obtener el contenido de la página.';
} else {
    // Imprimimos el contenido dentro del body del PHP
    echo '<html>';
    echo '<head><title>Contenido Extraído</title></head>';
    echo '<body>';
    echo $response; // Imprimimos el contenido del body de la página web
    echo '</body>';
    echo '</html>';
}
?>
