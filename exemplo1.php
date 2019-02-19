<?php

    include ("cadeira.php");

    $c1 = new Cadeira("Azul", "5.3", "Ferro", "10", "120", true, "0.85", "0.4");

    //print_r ($c1);

    //print_r ($c1);
    $c1->aumentar(0.5);

    echo"<br /><br />";
    //print_r ($c1);
    echo"<br /><br />";

    $c2 = new Cadeira("Preta", "0.9", "Plástico", "5", "40", false, "0.4", "0.4");

   /* print_r ($c2);
    $c2->abaixar(0.5);

    echo"<br /><br />";
    print_r ($c2);
    echo"<br /><br />";*/
?>

    <table border = "1">
        <tr>
            <th>cor</th>
            <th>peso</th>
            <th>material</th>
            <th>durabilidade</th>
            <th>custo</th>
            <th>tamanho</th>
            <th>encosto</th>
        </tr>";

<?php
    echo "
    <table border = '1'>
        <tr>
            <td>$c1->cor</td>
            <td>$c1->peso</td>
            <td>$c1->material</td>
            <td>$c1->durabilidade</td>
            <td>$c1->custo</td>
            <td>$c1->encosto</td>
        </tr>
    </table>";
    echo "
    <table border = '1'>
        <tr>
            <td>$c2->cor</td>
            <td>$c2->peso</td>
            <td>$c2->material</td>
            <td>$c2->durabilidade</td>
            <td>$c2->custo</td>
            <td>$c2->encosto</td>
        </tr>
    </table>";
?>

   