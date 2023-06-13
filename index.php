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
                'bandeira' => '.' ,
                'unidade_federativa' => 'Acre',
                'abreviacao' => 'AC',
                'sede_de_governo' => 'Rio Branco',
                'area' => 164122.2,
                'populacao' => 795145,
                'densidade' => 4,30,
                'pib_2015' => 13622000,
                '%_total' => 0.2,
                'pib_per_capita' => 16953.46,
                'idh' => 0.663,
                'alfabetizacao' => '86,9%',
                'mortalidade_infantil' => 17,
                'expectativa_de_vida' => '73,9 anos',
              
            ),
            array(
                'bandeira' => 'joana' ,
                'unidade_federativa' => 1,
                'abreviacao' => 1,
                'sede_de_governo' => 1,
                'area' => 1,
                'populacao' => 1,
                'densidade' => 1,
                'pib_2015' => 1,
                '%_total' => 1,
                'pib_per_capita' => 1,
                'idh' => 1,
                'alfabetizacao' => 1,
                'mortalidade_infantil' => 1,
                'expectativa_de_vida' => 1,
              
            ),
            
        ]; ?>

        
        <table>
          
          <tr> 
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
            
          </tr>
          <?php
foreach ($listasintetica as $valor) {
?>
    <tr>
        <td><?php echo $valor['bandeira']; ?></td>
        <td><?php echo $valor['unidade_federativa']; ?></td>
        <td><?php echo $valor['abreviacao']; ?></td>
        <td><?php echo $valor['sede_de_governo']; ?></td>
        <td><?php echo $valor['area']; ?></td>
        <td><?php echo $valor['populacao']; ?></td>
        <td><?php echo $valor['densidade']; ?></td>
        <td><?php echo $valor['pib_2015']; ?></td>
        <td><?php echo $valor['%_total']; ?></td>
        <td><?php echo $valor['pib_per_capita']; ?></td>
        <td><?php echo $valor['idh']; ?></td>
        <td><?php echo $valor['alfabetizacao']; ?></td>
        <td><?php echo $valor['mortalidade_infantil']; ?></td>
        <td><?php echo $valor['expectativa_de_vida']; ?></td>
      
    </tr>
<?php
}
?>
    

        </table>
        
    </main>

  </body>
</html>