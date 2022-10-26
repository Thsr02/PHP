<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styleFormulario.css">
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ÉMeuSim</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Perfil</a>
        <a class="nav-link" href="#">Meus Itens</a>
      </div>
    </div>
  </div>
</nav>
<section class="get-in-touch">
   <h1 class="title">Cadastrar itens</h1>
    <select id="selectForm" class="form-select" aria-label="Default select example">
            <option selected value="hide">Selecione a categoria</option>
            <option value="div1">Eletronicos</option>
            <option value="div2">Veiculos</option>
            <option value="div3">Acessorios</option>
            <option value="div4">Outros</option>
    </select>
    <div id="formulario">
        <div id="div1" name="formEletronicos">
                <form class="contact-form row">
            <div class="form-field col-lg-6">
                <input id="txtnome" class="input-text js-input" type="text" required>
                <label class="label" for="txtnome">Nome do item</label>
            </div>
            <div class="form-field col-lg-6">
                <input id="txtmarca" class="input-text js-input" type="text" required>
                <label class="label" for="txtmarca">Marca</label>
            </div>
            <div class="form-field col-lg-6">
                <input id="txtmodelo" class="input-text js-input" type="text" required>
                <label class="label" for="txtmodelo">Modelo</label>
            </div>
            <div class="form-field col-lg-6">
                <input id="txtnotaFiscal" class="input-text js-input" type="number" required>
                <label class="label" for="txtnotaFiscal">Nota Fiscal</label>
            </div>
            <div class="form-field col-lg-6 ">
                <input id="txtcodIdentificacao" class="input-text js-input" type="number" required>
                <label class="label" for="txtcodIdentificacao">Codigo de identificação ou IME</label>
            </div>
            <div class="form-field col-lg-6 ">
                <input id="txtcor" class="input-text js-input" type="text" required>
                <label class="label" for="txtcor">Cor</label>
            </div>
            <div class="form-field col-lg-12">
                <input id="txtdescricao" class="input-text js-input" type="text" required>
                <label class="label" for="txtdescricao">Descrição</label>
            </div>
            <div class="form-field col-lg-6 ">
            <br><label for="formFileSm" class="form-label submit-btn p-1">Anexe seu arquivo</label>
                <input class="form-control form-control-sm mt-5" id="formFileSm" type="file" accept="image">
            </div>
            <div class="form-field col-lg-12">
                <input class="submit-btn" type="submit" value="Enviar">
            </div>
            </form>
        </div>

        <div id="div2">
                <form class="contact-form row">
            <div class="form-field col-lg-6">
                <input id="name" class="input-text js-input" type="text" required>
                <label class="label" for="name">Nome do item</label>
            </div>
            <div class="form-field col-lg-6">
                <input id="name" class="input-text js-input" type="text" required>
                <label class="label" for="name">Marca</label>
            </div>
            <div class="form-field col-lg-6">
                <input id="name" class="input-text js-input" type="text" required>
                <label class="label" for="name">Modelo</label>
            </div>
            <div class="form-field col-lg-6">
                <input id="name" class="input-text js-input" type="number" required>
                <label class="label" for="name">Ano de Fabricação</label>
            </div>
            <div class="form-field col-lg-6">
                <input id="name" class="input-text js-input" type="number" required>
                <label class="label" for="name">Placa</label>
            </div>
            <div class="form-field col-lg-6 ">
                <input id="email" class="input-text js-input" type="number" required>
                <label class="label" for="email">Chassi</label>
            </div>
            <div class="form-field col-lg-6 ">
                <input id="email" class="input-text js-input" type="text" required>
                <label class="label" for="email">Cor</label>
            </div>
            <div class="form-field col-lg-12">
                <input id="message" class="input-text js-input" type="text" required>
                <label class="label" for="message">Descrição</label>
            </div>
            <div class="form-field col-lg-6 ">
            <br><label for="formFileSm" class="form-label submit-btn p-1">Anexe seu arquivo</label>
                <input class="form-control form-control-sm mt-5" id="formFileSm" type="file" accept="image">
            </div>
            <div class="form-field col-lg-12">
                <input class="submit-btn" type="submit" value="Enviar">
            </div>
            </form>
        </div>

        <div id="div3">
                <form class="contact-form row">
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text js-input" type="text" required>
                        <label class="label" for="name">Nome do item</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text js-input" type="text" required>
                        <label class="label" for="name">Marca</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text js-input" type="text" required>
                        <label class="label" for="name">Modelo</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text js-input" type="number" required>
                        <label class="label" for="name">Nota Fiscal</label>
                    </div>
                    <div class="form-field col-lg-6 ">
                        <input id="email" class="input-text js-input" type="number" required>
                        <label class="label" for="email">Nº de Serie</label>
                    </div>
                    <div class="form-field col-lg-6 ">
                        <input id="email" class="input-text js-input" type="text" required>
                        <label class="label" for="email">Cor</label>
                    </div>
                    <div class="form-field col-lg-12">
                        <input id="message" class="input-text js-input" type="text" required>
                        <label class="label" for="message">Descrição</label>
                    </div>
                    <div class="form-field col-lg-6 ">
                    <br><label for="formFileSm" class="form-label submit-btn p-1">Anexe seu arquivo</label>
                        <input class="form-control form-control-sm mt-5" id="formFileSm" type="file" accept="image">
                    </div>
                    <div class="form-field col-lg-12">
                        <input class="submit-btn" type="submit" value="Enviar">
                    </div>
            </form>
        </div>

        <div id="div4">
                <form class="contact-form row">
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text js-input" type="text" required>
                        <label class="label" for="name">Nome do item</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text js-input" type="text" required>
                        <label class="label" for="name">Marca</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text js-input" type="text" required>
                        <label class="label" for="name">Modelo</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input id="name" class="input-text js-input" type="number" required>
                        <label class="label" for="name">Nota Fiscal</label>
                    </div>
                    <div class="form-field col-lg-6 ">
                        <input id="email" class="input-text js-input" type="number" required>
                        <label class="label" for="email">Codigo de identificação ou IME</label>
                    </div>
                    <div class="form-field col-lg-6 ">
                        <input id="email" class="input-text js-input" type="text" required>
                        <label class="label" for="email">Cor</label>
                    </div>
                    <div class="form-field col-lg-12">
                        <input id="message" class="input-text js-input" type="text" required>
                        <label class="label" for="message">Descrição</label>
                    </div>
                    <div class="form-field col-lg-6 ">
                    <br><label for="formFileSm" class="form-label submit-btn p-1">Anexe seu arquivo</label>
                        <input class="form-control form-control-sm mt-5" id="formFileSm" type="file" accept="image">
                    </div>
                    <div class="form-field col-lg-12">
                        <input class="submit-btn" type="submit" value="Enviar">
                    </div>
                </form>
        </div>
    </div>
</section>

    <script src="../jquery/jquery.min.js"></script>
    <script src="../js/jsFormulario.js"></script>
</body>
</html>