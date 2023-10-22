<?php
return [
    'leadData' => [
//        'direction_id' => 2,
        'offer_id' => 2,
        'branch_id' => [
            // 175 => 'Алма-Ата',  //  Первый вариант - дефолт, если не смогли определить по ip
            // 53 => 'Гомель',
            // 94 => 'Брест',
            // 68 => 'Гродно',
        ],
        'thread_id' => 30251,
        'thread_type' => 3,
        'tool_id' => 301,
    ],
    'idp' => '6217158a-63ec-333b-0bea3b04c9cea778',
    'apiUrl' => 'https://testapi.ru/complead',
    'cabinetUrl' => 'https://servicelead.top',
    'phoneForHref' => null,
    'phoneForPrint' => null,
    'mapScriptByBranchId' => [
        175 => '<script charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A630737b17cac75fc01480da297d926768f434beb6fffd181493601483c8dc78f&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>',
        44 => '<script charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A97fffa2e1331ea9ea7289b3ae9ba6762191b2d00c7428d18ce09b35b14711c0f&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>',
        53 => '<script charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0a7bd7f388065f82add3a351c8fe76ea27df137407897abe698ec4f74210f163&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>',
        68 => '<script charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A79b3000fef72a723a4d2ff065f118fa9f99efa209274c5511f8adaa849c8b963&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>',
        94 => '<script charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4d32bad090fa3e0ce1ac78dd8c1fc704b4e9731be9886360f2b6a7a10ad02fe6&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>',
    ],
    'yaMetrikaId' => 89978311,
    'yaMetrikaGoalName' => 'formsend',
    'price' => [
        'Диагностика' => 'Бесплатно',
        'Не холодит' => 'от 950',
        'Гремит' => 'от 1300',
        'Щелкает' => 'от 1000',
        'Перемораживает' => 'от 1500',
        'Не включается' => 'от 1300',
        'Засор дренажа' => 'от 1500',
        'Чистка ХД' => 'от 1500',
        'Заправка фреона' => 'от 950',
    ],
];
