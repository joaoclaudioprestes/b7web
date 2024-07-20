<?php
// Senha original
$senha = "123456";

// Exibir senha original
echo "Senha original: " . htmlspecialchars($senha) . "<br>";

// Criptografar a senha usando o algoritmo padrão (PASSWORD_DEFAULT)
$senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

// Exibir a senha criptografada
echo "Senha criptografada: " . htmlspecialchars($senha_criptografada) . "<br>";

// Verificar se a senha fornecida corresponde à senha criptografada
$senha_verificada = password_verify($senha, $senha_criptografada);

// Exibir o resultado da verificação
echo "Senha verificada: " . ($senha_verificada ? 'Senha válida' : 'Senha inválida') . "<br>";
