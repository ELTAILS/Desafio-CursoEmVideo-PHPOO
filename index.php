<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15 -- Desafio</title>
</head>
<body>
    <pre>
        <?php 
            require_once "Visualizacao.php";
            try{
                            $curso = [
                new Video("Algoritimos 40 Horas"),
                new Video("PHP OO 40 Horas"),
                new Video("JAVA OO 40 Horas")

            ];
            $aluninho = [
                new Gafanhoto("Wagner",19,"M"),
                new Gafanhoto("Maria",22,"f")
            ];

            $cursoAtual = [
                new Visualizacao($aluninho[0],$curso[1]),
                new Visualizacao($aluninho[1],$curso[0])
            ];

            $aluninho[0]->viuMaisUm();
            // $cursoAtual[0]->avaliar();
            //$cursoAtual[0]->avaliarNota(10);
            $cursoAtual[0]->avaliarPorc(75);
            print_r($cursoAtual);
            } catch(Exception){
                echo "Erro no codigo";
            }
        ?>
    </pre>
</body>
</html>