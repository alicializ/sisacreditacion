<?php  include("../lib/functions.php"); ?>
<script type="text/javascript" src="js/app/evt_form_requisitos_cca.js" ></script>
<script type="text/javascript" src="js/validateradiobutton.js"></script>

<div class="div_container">
<h6 class="ui-widget-header">Registro de Requisitos CCA</h6>

<form id="frm" action="index.php" method="POST">
    <input type="hidden" name="controller" value="requisitos_cca" />
    <input type="hidden" name="action" value="save2" />
    <div class="contFrm ui-corner-all" style="background: #fff;">
        <div class="contenido" style="margin:0 auto; width: 450px; " align="center">
            <fieldset class="ui-corner-all" >
                <legend>Datos</legend>  
               <table border="0" cellpadding="3" cellspacing="1" style="background-color:#fff;" >
                   <tr class="fil">
                      <td width="20%" align="left">
                        <span for="idrequisito" ><strong>ID:</strong></label>
                      </td>
                      <td width="30%">
                        <input id="idrequisito" name="idrequisito" class="text ui-widget-content ui-corner-all" style=" width: 150px; text-align: left;" value="<?php echo $obj->idrequisito; ?>" readonly />                
                        <input type="hidden" name="idcomision" value="<?php echo $idcomi?>">
                      </td>
                      <td width="20%" align="left">
                         <strong for="descripcion" >Descripcion:</strong>
                      </td>  
                      <td width="30%" >
                         <input id="descripcion" name="descripcion" class="text ui-widget-content ui-corner-all" style=" width: 150px; text-align: left;" value="<?php echo $obj->descripcion; ?>"  />                
                       </td>
                    </tr>               
               </table>
                </fieldset>
                </div>
            
             <div class="contenido" style="margin:0 auto; width: 450px; " align="center">
             <fieldset class="ui-corner-all" >
                <legend>Accion</legend> 
                 <div  style="clear: both; padding: 10px; width: auto;text-align: center">
                    <a href="#" id="save" class="button">GRABAR</a>
<!--                    <a href="index.php?controller=requisitos_cca" class="button">ATRAS</a>-->
                 </div>   
              </fieldset>
              </div>
        </div>
    </div>
</form>
