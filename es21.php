<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio21</title>
</head>
<body>
    <?php
        $studenti = [];
        $nomiStudenti = array("Patrizio","Tileryo","Cristiano");
        $cognomiStudenti = array("Battiuomo","Duodeno","Balla");
        for ($i = 0;$i<count($nomiStudenti);$i++) {
            $listaVoti = array(rand(2,10),rand(2,10),rand(2,10));
            $stud = array("nome" => $nomiStudenti[$i], "cognome" => $cognomiStudenti[$i], "listaVoti" => $listaVoti);
            $studenti[] = $stud;
            echo "<h2>{$studenti[$i]["nome"]} {$studenti[$i]["cognome"]}</h2><ul>";
            for ($j = 0;$j<count($listaVoti);$j++) {
                echo "<li>$listaVoti[$j]</li>";
            }
            echo "</ul>";
        }
    ?>
    <table style ="border:1px solid black;">
    <tr>
        <th>Nome Studente</th>
        <th>Cognome Studente</th>
        <th>Media Voti</th>
        <th>Voto Massimo</th>
    </tr>
    <?php
        for ($i = 0;$i<count($studenti);$i++) {
            $sum = 0;
            $max = $studenti[$i]["listaVoti"][0];
            for ($j = 0;$j<count($studenti);$j++) {
                $sum += $studenti[$i]["listaVoti"][$j];
                if($studenti[$i]["listaVoti"][$j]>$max) {
                    $max = $studenti[$i]["listaVoti"][$j];
                }
            }
            $media = number_format($sum/count($listaVoti), 2);
            echo "<tr><td>{$studenti[$i]["nome"]}</td><td>{$studenti[$i]["cognome"]}</td><td>$media</td><td>$max</td></tr>";
        }
    ?>
</body>
</html>