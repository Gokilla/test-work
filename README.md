<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Пример кода

## Features

- Описан api для управления списком использования автомобилей пользователями.
В один момент времени 1 пользователь может управлять только одним автомобилем. В один момент времени 1 автомобилем может управлять только 1 пользователь.


## Структура для удобства

Ниже указанна в каких папках что находиться

| Папка | Значение |
| ------ | ------ |
| App/Http/Controllers/Api/V1/Rent | Контролерь эндпоинта |
| App/Http/Requests/Rent | Валидация данных через реквест |
| App/Http/Resources/Rent | Описан Resource для ответа  |
| App/Models | Описанны модели |
| App/Services | Описан сервис |
| https://github.com/Gokilla/test-work/tree/dev/tests | Описанны тесты |
|https://github.com/Gokilla/test-work/blob/dev/openapi.yaml | Документация |
