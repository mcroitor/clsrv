<?php

$httpcode = [
    100 => "Continue", // продолжай
    101 => "Switching Protocols", // переключение протоколов
    102 => "Processing", //идёт обработка
    200 => "OK", //хорошо
    201 => "Created", // создано
    202 => "Accepted", // принято
    203 => "Non-Authoritative Information", // информация не авторитетна
    204 => "No Content", // //нет содержимого
    205 => "Reset Content", // //сбросить содержимое
    206 => "Partial Content", // //частичное содержимое
    207 => "Multi-Status", // многостатусный
    226 => "IM Used", // использовано IM.
    300 => "Multiple Choices", // множество выборов
    301 => "Moved Permanently", // перемещено навсегда
    302 => "Moved Temporarily", // перемещено временно
    302 => "Found", // найдено
    303 => "See Other", // смотреть другое
    304 => "Not Modified", // не изменялось
    305 => "Use Proxy", // использовать прокси
    307 => "Temporary Redirect", // временное перенаправление
    400 => "Bad Request", // плохой, неверный запрос
    401 => "Unauthorized", // не авторизован
    402 => "Payment Required", // необходима оплата
    403 => "Forbidden", // запрещено
    404 => "Not Found", // не найдено
    405 => "Method Not Allowed", // метод не поддерживается
    406 => "Not Acceptable", // неприемлемо
    407 => "Proxy Authentication Required", // необходима аутентификация прокси
    408 => "Request Timeout", // истекло время ожидания
    409 => "Conflict", // конфликт
    410 => "Gone", // удалён
    411 => "Length Required", // необходима длина
    412 => "Precondition Failed", // условие ложно
    413 => "Payload Too Large", // полезная нагрузка слишком велика
    414 => "URI Too Long", // URI слишком длинный
    415 => "Unsupported Media Type", // неподдерживаемый тип данных
    416 => "Range Not Satisfiable", // диапазон не достижим
    417 => "Expectation Failed", // ожидаение не удалось
    418 => "I’m a teapot", // я — чайник
    422 => "Unprocessable Entity", // необрабатываемый экземпляр
    423 => "Locked", // заблокировано
    424 => "Failed Dependency", // невыполненная зависимость
    425 => "Unordered Collection", // неупорядоченный набор
    426 => "Upgrade Required", // необходимо обновление
    428 => "Precondition Required", // необходимо предусловие
    429 => "Too Many Requests", // слишком много запросов
    431 => "Request Header Fields Too Large", // поля заголовка запроса слишком большие
    449 => "Retry With", // повторить с
    451 => "Unavailable For Legal Reasons", // недоступно по юридическим причинам
    500 => "Internal Server Error", // внутренняя ошибка сервера
    501 => "Not Implemented", // не реализовано
    502 => "Bad Gateway", // плохой, ошибочный шлюз
    503 => "Service Unavailable", // сервис недоступен
    504 => "Gateway Timeout", // шлюз не отвечает
    505 => "HTTP Version Not Supported", // версия HTTP не поддерживается
    506 => "Variant Also Negotiates", // вариант тоже проводит согласование
    507 => "Insufficient Storage", // переполнение хранилища
    508 => "Loop Detected", // обнаружено бесконечное перенаправление
    509 => "Bandwidth Limit Exceeded", //исчерпана пропускная ширина канала
    510 => "Not Extended", // не расширено
    511 => "Network Authentication Required", // требуется сетевая аутентификация
    520 => "Unknown Error", // неизвестная ошибка
    521 => "Web Server Is Down", // веб-сервер не работает
    522 => "Connection Timed Out", // соединение не отвечает
    523 => "Origin Is Unreachable", // источник недоступен
    524 => "A Timeout Occurred", // время ожилания истекло
    525 => "SSL Handshake Failed", // квитирование SSL не удалось
    526 => "Invalid SSL Certificate" // недействительный сертификат SSL
];

function httpResponse($message, $code) {
    global $httpcode;
    header("HTTP/1.0 {$code} {$httpcode[$code]}");
    header("Content-Type: text/html; charset=utf-8");
    header("Content-Encoding: UTF-8");
    header("Content-Length: " . strlen($message));
    echo $message;
    exit();
}
