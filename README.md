# api-datatype-url

[![Packagist Version](https://img.shields.io/packagist/v/elavora/api-datatype-url.svg?style=flat-square)](https://packagist.org/packages/elavora/api-datatype-url)
[![PHP Version](https://img.shields.io/packagist/php-v/elavora/api-datatype-url.svg?style=flat-square)](https://packagist.org/packages/elavora/api-datatype-url)
[![Composer Quality](https://github.com/Elavora/api-datatype-url/actions/workflows/quality.yml/badge.svg?branch=main)](https://github.com/Elavora/api-datatype-url/actions/workflows/quality.yml)
[![CodeQL](https://github.com/Elavora/api-datatype-url/actions/workflows/codeql.yml/badge.svg?branch=main)](https://github.com/Elavora/api-datatype-url/actions/workflows/codeql.yml)
[![License](https://img.shields.io/packagist/l/elavora/api-datatype-url.svg?style=flat-square)](https://packagist.org/packages/elavora/api-datatype-url)

DataType imutavel para validar URLs.

## Requisitos

- PHP 8.3 ou superior.
- Demais requisitos declarados em [`composer.json`](composer.json).

## Instalacao

```bash
composer require elavora/api-datatype-url
```

## Inicio rapido

```php
use Elavora\Api\DataTypes\Url;

$valor = Url::from('https://example.com/docs');
$normalizado = $valor->value();
```

`$normalizado` contem a URL original validada.

## Documentacao

Consulte o [guia de uso](docs/USO.md) para detalhes e validacao local.
