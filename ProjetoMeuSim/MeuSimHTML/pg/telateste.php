<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÉMeuSim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styleperfil.css">
</head>
<body>
    <header class="menulogin ">
        <nav class="navbar bg-warning navbar-default"><!-- Código do NavBar -->
            <div class="container-fluid ">
                <div class="navbar-header">
                    <a class="navbar-brand text-primary bg-warning" href="index.html"><!-- Logo -->
                      ÉMeuSim
                    </a>
                </div>
                
            </div>
        </nav>
    </header>
    <section class="menu">
        <div class="menu-container">
            <div class="menu-card-perfil">
                <div class="card-foto-perfil">
                </div>
                <div class="card-descricao-perfil">
                    <title >Nome</title>
                </div>
            </div>
            <div class="menu-card-itens">
                <div class="card-separar">
                    <a href="../pg/meusitens.php">
                    <div class="card-cadastrar">
                        Meus Itens
                    </div>
                    </a>
                    <a href="#" data-toggle="modal" data-target="#myModal"><!-- Link que abre a janela modal -->
                    <div class="card-cadastrar">     
                        Cadastrar Novo Item 
                    </div>           
                    </a>
                    
                    <div class="card-cadastrar">
                        3
                    </div>
                </div>
                <div class="card-anuncio">
                    Anuncio
                </div>
            </div>
        </div>
    </section>

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog"><!-- Início do código da janela modal -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><!-- Header do modal -->
                        <h4 class="modal-title">Login</h4><!-- Título -->
                    </div>
                    <div class="modal-body"><!-- Corpo do modal -->
                        <form action=""><!-- Início do Formulário -->
                        <h1>Formulario <select name="opcao" id="">
                          <option value="1">
                            Eletronico
                          </option>
                          <option value="2">
                            Veicúlos
                          </option>
                        </select></h1>
                          Nome : <input type="text" name="nome" id="nome"><p>
                          Marca :  <input type="text" name="marca" id="marca"><p>
                          Modelo : <input type="text" name="modelo" id="modelo"><p>
                          Nota Fiscal <input type="number" name="nota" id="nota"><p>
                          Codigo de identificação <input type="number" name="codIdent" id="codIdent" placeholder="IME ou Nº Serie"><p>
                          Cor : <input type="color" name="cor" id="cor"><p>
                          Características únicas <input type="text" name="" id="" placeholder="Descreva a característica"><p>
                          Fotos <input type="file" name="foto" id="foto"><p>
                          <input type="submit" value="Salvar">
                        </form>
                    </div>
                    <div class="modal-footer"><!-- Footer do Modal -->
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Fechar <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>                
                    </div>
                </div>
            </div>
        </div><!-- ##Fim do Modal -->
   


    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="../MeuSimHTML/js/animacao.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script><!-- Chama a biblioteca JQuery -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!-- Chama o arquivo Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>