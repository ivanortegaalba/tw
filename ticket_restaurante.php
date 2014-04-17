<html>
    <head>
            <title>Cuenta del restaurante</title>
    </head>
    <body>
        <h3>Cuenta de la mesa <?php $mesa = 23; echo $mesa?></h3>
        
        <?php
            $IVA=0.21;
            $mesa = 23;
            $pl1 = "Berenjenas fritas ";
            $pl2 = "Patatas con huevos";
            $pl3 = "Pimientos fritos ";
            $pl4 = "Ensalada ";
            $pl5 = "Browni ";
            $plato = "%s -> %d € <br>\n";
            $coniva = "TOTAL = %d € <br>\n";
            $impuesto = "IVA = %d  <br>\n";

            $pr1 = 30;
            $pr2 = 25;
            $pr3 = 50;
            $pr4 = 44;
            $pr5 = 72;

            $total = $pr1+$pr2+$pr3+$pr4+$pr5;
            $totaliva = $total * $IVA;

            printf($plato, $pl1, $pr1);
            printf($plato, $pl2, $pr2);
            printf($plato, $pl3, $pr3);
            printf($plato, $pl4, $pr4);
            printf($plato, $pl5, $pr5);
            printf($coniva,$total);
            printf($impuesto,$IVA);
            printf($coniva,$totaliva);
        ?>
    </body>
</html>