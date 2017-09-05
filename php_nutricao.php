<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>
            PROMOVE Nutrição
        </title>
        <link rel="stylesheet" 
        type='text/css'
        href='./css/estilos.css'>
    </head>
    <?php
$p= 2;
$altura1           = 2.00;
$altura2           = 1.72;
$altura3           = 1.64;
$altura4           = 1.73;
$altura5           = 1.55;

$potencia1         = pow($altura1, $p); 
$potencia2         = pow($altura2, $p);
$potencia3         = pow($altura3, $p);
$potencia4         = pow($altura4, $p);
$potencia5         = pow($altura5, $p);

$IMC1              = (100/$potencia1);
$IMC2              = (80/$potencia2);
$IMC3              = (54/$potencia3);
$IMC4              = (85/$potencia4);
$IMC5              = (46/$potencia5);

$IMCFormatacao1    = number_format($IMC1, 2, ',', '.');
$IMCFormatacao2    = number_format($IMC2, 2, ',', '.');
$IMCFormatacao3    = number_format($IMC3, 2, ',', '.');
$IMCFormatacao4    = number_format($IMC4, 2, ',', '.');
$IMCFormatacao5    = number_format($IMC5, 2, ',', '.');


        $data1 = new DateTime('19800101');
        $data2 = new DateTime('19900228');
        $data3 = new DateTime('19850910');
        $data4 = new DateTime('19890904');
        $data5 = new DateTime('19781231');

        $idadeData1 = $data1->diff(new DateTime());
        $idadeData2 = $data2->diff(new DateTime());
        $idadeData3 = $data3->diff(new DateTime());
        $idadeData4 = $data4->diff(new DateTime());
        $idadeData5 = $data5->diff(new DateTime());
    ?>
    <body>
        <h1>
            Promove Nutrição
        </h1>
        <h2 align = 'center' >
            Meus Pacientes
        </h2>
        <table id= mytable>
            <tr>
                <th>
                    Nome 
                </th>
                <th>
                    Peso(kg)
                </th>
                <th>
                    Altura(m)
                </th>
                <th>
                    IMC
                </th>
                <th>
                    Data de Nascimento
                </th>
                <th>
                    Idade
                </th>
            </tr>
            <tr>
                <td>
                    John Petrucci
                </td>
                <td>
                    100
                </td>
                <td>
                    2.00
                </td>
                <td>
                    <?php echo $IMCFormatacao1;  ?>
                </td>
                <td>
                    01/01/1980
                </td>
                <td>
                    <?php echo $idadeData1->y . " anos."; ?>
                </td>
            </tr>
            <tr>
                <td>
                    John Myung
                </td>
                <td>
                    80
                </td>
                <td>
                    1.72
                </td>
                <td>
                    <?php echo $IMCFormatacao2;  ?>
                </td>
                <td>
                    28/02/1990
                </td>
                <td>
                    <?php echo $idadeData2->y . " anos."; ?>
                </td>
            </tr>
            <tr>
                <td>
                    James Labrie
                </td>
                <td>
                    54
                </td>
                <td>
                    1.64
                </td>
                <td>
                    <?php echo $IMCFormatacao3;  ?> 
                </td>
                <td>
                    10/09/1985
                </td>
                <td>
                    <?php echo $idadeData3->y . " anos."; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Jordan Rudess
                </td>
                <td>
                    85
                </td>
                <td>
                    1.73
                </td>
                <td>
                    <?php echo $IMCFormatacao4;  ?> 
                </td>
                <td>
                    04/09/1989
                </td>
                <td>
                    <?php echo $idadeData4->y . " anos."; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Mike Mangini
                </td>
                <td>
                    46
                </td>
                <td>
                    1.55
                </td>
                <td>
                    <?php echo $IMCFormatacao5;  ?> 
                </td>
                <td>
                    31/12/1978
                </td>
                <td>
                    <?php echo $idadeData5->y . " anos."; ?>
                </td>
            </tr>
        </table>
    </body>
</html>