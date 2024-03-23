<?php

function criarConta(string $cpf, string $nomeTitular, float $saldo): array
{
    return [
    $cpf => [
        'titular' => $nomeTitular,
        'saldo' => $saldo,
        ]
    ];
}

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.789-11'] = sacar(
    $contasCorrentes['123.456.789-11'],
    200
);

$contasCorrentes['123.456.789-12'] = depositar(
    $contasCorrentes['123.456.789-12'],
    200
);

unset($contasCorrentes['123.456.789-11']]);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-12']);
?>