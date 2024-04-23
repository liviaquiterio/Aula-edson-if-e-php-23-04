<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média e frequência em PHP</title>
    <style>
        body {
            font-family: 'Courièr New', Courier, monospace;
            font-size: 20px;
            background-color: black;
        }

        #container {
            margin: auto;
            width: 1200px;
        }

        #login {
            margin: 100px auto;
            border: 1px solid green;
            background-color: pink;
            color: green;
            width: 550px;
            padding: 1%;
        }

        label {
            color: white;
            font-weight: bold;
        }

        input[type="submit"] {
            width: 130px;
            height: 40px;
            margin-left: 30%;
            background: red;
            color: black;
            font-size: 16px;
            cursor: pointer;
            border-radius: 15px;

        }
    </style>
</head>
<body>
<div id="container">
        <div id="login">
            <h3>Média e Frequência em PHP</h3>
            <form name="media_frequencia" method="post" action="media_frequencia.php">
                <p>
                    <label>Aluno:</label>
                    <input type="text" name="aluno" maxlenght="60" placeholder="Informe o nome do aluno required">
                </p>
                <p>
                    <label>Disciplina:</label><br>
                    <select name="disciplina" required>
                        <option value="Historia">História</option>
                        <option value="Portugues">Português</option>
                        <option value="Matematica">Matemática</option>
                        <option value="Biologia">Biologia</option>
                        <option value="Educacao Fisica">Educação Física</option>
                        </select>
                </p>
                <p>
                <label>Série:</label><br>
                    <select name="serie" required>
                        <option value="1info">1° Informática</option>
                        <option value="2info">2° Informática</option>
                        <option value="3info">3° Informática</option>
                        <option value="1adm">1° Administração</option>
                        <option value="2adm">2° Administração</option>
                        <option value="3adm">3° Administração</option>
                        </select>
                </p>
                <p>
                <label>Ano Letivo:</label><br>
                    <input type="text" name="ano" win="0" max="10" step="0.01" required><br>
                </p>
                <p>
                    <label>Média:</label>
                    <input type="number" name="media" win="0" max="10" step="0.01" required><br>
                </p>
                <p>
                    <label>Frequência:</label>
                    <input type="text" name="frequencia" win="0" max="10" step="0.01" required><br>
                </p>
                <p>
                    <label>Faltas 1° Semestre:</label>
                    <input type="text" name="faltas1" win="0" max="10" step="0.01" required><br>
                </p>
                <p>
                    <label>Faltas 2° Semestre:</label>
                    <input type="text" name="faltas2" win="0" max="10" step="0.01" required><br>
                </p>
                <p>
                    <input type="submit" value="Exibir" name="exibir">
                </p>
            </form> 
            <?php
        if(isset($_POST["exibir"]))
        {
            $aluno = $_POST["aluno"];
            $disciplina = $_POST["disciplina"];
            $serie = $_POST["serie"];
            $ano = $_POST["ano"];
            $media = $_POST["media"];
            $frequencia = $_POST["frequencia"];
            $faltas1 = $_POST["faltas1"];
            $faltas2 = $_POST["faltas2"];
            // exibe os dados
            echo "<hr size='3' color='white' align='left'>";
            echo "<strong>Aluno......: </strong>" . $aluno;
            echo "<strong><br>Disciplina: </strong>" . $disciplina;
            echo "<strong><br>Série: </strong>" . $serie;
            echo "<strong><br>Ano Letivo: </strong>" . $ano;
            echo "<strong><br>Média: </strong>" . $media;
            echo "<strong><br>Frequência: </strong>" . $frequencia;
            echo "<strong><br>Faltas 1° Semestre: </strong>" . $faltas1;
            echo "<strong><br>Faltas 2° Semestre: </strong>" . $faltas2;
            $soma = $faltas1 + $faltas2 ;
            echo "<strong><br>Soma de Faltas: </strong>" . $soma . "<br>" ;
            $mensagem = "";
        
            if($media >=6 && $frequencia >= 75)
            {
                $mensagem="O aluno está aprovado";
            }
            else {
                $mensagem="O aluno está reprovado";
            }
            echo "$mensagem";
        }
        ?>
</body>
</html>