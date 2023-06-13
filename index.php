<html>

<head>
    <title>PHP Test</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital@1&family=Roboto:wght@300&display=swap" rel="stylesheet">

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
                'alfabetizacao' => '86,9‰',
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
                'alfabetizacao' => '80,6‰',
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
                'alfabetizacao' => '95‰',
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
                'alfabetizacao' => '93,1‰',
                'mortalidade_infantil' => '18,2%',
                'expectativa_de_vida' => '71,9 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg" alt="Bandeira da Bahia">',
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
                'alfabetizacao' => '87‰',
                'mortalidade_infantil' => '17,3%',
                'expectativa_de_vida' => '73,5 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Cear%C3%A1.svg" alt="Bandeira da Ceará">',
                'unidade_federativa' => 'Ceará',
                'abreviacao' => 'CE',
                'sede_de_governo' => 'Fortaleza',
                'area' => 148825.6,
                'populacao' => 8867448,
                'densidade' => 54, 40,
                'pib_2015' => 130621000,
                '%_total' => 2.2,
                'pib_per_capita' => 14669.14,
                'idh' => 0.682,
                'alfabetizacao' => '84,8‰',
                'mortalidade_infantil' => '14,4%',
                'expectativa_de_vida' => '73,8 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg" alt="Bandeira do Distrito Federal">',
                'unidade_federativa' => 'Distrito Federal',
                'abreviacao' => 'DF',
                'sede_de_governo' => 'Brasília',
                'area' => 5822.1,
                'populacao' => 2867869,
                'densidade' => 400.73,
                'pib_2015' => 215613000,
                '%_total' => 3.6,
                'pib_per_capita' => 73971.05,
                'idh' => 0.824,
                'alfabetizacao' => '97,4‰',
                'mortalidade_infantil' => '10,5%',
                'expectativa_de_vida' => '78,1 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg" alt="Bandeira do Espírito Santo">',
                'unidade_federativa' => 'Espírito Santo',
                'abreviacao' => 'ES',
                'sede_de_governo' => 'Vitória',
                'area' => 46077.5,
                'populacao' => 3894899,
                'densidade' => 73.97,
                'pib_2015' => 120.363000,
                '%_total' => 2,
                'pib_per_capita' => 30627.45,
                'idh' => 0.740,
                'alfabetizacao' => '93,8‰',
                'mortalidade_infantil' => '8,8%',
                'expectativa_de_vida' => '78,2 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goi%C3%A1s.svg" alt="Bandeira de Goiás">',
                'unidade_federativa' => 'Goiás',
                'abreviacao' => 'GO',
                'sede_de_governo' => 'Goiânia',
                'area' => 340086.7,
                'populacao' => 6551322,
                'densidade' => 16.52,
                'pib_2015' => 173632000,
                '%_total' => 2.9,
                'pib_per_capita' => 26265.32,
                'idh' => 0.735,
                'alfabetizacao' => '93,5‰',
                'mortalidade_infantil' => '14,9%',
                'expectativa_de_vida' => '74,2 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranh%C3%A3o.svg" alt="Bandeira do Maranhão">',
                'unidade_federativa' => 'Maranhão',
                'abreviacao' => 'MA',
                'sede_de_governo' => 'São Luiz',
                'area' => 331983.3,
                'populacao' => 6861924,
                'densidade' => 18.38,
                'pib_2015' => 78475000,
                '%_total' => 1.3,
                'pib_per_capita' => 110366.23,
                'idh' => 0.639,
                'alfabetizacao' => '83,3%',
                'mortalidade_infantil' => '21,3‰',
                'expectativa_de_vida' => '70.6 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg" alt="Bandeira do Mato Grosso">',
                'unidade_federativa' => 'Mato Grosso',
                'abreviacao' => 'MT',
                'sede_de_governo' => 'Cuiabá',
                'area' => 903357.9,
                'populacao' => 3236578,
                'densidade' => 3.10,
                'pib_2015' => 107418000,
                '%_total' => 1.8,
                'pib_per_capita' => 32894.96,
                'idh' => 0.725,
                'alfabetizacao' => '93,5%',
                'mortalidade_infantil' => '16,9‰',
                'expectativa_de_vida' => '74,2 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg" alt="Bandeira do Mato Grosso do Sul ">',
                'unidade_federativa' => 'Mato Grosso do Sul',
                'abreviacao' => 'MS',
                'sede_de_governo' => 'Campo Grande',
                'area' => 357125,
                'populacao' => 2630098,
                'densidade' => 6.34,
                'pib_2015' => 83082000,
                '%_total' => 1.4,
                'pib_per_capita' => 31337.22,
                'idh' => 0.729,
                'alfabetizacao' => '93,7%',
                'mortalidade_infantil' => '14,0‰',
                'expectativa_de_vida' => '75.5 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg" alt="Bandeira de Minas Gerais">',
                'unidade_federativa' => 'Minas-Gerais',
                'abreviacao' => 'MG',
                'sede_de_governo' => 'Belo Horizonte',
                'area' => 586528.3,
                'populacao' => 20777672,
                'densidade' => 32.79,
                'pib_2015' => 519326000,
                '%_total' => 8.7,
                'pib_per_capita' => 248884.94,
                'idh' => 0.731,
                'alfabetizacao' => '93,8%',
                'mortalidade_infantil' => '10,9‰',
                'expectativa_de_vida' => '77,2 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Par%C3%A1.svg" alt="Bandeira do Pará">',
                'unidade_federativa' => 'Pará',
                'abreviacao' => 'PA',
                'sede_de_governo' => 'Belém',
                'area' => 1247689.5,
                'populacao' => 8101180,
                'densidade' => 5.58,
                'pib_2015' => 130883000,
                '%_total' => 2.2,
                'pib_per_capita' => 16009.98,
                'idh' => 0.646,
                'alfabetizacao' => '90,7%',
                'mortalidade_infantil' => '16,6‰',
                'expectativa_de_vida' => '72,1 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Para%C3%ADba.svg" alt="Bandeira da Paraíba ">',
                'unidade_federativa' => 'Paraíba',
                'abreviacao' => 'PB',
                'sede_de_governo' => 'João Pessoa',
                'area' => 56439.8,
                'populacao' => 3950359,
                'densidade' => 63.71,
                'pib_2015' => 56140000,
                '%_total' => 0.9,
                'pib_per_capita' => 141333.32,
                'idh' => 0.658,
                'alfabetizacao' => '83.7%',
                'mortalidade_infantil' => '16.1‰',
                'expectativa_de_vida' => '73.2 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paran%C3%A1.svg" alt="Bandeira do Paraná">',
                'unidade_federativa' => 'Paraná',
                'abreviacao' => 'PR',
                'sede_de_governo' => 'Curitiba',
                'area' => 199314.9,
                'populacao' => 11112062,
                'densidade' => 51.48,
                'pib_2015' => 376960000,
                '%_total' => 6.3,
                'pib_per_capita' => 33768.62,
                'idh' => 0.749,
                'alfabetizacao' => '95,5%',
                'mortalidade_infantil' => '9,3‰',
                'expectativa_de_vida' => '77,1 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg" alt="Bandeira de Pernambuco">',
                'unidade_federativa' => 'Pernambuco',
                'abreviacao' => 'PE',
                'sede_de_governo' => 'Recife',
                'area' => 98311.6,
                'populacao' => 9297861,
                'densidade' => 85.58,
                'pib_2015' => 156955000,
                '%_total' => 2.6,
                'pib_per_capita' => 16795.34,
                'idh' => 0.673,
                'alfabetizacao' => '87.2%',
                'mortalidade_infantil' => '12.7‰',
                'expectativa_de_vida' => '73,9 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piau%C3%AD.svg" alt="Bandeira do Piauí ">',
                'unidade_federativa' => 'Piauí',
                'abreviacao' => 'PI',
                'sede_de_governo' => 'Teresina',
                'area' => 251529.2,
                'populacao' => 3198185,
                'densidade' => 11.95,
                'pib_2015' => 39148000,
                '%_total' => 0.7,
                'pib_per_capita' => 12218.51,
                'idh' => 0.646,
                'alfabetizacao' => '82,8%',
                'mortalidade_infantil' => '19,1‰',
                'expectativa_de_vida' => '71,1 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg" alt="Bandeira do Rio de Janeiro">',
                'unidade_federativa' => 'Rio de Janeiro',
                'abreviacao' => 'RJ',
                'sede_de_governo' => 'Rio de Janeiro',
                'area' => 43696.1,
                'populacao' => 16497395,
                'densidade' => 352.05,
                'pib_2015' => 659137000,
                '%_total' => 11,
                'pib_per_capita' => 39826.95,
                'idh' => 0.761,
                'alfabetizacao' => '97,3%',
                'mortalidade_infantil' => '11,5‰',
                'expectativa_de_vida' => '76,2 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg" alt="Bandeira Rio Grande do Norte">',
                'unidade_federativa' => 'Rio Grande do Norte',
                'abreviacao' => 'RN',
                'sede_de_governo' => 'Natal',
                'area' => 52796.8,
                'populacao' => 3419550,
                'densidade' => 56.88,
                'pib_2015' => 57250000,
                '%_total' => 1,
                'pib_per_capita' => 16631.86,
                'idh' => 0.684,
                'alfabetizacao' => '85.3%',
                'mortalidade_infantil' => '14.7‰',
                'expectativa_de_vida' => '75,7 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg" alt="Bandeira do Rio Grande do Sul ">',
                'unidade_federativa' => 'Rio Grande do Sul',
                'abreviacao' => 'RS',
                'sede_de_governo' => 'Porto Alegre',
                'area' => 281748.5,
                'populacao' => 11228091,
                'densidade' => 38.49,
                'pib_2015' => 381985000,
                '%_total' => 6.4,
                'pib_per_capita' => 33960.36,
                'idh' => 0.746,
                'alfabetizacao' => '96,8%',
                'mortalidade_infantil' => '9,6‰',
                'expectativa_de_vida' => '77,8 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rond%C3%B4nia.svg" alt="Bandeira de Rondônia ">',
                'unidade_federativa' => 'Rondônia',
                'abreviacao' => 'RO',
                'sede_de_governo' => 'Porto Velho',
                'area' => 237576.2,
                'populacao' => 1755015,
                'densidade' => 6.46,
                'pib_2015' => 36563000,
                '%_total' => 0.6,
                'pib_per_capita' => 20677.95,
                'idh' => 0.690,
                'alfabetizacao' => '93,3%',
                'mortalidade_infantil' => '20,0‰',
                'expectativa_de_vida' => '71,3 anos',
            ),
            array(
                'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg" alt="Bandeira de Roraima">',
                'unidade_federativa' => 'Roraima',
                'abreviacao' => 'RR',
                'sede_de_governo' => 'Boa Vista',
                'area' => 224299,
                'populacao' => 500826,
                'densidade' => 1.74,
                'pib_2015' => 10354000,
                '%_total' => 0.2,
                'pib_per_capita' => 20476.71,
                'idh' => 0.707,
                'alfabetizacao' => '93.4%',
                'mortalidade_infantil' => '17.2‰',
                'expectativa_de_vida' => '71,5 anos',
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
                <th>PIB em &#37; total</th>
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