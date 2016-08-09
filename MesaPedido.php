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
        <p>Contenido</p>
      </div>
      <div data-role="collapsible" data-collapsed="true">
        <h3>Chorrillanas y Picadillo</h3>
        <p>Contenido</p>
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