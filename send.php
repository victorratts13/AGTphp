<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>

    <script src="send.js" type="text/javascript"></script>
    <script type="text/javascript">
       
    </script>

    <title>AGTphp</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">AGTphp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/AGTphp">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="send.php">add contato</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link disabled" href="#">V1.0</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar contato" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
  	<div class="container-fluid" style="width: 300px">
  		 <form action=".config/out.conn.php" method="POST" id="form">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Nome" name="nome" onfocus="this.value='';">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">SobreNome</label>
          <input type="text" class="form-control" id="SobreNome" aria-describedby="emailHelp" placeholder="SobreNome" name="sobrenome" onfocus="this.value='';">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Endereço</label>
          <input type="text" class="form-control" id="end" aria-describedby="emailHelp" placeholder="Endereço" name="end" onfocus="this.value='';">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Telefone</label>
          <input type="text" class="form-control" id="tel" aria-describedby="emailHelp" placeholder="(85) 98951-6654" name="tel" onfocus="this.value='';">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <div id="fdiv"></div>
      </form>
	</div>


  
  </body>
</html>