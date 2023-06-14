<!DOCTYPE html>
  <html>
    <head>
        <style type="text/css">
            p{
               text-align: justify;
            }
        </style>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
          
        <?php
        
         include './menu.php';
        ?>
<div class="container">
    <h6>Adicionar uma nova Ordem de Serviço</h6>
    <div class="row">
        <table>
            <thead>
               <th>ID</th>
               <th>Nome</th>
               <th>CPF</th>
               <th>Data do Serviço</th>
            </thead>
        <?php
             include './conexao.php';
             
             $id_pesquisa = $_GET['id'];
             
             echo "ID selecionado: " , $id_pesquisa,"<br>";
             $sql = "SELECT * FROM ordem_servico WHERE id='$id_pesquisa'";
             $restultado = mysqli_query($conn, $sql);
             while ($dados = mysqli_fetch_array($restultado)) {
        ?>
            <tbody>
               <td> <?php echo  $dados['id'] ?></td>
               <td> <?php echo $dados['nome'] ?></td>
               <td> <?php echo $dados['cpf'] ?></td>
               <td> <?php echo (date("d/m/y", strtotime($dados['data_servico']))) ?></td>
            </tbody>
            
         <?php } ?>
          
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">
      
      </script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>