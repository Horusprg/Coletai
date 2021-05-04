<?php

if (isset($_POST["submit"])) {
  $razao = $_POST ["razao"];
  $nome_fantasia = $_POST ["nome_fantasia"];
  $cnpj = $_POST ["cnpj"];
  $im = $_POST ["im"];
  $telefone = $_POST ["telefone"];
  $celular = $_POST ["celular"];
  $rua = $_POST ["rua"];
  $comp = $_POST ["comp"];
  $numero = $_POST ["numero"];
  $bairro = $_POST ["bairro"];
  $cidade = $_POST ["cidade"];
  $cep = $_POST ["cep"];
  $email_emp = $_POST ["email_emp"];
  $senha_emp = $_POST ["senha_emp"];
  $senhadnv = $_POST["senha_check"];

  require_once 'dbh.inc.php';
  require_once 'empfunctions.inc.php';

  if (invalidRazao($razao) !== false) {
    header ("location: ../cadastroemp.php?error=razaoinvalida");
    exit();
  }

  if (senhaigual($senha_emp, $senhadnv) !== false) {
    header ("location: ../cadastroemp.php?error=senhasnaosaoiguais");
    exit();
  }
  if (invalidEmail($email_emp) !== false) {
    header ("location: ../cadastroemp.php?error=emailinvalido");
    exit();
  }
  if (EmpresaCadastrada($conn, $razao, $email_emp) !== false) {
    header ("location: ../cadastroemp.php?error=empresaouemailjacadastrado");
    exit();
  }

  createEmpresa($conn, $razao, $nome_fantasia, $cnpj, $im, $telefone, $celular, $rua, $comp, $numero, $bairro, $cidade, $cep, $email_emp, $senha_emp);
}
else {
  header ("location: ../login.php");
  exit();
}
