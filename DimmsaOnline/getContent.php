<?php
    //DB details
    include "../Controlador/Conexion.php";
    $id = $_GET['id'];

    //get content from database
    $queryCategoria = "SELECT * FROM PRODUCTO WHERE ID_PRODUCTO = ".$id;
    $rsCategoria = mysqli_query($con, $queryCategoria) or die ("Error de consulta");
    $Categoria = mysqli_fetch_array($rsCategoria);

    echo $Nombre =$Categoria[1];
        echo"
        <form class='text-center border border-light p-5' action='productoUp.php' method='post' enctype='multipart/form-data'>
                                  <!-- Name -->
                                  <div class='md-form'>
                                      <input name='Id' type='hidden' id='form1' class='form-control' value=".$Categoria[0]." required>
                                      <input name='Nombre' type='text' id='form1' class='form-control' value= ".$Nombre." required>
                                      <label>Nombre</label>
                                  </div>
                                  
                                  <!-- imagen -->
                                  <div class='p-1 mb-2' style='text-align:left;background:whitesmoke;border-radius:5px' >
                                      <label for=''>Imagen</label>
                                      <div class='custom-file'>
                                        <input name='Imagen' type='file' class='custom-file-input' id='inputGroupFile01'
                                          aria-describedby='inputGroupFileAddon01'>
                                        <label class='custom-file-label' for='inputGroupFile01'>Seleccionar</label>
                                      </div>
                                    </div>
                                  
                                  <!-- referencia -->
                                  <div class='p-1' style='text-align:left;background:whitesmoke;border-radius:5px' >
                                      <label for=''>Referencia</label>
                                      <div class='custom-file'>
                                        <input name='Referencia' type='file' class='custom-file-input' id='inputGroupFile01'
                                          aria-describedby='inputGroupFileAddon01'>
                                        <label class='custom-file-label' for='inputGroupFile01'>Seleccionar</label>
                                      </div>
                                    </div>

                                  <!-- materiales -->
                                  <div class='md-form'>
                                      <textarea name='Materiales' id='textarea-char-counter' class='form-control md-textarea' length='120' rows='2'>".nl2br($Categoria[3])."</textarea>
                                      <label for='textarea-char-counter'>Materiales</label>
                                  </div>

                                  <!-- colores -->
                                  <div class='md-form'>
                                      <textarea name='Colores' id='textarea-char-counter' class='form-control md-textarea' length='120' rows='2'>".nl2br($Categoria[4])."</textarea>
                                      <label for='textarea-char-counter'>Colores</label>
                                  </div>

                                  <!-- medidias -->
                                  <div class='md-form'>
                                      <textarea name='Medidas' id='textarea-char-counter' class='form-control md-textarea' length='120' rows='2' >".nl2br($Categoria[5])."</textarea>
                                      <label for='textarea-char-counter'>Medidas</label>
                                  </div>

                                  <!-- categoria -->
                                  <div class=' style='text-align:left'>
                                      <label for=' style='text-align:left'>Categoria</label>
                                      <select name='Categoria' class='browser-default custom-select'>
                                          <option selected value=".$Categoria[6].">".$Categoria[6]."</option>";
                                          $queryCategoria = "SELECT * FROM CATEGORIA"; 
                                          $rsCategoria = mysqli_query($con, $queryCategoria) or die ("Error de consulta");
                                              
                                            while ($Categoria = mysqli_fetch_array($rsCategoria)) {
                                              echo"
                                              <option value='$Categoria[0]'>$Categoria[0]</option>
                                               ";
                                               }
                                               echo"
                                        </select>
                                  </div>
                                  <br>
                              
                                
                                  <button class='btn btn-success btn-block' type='submit'>Guardar</button>

                              
                              
                              </form>";

// close connection
mysqli_close($con);
?>