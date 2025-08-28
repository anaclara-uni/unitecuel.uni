<?php
$mensagem = ""; 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   // $mensagem = "Olá "; 
   /*
   if ($_POST['periodo'] == 'm') {
    $mensagem = 'Bom Dia ';
   } else if ($_POST['periodo'] == 't') {
    $mensagem = 'Boa Tarde '; 
   } else {
    $mensagem = 'Boa Noite ';
   }
    $mensagem .= $_POST['nome'];
} else{
    $mensagem = "Digite o seu nome";
}
*/
switch($_POST['periodo']){
    case 'm' :
        $mensagem = "Bom Dia, ";
        break;
        case 't' : 
            $mensagem = "Boa Tarde, ";
            break;
            case 'n' :
                $mensagem = "Boa Noite, ";
                break; 
                default: 
                $mensagem = "Por favor, digite seu nome. ";
                break;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/controle.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" />
        <select name= "periodo">
        <option value="m">Manhã</option>
        <option value="t">Tarde</option>
        <option value="n">Noite</option>    
        </select>
        <button type="submit">Enviar</button>
        
    </form>
    <p>
        <?= $mensagem ?>
    </p>
</body>
</html>