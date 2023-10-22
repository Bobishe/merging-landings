<?php
function d($var, $return = false)
{
    $str = '<pre>' . var_export($var, true) . '</pre>';

    if ($return) {
        return $str;
    } else {
        print $str;
    }
}

function my_dd($var)
{
    $str = d($var, true);

    print $str;
    exit;
}

if (!function_exists('array_key_first')) {
    function array_key_first(array $arr)
    {
        foreach ($arr as $key => $unused) {
            return $key;
        }

        return NULL;
    }
}

function getOptions()
{
    static $options;

    if (empty($options)) {
        $options = require_once('preset.php');
    }

    return $options;
}

function getUserIP()
{
    $ipAddress = null;

    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipAddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipAddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipAddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipAddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipAddress = $_SERVER['REMOTE_ADDR'];

    if ($ipAddress === '[::1]' || filter_var($ipAddress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
        $ipAddress = '127.0.0.1';
    }

    return $ipAddress;
}

function detectBranchDataByIp($ip = null)
{
    $ip = $ip ?? getUserIP();
    $options = getOptions();
    $url = "{$options['cabinetUrl']}/api/v1/KbhRGQejYUlX2jPQ4a4B/branch-by-ip?ip={$ip}";

    try {
        $ipDataJson = file_get_contents($url);
        $ipData = json_decode($ipDataJson);
    } catch (\Exception $e) {
        $ipData = null;
    }

    return $ipData;
}

function getBranchId($ip = null, $allowedIds = [], $fallbackId = 777)
{
    $options = getOptions();

    if (count($options['leadData']['branch_id']) === 1) {   //  1 город и не нужно автоопределение
        return array_key_first($options['leadData']['branch_id']);
    }

    $ipData = detectBranchDataByIp($ip);

    if (!$ipData) {
        return $fallbackId;
    }

    $branchId = $ipData->branchData->id;

    if ($allowedIds && !in_array($branchId, $allowedIds)) {
        $branchId = $fallbackId;
    }

    return $branchId;
}

function getViewId()
{
    $viewId = $_COOKIE['view_id'] ?? null;

    if (!empty($viewId)) {
        setcookie('view_id', $viewId, time() + 3600 * 24);  /* срок действия 24 часа */

        return intval($viewId);
    }

    $options = getOptions();
    $branchIds = $options['leadData']['branch_id'];
    $allowedBranchIds = array_keys($branchIds);
    $branchId = getBranchId(null, $allowedBranchIds, $allowedBranchIds[0]);

    $viewData = [
        'branch_id' => $branchId,
        'thread_id' => $options['leadData']['thread_id'] ?? null,
        'thread_type' => $options['leadData']['thread_type'] ?? null,
        'direction_id' => $options['leadData']['direction_id'] ?? null,
        'new_offer_id' => $options['leadData']['offer_id'] ?? null,
        'tool_id' => $options['leadData']['tool_id'] ?? null,
        'ip' => getUserIP(),
        'host' => $_SERVER['HTTP_HOST'] ?? null,
        'uri' => $_SERVER['REQUEST_URI'] ?? null,
        'utm_source' => $_GET['utm_source'] ?? null,
        'utm_medium' => $_GET['utm_medium'] ?? null,
        'utm_campaign' => $_GET['utm_campaign'] ?? null,
        'utm_content' => $_GET['utm_content'] ?? null,
        'utm_term' => $_GET['utm_term'] ?? null,
    ];

    if (!$viewData['new_offer_id'] && $viewData['direction_id']) {
        unset($viewData['new_offer_id']);
    }

    $data = json_encode($viewData);
    $apiUrl = "{$options['apiUrl']}/add_view_data?idp={$options['idp']}";

    $curl = curl_init();
    $options = [
        CURLOPT_URL => $apiUrl,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_HTTPHEADER => ['Content-Type:application/json'],
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
    ];

    curl_setopt_array($curl, $options);

    try {
        $response = curl_exec($curl);
        $result = json_decode($response);
        $err = curl_error($curl);
//        $info = curl_getinfo($curl);
//        dd([$viewData, $err, $info]);

        curl_close($curl);

        if (!$err && !empty($result->view_id)) {
            $viewId = intval($result->view_id);
            setcookie('view_id', $viewId, time() + 3600 * 24);  /* срок действия 24 часа */
        }

    } catch (Exception $e) {
        // echo 'Выброшено исключение при json_decode: ', $e->getMessage(), "\n";

        // return;
    }

    return $viewId;
}
