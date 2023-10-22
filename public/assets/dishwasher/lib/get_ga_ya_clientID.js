/*
 * Наколенная микролиба для получения gaid и yaid
*/
var SLGodObject = window.SLGodObject || {
    helpers: {},
    data: {
        counters: {}
    }
};
SLGodObject.helpers.setYaCliendID = function () {
    //  ХЗ к какому событию можно приципиться, поэтому дёргаем раз в 1 секунду до победного
    var timerId = setInterval(function () {
        if (SLGodObject.data.counters.yaClienId) {
            clearInterval(timerId);
        } else {
            for (var i in window) {
                if (/^yaCounter\d+/.test(i)) {
                    try {
                        SLGodObject.data.counters.yaClienId = window[i].getClientID();
                        // console.log('yaid: ' + SLGodObject.data.counters.yaClienId);
                    } catch (e) {
                    }
                }
            }
        }
    }, 1000);
};
SLGodObject.helpers.setGaCliendID = function () {
    //  ХЗ к какому событию можно приципиться, поэтому дёргаем раз в 1 секунду до победного
    var timerId = setInterval(function () {
        if (SLGodObject.data.counters.gaClienId) {
            clearInterval(timerId);
        } else {
            try {
                SLGodObject.data.counters.gaClienId = ga.getAll()[0].get('clientId');
                // console.log('gaid: ' + SLGodObject.data.counters.gaClienId);
            } catch (e) {
            }
        }
    }, 1000);
};
SLGodObject.helpers.getYaCliendID = function () {   //  Чисто для наглядности, но можно взять прямо из data
    return SLGodObject.data.counters.yaClienId || null;
};
SLGodObject.helpers.getGaCliendID = function () {   //  Чисто для наглядности, но можно взять прямо из data
    return SLGodObject.data.counters.gaClienId || null;
};
SLGodObject.helpers.setAllCliendID = function () {  //  Получаем id со всех счётчиков (может ещё что добавиться)
    SLGodObject.helpers.setYaCliendID();
    SLGodObject.helpers.setGaCliendID();
};
/*
 *  Конец либы
*/
