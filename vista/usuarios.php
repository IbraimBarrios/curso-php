<html>
  <head>

  </head>
  <body>
    <table>
      <tr>
        <?php 
        require_once("../core/constantes.php");
        foreach(usuarioColumnas as $value): ?>
        <td><?php echo $value;?></td>
        <?php endforeach; ?>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><a href="">Editar</a></td>
        <td><a onclick="javascript:return confirm('¿Seguro de eliminar este registro?')" href="">Eliminar</a></td>
      </tr>
    </table>
  </body>
</html>