<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendController extends Controller
{
    public function send_lead(Request $request)
    {
        // Получаем данные из POST-запроса
        $postData = $request->all();


        //отправляем лида на api
        $params = json_encode([
            //  'direction_id' => 1, //  ОБЯЗАТЕЛЬНО, если не указан offer_id
            'offer_id' => 1, //  ОБЯЗАТЕЛЬНО, если не указан direction_id
            'branch_id' => 0, //  id города (ОБЯЗАТЕЛЬНО)
            'phones' => [
                $postData['phone'], //  Телефон клиента (ОБЯЗАТЕЛЬНО)
            ],

            //  Из двух строк ниже оставьте только одну, нужную вам! Остальные удалите или закомментируйте.
            'is_pm' => false, //  Не частный мастер (ОБЯЗАТЕЛЬНО)
            //'is_pm' => true, //  Частный мастер (ОБЯЗАТЕЛЬНО)

            'name' => $postData['fullname'],  //  ФИО клиента (ОБЯЗАТЕЛЬНО)
            'comment' => $postData['address'], //  Описание работ
        ]);
        $idp = 'd515ed05-cc50-d0a7-48c025ced3bac5ab'; //  впишите ваш IDP, указан в начале раздела

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://testapi.ru/lead?source=partner&idp=" . rawurlencode($idp),

            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $info = curl_getinfo($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if (intval($info['http_code'] / 100) !== 2) {
                print "Error: ";
                print_r($response);
            }
        }


        $httpStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        // Выводим статус ответа на экран
        echo "HTTP Status Code: $httpStatus\n";
    }
}
