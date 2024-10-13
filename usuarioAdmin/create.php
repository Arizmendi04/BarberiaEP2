<?php  include '../includes/head.php'?>

 <h6>Incorpora servicios</h6>
 
  <form method="POST" name="frm1" id="frm1" action="altaservicios.php">
   <div class="form_container">
     <label for="nombre" class="formulario_label">
      Nombre del servicio:</label>
       <input type="text" name="nombre" id="nombre" class="formulario_input">
   </div> 
        <div class="form_container">
         <label for="precio" class="formulario_label">
         Precio del servicio:</label>
         <input type="text" name="precio" id="precio" class="formulario_input"        
         onkeypress="if((event.keyCode < 48) || (event.keyCode >57)){
         event.returnValue=false;
         } "  maxlength="4">
        </div>                  
        <BR>
     <div class="form_container">                    
       <input type="button" value="Enviar Datos"  class="formulario_btn" onclick="validacion()">                    
       </div> 
       <script src='../Static/js/appvlidacion.js'></script>         
</form>

<a href="admin.php" class="enlace">
  <img src="../Static/img/back.png">
  <p>Regresar</p>
</a>
           
<?php  include '../includes/footer.php'; ?>