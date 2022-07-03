<?php
require '../config.php';

$method = strtolower($_SERVER['REQUEST_METHOD']);
if ($method === 'post'){

  $titulo = filter_input(INPUT_POST, 'titulo');
  $corpo = filter_input(INPUT_POST, 'corpo');

  if ($titulo && $corpo) {

    $sql = $pdo->prepare("INSERT INTO notes (titulo, corpo) VALUES (:titulo, :corpo)");
    $sql->bindValue(':titulo', $titulo);
    $sql->bindValue(':corpo', $corpo);
    $sql->execute();

    $id = $pdo->lastInsertId();

    $array['result'] = [
      'id' => $id,
      'titulo' => $titulo,
      'corpo' => $corpo
    ];

  } else {
    $array['error'] = 'Campos não enviados';
  }

} else {
  $array['error'] = 'Método não permitido';
}

require '../return.php';