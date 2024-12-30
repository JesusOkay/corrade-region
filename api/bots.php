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
    "43086a02-34be-4b17-afce-4c1795de9ad1",
    "f5771f46-c0a9-4682-be59-137b94f4245d",
    "553540ab-0532-4a30-8f9f-3da4f927b08c",
    "c16f681d-3ff8-4b62-8277-19c02510ed3a",
    "ff418a9c-66ca-43a6-815a-2365009274e8",
    "72c31d70-95e6-486a-bef4-204b67dfd4a4",
    "73437a07-2dcb-44be-8f54-e055663a5df8",
    "5bf088e9-2a90-4db0-9e2a-9ba8abb29f7a",
    "ac0da485-c13c-4dce-849d-5abd85b3805c",
    "3d98c04c-4286-42c3-b3d7-34942beb723c",
    "11eaa4e3-6343-4e94-b73b-9ce5f255f2b6",
    "6f2583ce-2193-4379-8552-ce9917effb47",
    "aafc604e-65f0-43cf-8c44-b6786d15117e",
    "f12569ec-f386-4a3d-b9d7-c8504bbd3b5d",
    "ad9fcbf1-1caa-45d8-bcdb-3df00ed9e985",
    "39d9cc64-d80e-4387-8bc3-a14c49032e67",
    "e9305f9e-c485-4908-acf1-03646d705a78",
    "c6eff6fd-c17f-4c80-a25e-fee780f839b3",
    "3ea42eee-05a5-4496-b288-2d61fc220dce",
    "c6377c32-d1a6-4681-92c1-50f2046affc2",
    "54fd08cb-ad67-4788-a023-a5e49ef46313",
    "6876e961-d58d-4d86-975d-fae59f94d48c",
    "227d1407-dcfa-4746-b60f-a2e0921e6708",
    "ab7dd28a-3d27-4f5b-9026-2aedc97041cb",
    "3ac7b7c4-822b-44a5-8a46-8582000a56b9",
    "886a68ac-7923-4aff-9830-455a3b1858c4",
    "890c73b6-589b-4d32-be05-7c9a5d2400cd",
    "47d7413d-bb37-422e-9ebb-771cdee5c6bf",
    "241a4240-0692-4d4a-b1e9-d3f7594c7238",
    "c40ea477-1b9d-4479-b974-4f766920bc5f",
    "a488c6bc-5503-40b8-9338-16c5dd9f36ed",
    "9e33ea65-3a17-417e-b5bb-5dcb38431afc",
    "ffee69c2-b760-4819-aabb-aa555c94cbfe",
    "4d43da5a-939a-4b25-b7f9-b79091e61b06",
    "0c5c33c0-c2f3-44f9-9de2-256da29a18fb",
    "a7495b52-093b-4399-8150-0b6f24742746",
    "7bf160f7-2533-450f-a7a9-2455ce5ba5cd",
    "2fa5ac21-7574-4de0-ac9e-9b2d1240d5d7",
    "12dcb21b-0d1b-4135-9266-e3a498364c65",
    "b8b473e3-e331-4c30-a45c-7bffa62c0b8f",
    "11b981dc-a61e-439c-a653-fea799c16bc2",
    "f310494f-7f1c-42fa-a742-8b728f579c49"
];

// Comprobamos si la respuesta se obtuvo correctamente
if ($response === FALSE) {
    echo 'Hubo un error al obtener el contenido de la página.';
} else {
    // Recorremos la lista de UUIDs en orden
    foreach ($uuids as $uuid) {
        // Imprimir UUID y la respuesta de la región
        echo . $uuid . "\n";
        echo . $response . "\n";
    }
}
?>
