<?php

  $cursos = [
    "Full Stack" => ["Curso de Desenvolvimento Web", 1000.99, "full.jpeg", "fullstack"],
    "Marketing Digital" => ["Curso de Marketing", 1000.98, "marketing.jpg", "marketing"],
    "UX" => ["Curso de User Experience", 9000.98, "ux.jpeg", "ux"],
    "Mobile Android" => ["Curso de apps", 1000.97, "android.png", "android"]
  ];

  $usuario = [
    "Nome" => "Rafael",
    "Email" => "test@test.com",
    "Senha" => "123456",
    "NivelAcesso" => mt_rand(0, 1)
  ]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=2.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
    crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <span>Cursos</span>
        </a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php if($usuario["NivelAcesso"] == 1) : ?>
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ações
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">Adicionar Produto</a>
              </li>
              <li>
                <a href="#">Editar Produto</a>
              </li>
            </ul>
          </li>
        </ul>
        <?php endif; ?>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pesquise aqui">
          </div>
          <button class="btn glyphicon glyphicon-search" aria-hidden="true"></button>
        </form>
        <p class="navbar-text navbar-right">
          Logado como
          <strong>
            <a href="#">
              <?php echo $usuario["Nome"]; ?>
            </a>
          </strong>
        </p>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <?php foreach ($cursos as $nomeCurso => $infosCurso) : ?>
      <div class="col-sm-6 col-md-6">
        <div class="thumbnail">
          <img src="<?php echo " assets/img/$infosCurso[2] " ?>" alt="<?php echo " Foto curso $nomeCurso2 " ?>">
          <div class="caption">
            <h3>
              <!-- nome do curso -->
              <?php echo $nomeCurso; ?>
            </h3>
            <p>
              <!-- imagem do curso -->
              <?php echo $infosCurso[0]; ?>
            </p>
            <p>
              <!-- info do curso -->
              <?php echo $infosCurso[1]; ?>
            </p>
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="<?php echo "#$infosCurso[3]"; ?>" role="button">Comprar</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      <?php foreach ($cursos as $nomeCurso => $infosCurso) : ?>
      <div class="modal fade" id="<?php echo $infosCurso[3]; ?>" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Preencha seus dados</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="input-group col-md-5">
                  <label for="nomeCompleto">Nome Completo</label> 
                  <input id="nomeCompleto" type="text" class="form-control">
                </div>
                <div class="input-group col-md-5">
                  <label for="cpf">CPF</label> 
                  <input id="cpf" type="number" class="form-control">
                </div>
                <div class="input-group col-md-5">
                  <label for="nroCartao">Número do Cartão</label> 
                  <input id="nroCartao" type="number" class="form-control">
                </div>
                <div class="input-group col-md-5">
                  <label for="validade">Validade</label> 
                  <input id="validade" type="month" class="form-control">
                </div>
                <div class="input-group col-md-5">
                  <label for="cvv">CVV</label> 
                  <input id="cvv" type="text" class="form-control">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>

      <?php endforeach; ?>
    </div>
  </div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous">
    </script>
</body>

</html>