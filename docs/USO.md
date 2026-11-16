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

## Documentacao do tipo (OPTIONS)

`Url` implementa `Elavora\Api\Framework\Contracts\DescribesType`. O OPTIONS publico da API usa
`documentedType()` para documentar o campo sem expor o nome da classe PHP. O tipo declara:

- `type`: `string`
- `format`: `url`
- `description`: URL absoluta valida, com esquema
- `example`: `https://example.com/docs`

Quem valida continua sendo `isValid()`.

## Principais pontos de entrada

- `Elavora\Api\DataTypes\Url`

## Dependencias de runtime

- PHP 8.4 ou superior
- `elavora/api-datatype-core` `^4.0` (que exige o `elavora/api-framework` `^4.0`)

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
