<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="jquery-mobile/jquery.mobile.theme-1.3.0.min.css" rel="stylesheet" type="text/css">
<link href="jquery-mobile/jquery.mobile.structure-1.3.0.min.css" rel="stylesheet" type="text/css">
<script src="jquery-mobile/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>

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
    <h1>Ingresar Pedido</h1>
  </div>
  <div data-role="content">
    <p>
      <label for="selectmenu" class="select">Seleccionar Mesa:</label>
      <select name="selectmenu" id="selectmenu">
        <option value="option1">Opción 1</option>
        <option value="option2">Opción 2</option>
        <option value="option3">Opción 3</option>
      </select>
    </p>
    <p>&nbsp;    
    
    <div data-role="collapsible-set">
      <div data-role="collapsible">
        <h3>Sandwich</h3>
        <p>
        <div data-role="fieldcontain">
          <fieldset data-role="controlgroup" data-type="horizontal">
            <legend>Seleccione Carne            </legend>
            <table width="406" border="0">
              <tbody>
    <tr>
      <th width="131" scope="col"><input type="radio" name="tipocarne" id="tipocarne_0" value="" />
            <label for="tipocarne_0">Lomito</label>
</th>
      <th width="147" scope="col">            <input type="radio" name="tipocarne" id="tipocarne_1" value="" />
            <label for="tipocarne_1">Churrasco</label></th>
      <th width="114" scope="col">            <input type="radio" name="tipocarne" id="tipocarne_2" value="" />
            <label for="tipocarne_2">Ave</label></th>
    </tr>
  </tbody>
</table>


            </legend>
          </fieldset>
        </div>
        <p>&nbsp;
          <label for="selectmenu2" class="select">Tipo de Sandwich:</label>
          <select name="selectmenu2" id="selectmenu2">
            <option value="option1">Opción 1</option>
            <option value="option2">Opción 2</option>
            <option value="option3">Opción 3</option>
          </select>
        <p>        
        <div data-role="fieldcontain">
          <p>Cantidad
            <label for="textinput">:</label>
          <input type="text" name="textinput" id="textinput" value="" width="20" />
          </p>
          <p>
            <label for="textinput2">Comentarios:</label>
            <input type="text" name="textinput2" id="textinput2" value=""  />
          
          </p>
          &nbsp;
          <input type="submit" id="Submit" name="btn1" value="Agregar" />
          <p>&nbsp;</p>
        </div>
      </div>
      <div data-role="collapsible" data-collapsed="true">
        <h3>Chorrillanas</h3>
        <p>
          <label for="selectmenu3" class="select">Tipo de Chorrillana:</label>
          <select name="selectmenu3" id="selectmenu3">
            <option value="option1">Opción 1</option>
            <option value="option2">Opción 2</option>
            <option value="option3">Opción 3</option>
          </select>
        </p>
        </p>
        Agregados:
        <p>
          <label>
            <input type="radio" name="agregadochorrillanas" value="opción" id="agregadochorrillanas_0">
            Opción</label>
           <br>
          <label>
            <input type="radio" name="agregadochorrillanas" value="opción" id="agregadochorrillanas_1">
            Opción</label>
        </p>
        <p>&nbsp;</p>
        <p>&nbsp;
          <input type="submit" id="Submit" name="btn" value="Enviar" />
        </p>
      </div>
      <div data-role="collapsible" data-collapsed="true">
        <h3>Extras</h3>
        <p>Contenido</p>
      </div>
    </div>
</p>
  <div data-role="collapsible-set">
    <div data-role="collapsible">
      <h3>Ensaladas</h3>
      <p>Contenido</p>
    </div>
    <div data-role="collapsible" data-collapsed="true">
      <h3>Bebidas y Licores</h3>
      <p>Contenido</p>
    </div>
    <div data-role="collapsible" data-collapsed="true">
      <h3>Vinos</h3>
      <p>Contenido</p>
    </div>
  </div>
  </div>
</div>
<p>&nbsp;</p>
</body>
</html>