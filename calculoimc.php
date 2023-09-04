<?php
function get_rating_by_imc($imc)
{
  if (empty($_POST['height'])) {
    echo '<div class="error-message">Por favor insira sua altura!</div>';
    return;
  }
  
  if (empty($_POST['weight'])) {
    echo '<div class="error-message">Por favor insira seu peso!</div>';
    return;
  }


  $faixas_de_peso = [
    "18.5" => "magreza",
    "24.9" => "saudável",
    "29.9" => "sobrepeso",
    "34.9" => "obesidade grau I",
    "39.9" => "obesidade grau II",
    "40.0" => "obesidade grau III"
  ];

  foreach ($faixas_de_peso as $faixa => $classificacao) {
    if ($imc <= $faixa) {
      echo '<span class="result-text">Atenção: seu IMC é <strong>' . number_format((float)$imc, 2, '.', '') . '</strong>, e você está classificado como <strong>' . $classificacao . '</strong>!</span>';
      break;
    } else if ($imc > 40.0) {
      echo '<span class="result-text">Atenção: seu IMC é <strong>' . number_format((float)$imc, 2, '.', '') . '</strong>, e você está classificado como <strong>' . end($faixas_de_peso) . '</strong>!</span>';
      break;
    }
  }
}

if (isset($_POST['height']) && isset($_POST['weight'])) {
  $height = $_POST['height'];
  $weight = $_POST['weight'];

  $imc = $weight / ($height * 2);
  get_rating_by_imc($imc);
}
