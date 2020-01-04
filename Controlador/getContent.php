<?php
    //DB details
    include "../Controlador/Conexion.php";
    $id = $_GET['id'];

    //get content from database
    $queryProducto = "SELECT * FROM producto WHERE ID_PRODUCTO = ".$id;
    $rsProducto = mysqli_query($con, $queryProducto) or die ("Error de consulta");
    $Producto = mysqli_fetch_array($rsProducto);

    echo $Nombre = $Producto[1];
        echo"
        <form class='text-center border border-light p-5' action='./Controlador/productoMod.php' method='post' enctype='multipart/form-data'>
            <!-- Name -->
            <div class='md-form'>
              <h6 style='text-align:left'>Nombre:</h6>
              <input name='Id' type='hidden' class='form-control'  value='".$id."' required>
              <input name='Nombre' type='text' class='form-control'  value= '".$Nombre."' required>
            </div>
                           
            <!-- imagen -->
            <div class='row'>
            <div class='col-lg-2'>
            <h6 style='text-align:left'>Actual:</h6>
            <input name='ImgOld' type='hidden' class='form-control'  value='".$Producto[2]."' required>
            <img src='./Media/Productos/$Producto[2]' style='border-radius:5px; width: 130px;' class='img-fluid' alt='Imagen Actual'>
            </div>
            <div class='col-lg-10'>
            <h6 style='text-align:left'>Nueva: (Si no cambia dejar en blanco)</h6>
            <div class='p-1 mb-2' style='text-align:left;background:whitesmoke;border-radius:5px' >
              <label for=''>Imagen</label>
              <div class='custom-file'>
                <input name='Imagen' type='file' class='custom-file-input' id='inputGroupFile01' aria-describedby='inputGroupFileAddon01'>
                <label class='custom-file-label' for='inputGroupFile01'>Seleccionar</label>
              </div>
            </div>
            </div>
            </div>
                                  
            <!-- referencia -->
            <div class='row'>
            <div class='col-lg-2'>
            <h6 style='text-align:left'>Actual:</h6>
            <input name='RefOld' type='hidden' class='form-control'  value='".$Producto[3]."' required>
            <img src='./Media/Referencias/$Producto[3]' style='border-radius:5px; width: 130px;' class='img-fluid img-thumbnail ' alt='Referencia Actual'>
            </div>
            <div class='col-lg-10'>
            <h6 style='text-align:left'>Nueva: (Si no cambia dejar en blanco)</h6>
            <div class='p-1' style='text-align:left;background:whitesmoke;border-radius:5px' >
              <label for=''>Referencia</label>
              <div class='custom-file'>
                <input name='Referencia' type='file' class='custom-file-input' id='inputGroupFile01'
                aria-describedby='inputGroupFileAddon01'>
                <label class='custom-file-label' for='inputGroupFile01'>Seleccionar</label>
              </div>
            </div>
            </div>
            </div>

            <!-- materiales -->
            <div class='md-form'>
            <h6 style='text-align:left'>Materiales</h6>
            <textarea name='Materiales' id='textarea-char-counter' class='form-control md-textarea' length='120' rows='2' required>".str_replace("<br />", " ", nl2br($Producto[4]))."</textarea>
            </div>

            <!-- colores -->
            <div class='md-form'>
            <h6 style='text-align:left'>Colores</h6>
            <textarea name='Colores' id='textarea-char-counter' class='form-control md-textarea' length='120' rows='2' required>".str_replace("<br />", " ", nl2br($Producto[5]))."</textarea>
            </div>

            <!-- medidias -->
            <div class='md-form'>
            <h6 style='text-align:left'>Medidas</h6>
            <textarea name='Medidas' id='textarea-char-counter' class='form-control md-textarea' length='120' rows='2' required>".str_replace("<br />", " ", nl2br($Producto[6]))."</textarea>
            </div>

            <!-- categoria -->
            <div class=' style='text-align:left'>
              <label for='' style='text-align:left'>Categoria</label>
              <select name='Categoria' class='browser-default custom-select' required>
                <option selected value=".$Producto[7].">".$Producto[7]."</option>";
                  $queryCategoria = "SELECT * FROM categoria"; 
                  $rsCategoria = mysqli_query($con, $queryCategoria) or die ("Error de consulta");
                                              
                    while ($Categoria = mysqli_fetch_array($rsCategoria)) {
                      if ($Categoria[0] != $Producto[7]) {
                        echo"
                <option value='$Categoria[0]'>$Categoria[0]</option>";
                      }}
                      echo"
              </select>
            </div>
            <br>
                                         
            <button class='btn btn-success btn-block' type='submit'>Guardar</button>
          </form>
          <script>
// Add the following code if you want the name of the file appear on select
$('.custom-file-input').on('change', function() {
  var fileName = $(this).val().split('\\').pop();
  $(this).siblings('.custom-file-label').addClass('selected').html(fileName);
});
</script>";

// close connection
mysqli_close($con);
?>