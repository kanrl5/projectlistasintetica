<html>

<head>
    <title>PHP Test</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">

<body>
    <header>
        <h2>Lista Sintética de Ufs do Brasil</h2>
    </header>
    <main>
        <?php
        $listasintetica = [
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="Bandeira do Acre"> ',
                'unidade_federativa' => 'Acre',
                'abreviacao' => 'AC',
                'sede_de_governo' => 'Rio Branco',
                'area' => 164122.2,
                'populacao' => 795145,
                'densidade' => 4.30,
                'pib_2015' => 13622000,
                '%_total' => 0.2,
                'pib_per_capita' => 16953.46,
                'idh' => 0.663,
                'alfabetizacao' => '86,9%',
                'mortalidade_infantil' => '17%',
                'expectativa_de_vida' => '73,9 anos',

            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg" alt="Bandeira do Alagoas">',
                'unidade_federativa' => 'Alagoas',
                'abreviacao' => 'AL',
                'sede_de_governo' => 'Maceió',
                'area' => 3327551,
                'populacao' => 3327551,
                'densidade' => 108.61,
                'pib_2015' => 46364000,
                '%_total' => 0.8,
                'pib_per_capita' => 13877.53,
                'idh' => 0.631,
                'alfabetizacao' => '80,6%',
                'mortalidade_infantil' => '19%',
                'expectativa_de_vida' => '71,6 anos',

            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg" alt="Bandeira do Amapá">',
                'unidade_federativa' => 'Amapá',
                'abreviacao' => 'AP',
                'sede_de_governo' => 'Macapá',
                'area' => 142814.6,
                'populacao' => 756500,
                'densidade' => 4.16,
                'pib_2015' => 13861000,
                '%_total' => 0.2,
                'pib_per_capita' => 18079.54,
                'idh' => 0.708,
                'alfabetizacao' => '95%',
                'mortalidade_infantil' => '23,2%',
                'expectativa_de_vida' => '73,9 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg" alt="Bandeira do Amazonas">',
                'unidade_federativa' => 'Amazonas',
                'abreviacao' => 'AM',
                'sede_de_governo' => 'Manaus',
                'area' => 1570745.7,
                'populacao' => 3893763,
                'densidade' => 2.05,
                'pib_2015' => 86560000,
                '%_total' => 1.4,
                'pib_per_capita' => 21978.95,
                'idh' => 0.674,
                'alfabetizacao' => '93,1%',
                'mortalidade_infantil' => '18,2%',
                'expectativa_de_vida' => '71,9 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg" alt="Bandeiraq da Bahia">',
                'unidade_federativa' => 'Bahia',
                'abreviacao' => 'BA',
                'sede_de_governo' => 'Salvador',
                'area' => 564692.7,
                'populacao' => 15150143,
                'densidade' => 24.46,
                'pib_2015' => 245025000,
                '%_total' => 4.1,
                'pib_per_capita' => 16115.89,
                'idh' => 0.660,
                'alfabetizacao' => '87%',
                'mortalidade_infantil' => '17,3%',
                'expectativa_de_vida' => '73,5 anos',
            )


        ]; ?>


        <table>

            <thead>
                <th>Bandeira</th>
                <th>Unidade Federativa</th>
                <th>Abreviação</th>
                <th>Sede de Governo</th>
                <th>Área</th>
                <th>População</th>
                <th>Densidade Demográfica</th>
                <th>PIB (2015)</th>
                <th>PIB em &#37; Total</th>
                <th>PIB per capta</th>
                <th>IDH</th>
                <th>Alfabetização</th>
                <th>Mortalidade Infantil</th>
                <th>Expectativa de Vida</th>

            </thead>
            <tbody>
                <?php
                foreach ($listasintetica as $valor) {
                ?>
                    <tr>
                        <td><?php echo $valor['bandeira']; ?></td>
                        <td><?php echo $valor['unidade_federativa']; ?></td>
                        <td><?php echo $valor['abreviacao']; ?></td>
                        <td><?php echo $valor['sede_de_governo']; ?></td>
                        <td><?php echo number_format((float)  $valor['area'], 2, ',', '.'); ?></td>
                        <td><?php echo $valor['populacao']; ?></td>
                        <td><?php echo number_format((float) $valor['densidade'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format((float) $valor['pib_2015'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format((float) $valor['%_total'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format((float) $valor['pib_per_capita'], 2, ',', '.'); ?></td>
                        <td><?php echo number_format((float) $valor['%_total'], 2, ',', '.'); ?></td>
                        <td><?php echo $valor['alfabetizacao']; ?></td>
                        <td><?php echo $valor['mortalidade_infantil']; ?></td>
                        <td><?php echo $valor['expectativa_de_vida']; ?></td>

                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>

    </main>

</body>

</html>