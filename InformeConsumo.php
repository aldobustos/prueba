<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="jquery-mobile/jquery.mobile.theme-1.3.0.min.css" rel="stylesheet" type="text/css">
<link href="jquery-mobile/jquery.mobile.structure-1.3.0.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.accordion.min.css" rel="stylesheet" type="text/css">
<script src="jquery-mobile/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-1.9.2.accordion.custom.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">

function validar(formulario){
	
	// Valida espacios vacíos en TXT Nombre
	
		alert("Pedido Ingresado Sin Problemas");
	
}


</script>

</head>

<body>

<form name = "form1" method="post" onSubmit="return validar (this)">


<div data-role="page" id="pagePedidosMesa">
  <div data-role="header">
    <h1>Total Consumido</h1>
    <p>&nbsp;<a href="index2.html" data-role="button" data-icon="home"></a></p>
  </div>
  <div data-role="content">
    <p>
      <label for="selectmenu" class="select">Seleccionar Mesa:</label>
      <select name="selectmenu" id="selectmenu">
        <option value="SOpciones">Seleccionar</option>
        <option value="option1">Mesa 1</option>
        <option value="option2">Mesa 2</option>
        <option value="option3">Mesa 3</option>
        <option value="option4">Mesa 4</option>
        <option value="option5">Mesa 5</option>
        <option value="option6">Mesa 6</option>
        <option value="option7">Mesa 7</option>
        <option value="option8">Mesa 8</option>
        <option value="option9">Mesa 9</option>
        <option value="option10">Mesa 10</option>
        <option value="option11">Mesa 11</option>
        <option value="option12">Mesa 12</option>
        <option value="option13">Mesa 13</option>
        <option value="option14">Mesa 14</option>
        <option value="option15">Mesa 15</option>
        <option value="option16">Mesa 16</option>
        <option value="option17">Mesa 17</option>
        <option value="option18">Mesa 18</option>
        <option value="option19">Mesa 19</option>
        <option value="option20">Mesa 20</option>
        <option value="option21">Mesa 21</option>
        <option value="option22">Mesa 22</option>
        <option value="option23">Mesa 23</option>
        <option value="option24">Mesa 24</option>
      </select>
    </p>
    <p>
    <p>Detalle de lo consumido:
    <div id="Accordion1">
      <h3><a href="#">Sandwich</a></h3>
      <div>
        <p>El Consumo de la sección fue:
        <input type="text" name="textfield" id="textfield"></p>
      </div>
      <h3><a href="#">Chorrillanas</a></h3>
      <div>
        <p>El consumo de la sección fue de:
         <input type="text" name="textfield" id="textfield">
        </p>
      </div>
      <h3><a href="#">Extras</a></h3>
      <div>
        <p>El detalle del consumo es:
        <input type="text" name="textfield" id="textfield"></p>
      </div>
      <h3><a href="#">Ensaladas</a></h3>
      <div>
        <p>El detalle del consumo es:
        <input type="text" name="textfield" id="textfield"></p>
      </div>
      <h3><a href="#">Bebidas y Licores</a></h3>
      <div>
        <p>El detalle del consumo es:
        <input type="text" name="textfield" id="textfield"></p>
      </div>
      <h3><a href="#">Cervezas</a></h3>
      <div>
        <p>El detalle del consumo es:
        <input type="text" name="textfield" id="textfield"></p>
      </div>

    </div>
    <p>
      
    <div class="ui-grid-a">
      <div data-role="fieldcontain">
        <fieldset data-role="controlgroup">
          <legend>Método de Pago:</legend>
          <p>
            <input type="radio" name="mediodepago" id="mediodepago_0" value="" />
            <label for="mediodepago_0">Efectivo</label>
          <input type="radio" name="mediodepago" id="mediodepago_1" value="" />
          <label for="mediodepago_1">Crédito</label>
          <input type="radio" name="mediodepago" id="mediodepago_2" value="" />
          <label for="mediodepago_2">Debito</label>
          </p>
          <p>&nbsp;
            <button data-icon="forward" data-iconpos="notext">Botón</button>
          </p>
        </fieldset>
      </div>
    </div>
    <p>    
    <p>        
</div>
</div>
<script type="text/javascript">
$(function() {
	$( "#Accordion1" ).accordion(); 
});
</script>
</body>
</html>