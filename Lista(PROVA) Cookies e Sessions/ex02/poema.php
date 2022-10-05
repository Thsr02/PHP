<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qual sua cor favorita</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_POST['txtcor'])){
        $_SESSION['cor']=$_POST['txtcor'];

            switch ($_SESSION['cor']) {
                case 1:
                    echo "<style>
                .alternativa{
                    display: none;
                }
                section{
                    color: blue;
                }
                </style>";  
                        header("Refresh: 3, poema.php");
                    break;
                case 2:
                    echo "<style>
                    .alternativa{
                        display: none;
                    }
                    section{
                        color: yellow;
                    }
                    </style>"; 
                            header("Refresh: 3, poema.php");
                    break;
                case 3:
                    echo "<style>
                    .alternativa{
                        display: none;
                    }
                    section{
                        color: green;
                    }
                    </style>";   
                                header("Refresh: 3, poema.php");
                    break;
                case 4:
                    echo "<style>
                    .alternativa{
                        display: none;
                    }
                    section{
                        color: pink;
                    }
                    </style>";
                                header("Refresh: 3, poema.php");     
                    break;
                
                default:
                    # code...
                    break;
            }
    session_destroy();
    }

?>
    <div class="alternativa">
        <form action="poema.php" method="post">
                <fieldset>
                    Qual sua cor Favorita:?
                    <select name="txtcor" id="txtcor">
                        <option value="1">AZUL</option>
                        <option value="2">AMARELO</option>
                        <option value="3">VERDE</option>
                        <option value="4">SÃO PAULO</option>
                    </select>
                </fieldset>
            <p><input type="submit" value="ENVIAR">
        </form>
    </div>
    <section>
        <h1>Aquarela</h1>
        <h2>Toquinho</h2>
            <p>Numa folha qualquer eu desenho um sol amarelo<br>
            E com cinco ou seis retas é facil fazer um castelo<br>
            Corro o lápis em torno da mão e me dou uma luva<br>
            E se faço chover, com dois riscos tenho um guarda-chuva<br>
            Se um pinguinho de tinta cai num pedacinho azul do papel<br>
            Num instante imagino uma linda gaivota a voar no céu<br><br><br>
            Vai voando, contornando a imensa curva norte-sul<br>
            Vou com ela viajando Havaí, Pequim ou Istambul<br>
            Pinto um barco a vela branco navegando<br>
            É tanto céu e mar num beijo azul 
            </p>
    </section>
</body>
</html>
