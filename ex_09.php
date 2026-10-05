```php
<?php

function analisarNume($numero)
{
    // Verifica se é par ou ímpar
    if ($numero % 2 == 0) {
        $paridade = "par";
    } else {
        $paridade = "ímpar";
    }

    // Verifica se é primo
    $Primo = true;

    if ($numero < 2) {
        $Primo = false;
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $Primo = false;
                break;
            }
        }
    }

    // Soma os divisores
    $somaDivisor = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $somaDivisor += $i;
        }
    }

    // Verifica se é perfeito
    $perfeito = ($somaDivisor == $numero && $numero > 0);

    return [
        "paridade" => $paridade,
        "primo" => $Primo ? "Sim" : "Não",
        "perfeito" => $perfeito ? "Sim" : "Não"
    ];
}

$numero_usu = 15;

$resultado = analisarNume($numero_usu);

echo "Número analisado: $numero_usu<br>";
echo "Paridade: " . $resultado["paridade"] . "<br>";
echo "É primo? " . $resultado["primo"] . "<br>";
echo "É perfeito? " . $resultado["perfeito"] . "<br>";

?>
```

Para **15**, o resultado será:

* Número analisado: **15**
* Paridade: **ímpar**
* É primo? **Não**
* É perfeito? **Não**
