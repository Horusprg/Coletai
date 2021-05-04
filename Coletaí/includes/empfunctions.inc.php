<?php

function invalidRazao($razao) {
  $resultado;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $razao)) {
    $resultado = true;
  }
  else {
    $resultado = false;
  }
  return $resultado;
}

function invalidEmail($email_emp) {
  $resultado;
  if (!filter_var($email_emp, FILTER_VALIDATE_EMAIL)){
    $resultado = true;
  }
  else {
    $resultado = false;
  }
  return $resultado;
}

function senhaigual($senha_emp, $senhadnv) {
  $resultado;
  if ($senha_emp !== $senhadnv) {
    $resultado = true;
  }
  else {
    $resultado = false;
  }
  return $resultado;
}

function EmpresaCadastrada($conn, $razao, $email_emp) {
  $sql = "SELECT * FROM empresa WHERE empresaRazao = ? OR empresaEmail = ? ;";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../cadastroemp.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $razao, $email_emp);
  mysqli_stmt_execute($stmt);

  $resultadoData = mysqli_stmt_get_result($stmt);

  if ($linha = mysqli_fetch_assoc($resultadoData)) {
    return $linha;
  }
  else {
    $resultado = false;
    return $resultado;
  }

  mysqli_stmt_close($stmt);
}

function createEmpresa($conn, $razao, $nome_fantasia, $cnpj, $im, $telefone, $celular, $rua, $comp, $numero, $bairro, $cidade, $cep, $email_emp, $senha_emp) {
  $sql = "INSERT INTO empresa (empresaRazao, empresaFantasia, empresaCNPJ, empresaIM, empresaTelefone, empresaCelular, empresaRua, empresaComp, empresaNumero, empresaBairro, empresaCidade, empresaCEP, empresaEmail, EmpresaSenha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../cadastroemp.php?error=stmtfailed");
    exit();
  }

$hashedSenhaemp = password_hash($senha_emp, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssssssssssssss", $razao, $nome_fantasia, $cnpj, $im, $telefone, $celular, $rua, $comp, $numero, $bairro, $cidade, $cep, $email_emp, $hashedSenhaemp);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../cadastroemp.php?error=none");
  exit();
}
