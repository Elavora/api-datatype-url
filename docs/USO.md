# Guia de uso

[README](../README.md) · Veja também: [Desenvolvimento e testes](DESENVOLVIMENTO.md) · [Automação do repositório](AUTOMACAO.md)

DataType de URL para aplicacoes Elavora API.

## Instalacao

```bash
composer require elavora/api-datatype-url
```

## Quando usar

- Validar e normalizar valores antes de chegar na regra de negocio.
- Evitar passar strings soltas entre services, DTOs e persistencia.
- Reutilizar a mesma validacao em controllers, comandos e testes.

## Exemplo rapido

```php
use Elavora\Api\DataTypes\Url;

$valor = new Url('https://example.com');
$normalizado = $valor->value();
```

## Principais pontos de entrada

- `Elavora\Api\DataTypes\Url`

## Dependencias de runtime

- PHP 8.3 ou superior
- `elavora/api-datatype-core` `^2.0` (que exige o `elavora/api-framework` `^2.0`)

## Mudanca na versao 1.0.0

O pacote passa a exigir PHP 8.3 e o `elavora/api-datatype-core` `^2.0` (antes: PHP 8.1 e core `^0.1`). A API publica
nao muda: `Url` continua estendendo `AbstractDataType`, com os mesmos metodos e as mesmas regras de validacao.

## Validacao do pacote

Depois de instalar o pacote, rode os testes da aplicacao consumidora. Para validar o proprio pacote (testes, lint, PHPStan
e o mesmo fluxo do CI), veja [Desenvolvimento e testes](DESENVOLVIMENTO.md). Versoes e release: [Automacao](AUTOMACAO.md#versões-e-release).

## Observacoes

- Mantenha regras de produto fora deste pacote.
- Prefira configurar extensoes no bootstrap da aplicacao.
- Instale apenas os modulos que a aplicacao realmente usa.
