<?php
require_once(__DIR__ . '/lib.php');

$options = getOptions();

if (empty($_REQUEST['phone'])) {
    $result = [
        'success' => false,
        'reponseCode' => null,
        'errorType' => 'noData Error',
        'errorText' => 'Поля phone и idp должны быть!',
    ];

    header('Content-Type: application/json');
    print json_encode($result);
    die();
}

$branchIds = $options['leadData']['branch_id'];
$allowedBranchIds = array_keys($branchIds);
$branchId = getBranchId(null, $allowedBranchIds, $allowedBranchIds[0]);
$data = [
    'branch_id' => $branchId,
    'thread_id' => $options['leadData']['thread_id'] ?? null,
    'thread_type' => $options['leadData']['thread_type'] ?? null,
    'direction_id' => empty($options['leadData']['direction_id']) ? null : $options['leadData']['direction_id'],
    'offer_id' => empty($options['leadData']['offer_id']) ? null : $options['leadData']['offer_id'],
    'view_id' => getViewId(),

    'phones' => [
        $_REQUEST['phone'],
    ],

    'name' => !empty($_REQUEST['name']) ? $_REQUEST['name'] : 'Без имени',
    'description' => $_REQUEST['description'] ?? null,
    'sub_id1' => $_REQUEST['sub_id1'] ?? null,
    'sub_id2' => $_REQUEST['sub_id2'] ?? null,
    'sub_id3' => $_REQUEST['sub_id3'] ?? null,
    'utm_source' => $_REQUEST['utm_source'] ?? null,
    'utm_medium' => $_REQUEST['utm_medium'] ?? null,
    'utm_campaign' => $_REQUEST['utm_campaign'] ?? null,
    'utm_content' => $_REQUEST['utm_content'] ?? null,
    'utm_term' => $_REQUEST['utm_term'] ?? null,

    'gaid' => $_REQUEST['gaid'] ?? null,
    'yaid' => $_REQUEST['yaid'] ?? null,
];

foreach ($data as $key => $val) {
    if (is_null($data[$key])) {
        unset($data[$key]);
    }
}

$strRules = [
    'name' => 50,
    'description' => 254,
    'utm_source' => 100,
    'utm_medium' => 100,
    'utm_campaign' => 100,
    'utm_content' => 100,
    'sub_id1' => 200,
    'sub_id2' => 200,
    'sub_id3' => 200,
];

foreach ($strRules as $key => $val) {
    if (!empty($data[$key])) {
        $data[$key] = mb_strimwidth(trim($data[$key]), 0, $val);
    }
}

$json = json_encode($data, JSON_PRETTY_PRINT);

$apiUrl = "{$options['apiUrl']}/lead?idp={$options['idp']}";
$curl = curl_init();
$options = [
    CURLOPT_URL => $apiUrl,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $json,
    CURLOPT_HTTPHEADER => [
        'Content-Type:application/json'
    ],
];

curl_setopt_array($curl, $options);

$response = curl_exec($curl);
$info = curl_getinfo($curl);
$err = curl_error($curl);

curl_close($curl);
//        var_dump([
//            '$response' => $response,
//            '$info' => $info,
//            '$err' => $err,
//        ]);

if ($err) {
    $result = [
        'success' => false,
        'reponseCode' => $info['http_code'] ?? null,
        'errorType' => 'cURL Error',
        'errorText' => $err,
    ];
} else {
    if (intval($info['http_code'] / 100) === 2) {   //  202, 204, ?200
        $result = [
            'success' => true,
            'reponseCode' => $info['http_code'],
            'errorType' => null,
            'errorText' => null,
        ];
    } else {
        try {
            $result = [
                'success' => false,
                'reponseCode' => $info['http_code'],
                'errorType' => 'API reject',
                'errorText' => $info['http_code'] . ' - ' . json_decode($response)->error->message,
            ];
        } catch (\Exception $e) {
            $result = [
                'success' => false,
                'reponseCode' => $info['http_code'],
                'errorType' => 'API response parse error',
                'errorText' => $info['http_code'] . ' - ' . var_export($response, 1),
            ];
        }
    }
}

header('Content-Type: application/json');
//$data['$apiUrl'] = $apiUrl;
print json_encode($data + $result);
die();
