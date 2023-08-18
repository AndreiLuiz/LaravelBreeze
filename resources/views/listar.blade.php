<?php 
// include("listar.blade.php"); 
?> 

<!DOCTYPE html> 
  <html> 
    <head> 
      <meta charset="UTF-8"> 
      <title>Tutorial</title> 
    </head> 
    <body> 
      <table border="1"> 
        <tr> 
          <td>Nome</td> 
          <td>Telefone</td> 
          <td>Data de Nascimento</td> 
          <td>Origem</td> 
          <td>Observações</td> 
        </tr> 
        <?php while($dado = $con->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado['nome']; ?></td>
          <td><?php echo $dado['telefone']; ?></td>
          <td><?php echo date('d/m/Y', strtotime($dado['usu_datadecadastro'])); ?></td> 
          <td><?php echo $dado['origem']; ?></td>
          <td><?php echo $dado['observacoes']; ?></td>
          <td> 
            <a href="editar.php?codigo=<?php echo $dado['editar']; ?>">Editar</a> 
            <a href="excluir.php?codigo=<?php echo $dado['excluir']; ?>">Excluir</a> 
          </td> 
        </tr> 
        <?php } ?> 
      </table> 
    </body> 
</html>