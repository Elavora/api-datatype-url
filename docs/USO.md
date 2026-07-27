# Guia de uso

`Url` valida strings com o filtro de URL nativo do PHP.

```php
use Elavora\Api\DataTypes\Url;

$url = Url::from('https://example.com/docs');

echo $url->value(); // https://example.com/docs
```

O pacote preserva a string recebida. Ele nao remove espacos, restringe o esquema ou altera componentes da URL.

Para verificar uma entrada sem criar uma instancia:

```php
if (Url::isValid($entrada)) {
    $url = Url::from($entrada);
}
```

## Validacao do pacote

Execute os comandos a partir da raiz do clone:

```bash
docker run --rm -v "${PWD}:/workspace" -w /workspace composer:2 composer update --no-interaction --no-progress --prefer-dist
docker run --rm -v "${PWD}:/workspace" -w /workspace composer:2 composer check
```
