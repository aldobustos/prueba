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
            <option value="option0">Seleccionar</option>
            <option value="option1">Sandwich Solo</option>
            <option value="option2">Sandwich Luco</option>
            <option value="option3">Sandwich Palta</option>
            <option value="option4">Sandwich Tomate</option>
            <option value="option5">Sandwich Italiano</option>
            <option value="option6">Sandwich Chacarero</option>
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
          <input name="btn1" type="submit" id="Submit" formmethod="POST" value="Agregar" />
          <p>&nbsp;</p>
        </div>
      </div>
      <div data-role="collapsible" data-collapsed="true">
        <h3>Chorrillanas</h3>
        <p>
          <label for="selectmenu3" class="select">Tipo de Chorrillana:</label>
          <select name="selectmenu3" id="selectmenu3">
<option value="option0">Seleccionar</option>
<option value="option1">Tradicional</option>
<option value="option2">A lo Pobre</option>
<option value="option3">Especial Ave</option>
<option value="option4">Especial</option>
<option value="option5">Extra Barty (Pulpa)</option>
<option value="option6">Extra Barty (Vacuno)</option>
<option value="option7">Grandiosa Ave</option>
<option value="option8">Grandiosa Ave Pulpa</option>
          </select>
        </p>
        </p>
Agregados:
        <p>&nbsp;        
        
        <div data-role="fieldcontain">
          <fieldset data-role="controlgroup">
            <legend></legend>
            <input type="radio" name="chorrillanaadd" id="chorrillanaadd_0" value="" />
            <label for="chorrillanaadd_0">Queso</label>
            <input type="radio" name="chorrillanaadd" id="chorrillanaadd_1" value="" />
            <label for="chorrillanaadd_1">Jamón</label>
            <input type="radio" name="chorrillanaadd" id="chorrillanaadd_2" value="" />
            <label for="chorrillanaadd_2">Palmitos</label>
            <input type="radio" name="chorrillanaadd" id="chorrillanaadd_3" value="" />
            <label for="chorrillanaadd_3">Champiñones</label>
            <input type="radio" name="chorrillanaadd" id="chorrillanaadd_4" value="" />
            <label for="chorrillanaadd_4">Huevo</label>
            <input type="radio" name="chorrillanaadd" id="chorrillanaadd_5" value="" />
            <label for="chorrillanaadd_5">Pimentón</label>
          </fieldset>
        </div>
        </p>
        <p>&nbsp;
          <input type="submit" id="Submit" name="btn" value="Agregar" />
        </p>
      </div>
      <div data-role="collapsible" data-collapsed="true">
        <h3>Extras</h3>
        <p>
          Carne
            <label for="selectmenu4" class="select">:</label>
          <select name="selectmenu4" id="selectmenu4">
<option value="option0">Seleccionar</option>
<option value="option1">Pechuga a la Plancha</option>
<option value="option2">Carne al Jugo</option>
<option value="option3">Mechada</option>
<option value="option4">Bistec (Asiento)</option>
<option value="option5">Chuleta a la Plancha</option>
<option value="option6">Lomo</option>
<option value="option7">Costillar</option>
<option value="option8">Plateada</option>
<option value="option9">Reineta a la Plancha</option>
          </select></p>
        <p>Acompañamiento
          <label for="selectmenu9" class="select">:</label>
          <select name="selectmenu9" id="selectmenu9">
<option value="option0">Seleccionar</option>
<option value="option1">Puré</option>
<option value="option2">Arroz</option>
<option value="option3">Papas Fritas</option>
<option value="option4">Ensalada Surtida</option>
<option value="option5">A lo Pobre</option>
          </select>
        
        </p>
<input type="submit" id="Submit" name="btn2" value="Agregar" />
      </div>
    </div>
</p>
  <div data-role="collapsible-set">
    <div data-role="collapsible">
      <h3>Ensaladas</h3>
      <p>
        <label for="selectmenu5" class="select">Tipo de Ensalada:</label>
        <select name="selectmenu5" id="selectmenu5">
<option value="option0">Seleccionar</option>
<option value="option1">Mediana Surtida</option>
<option value="option2">Grande Surtida</option>
<option value="option3">Palmito Palta</option>
<option value="option4">Chilena Grande</option>
<option value="option5">Papas Mayo</option>
<option value="option6">Lechuga Palta</option>
<option value="option7">Porción de Aceitunas</option>
<option value="option8">Porción de Pepinillos</option>
<option value="option9">Porción de Queso</option>
        </select>
      <p>
        <label for="textinput3">Comentarios:</label>
        <input type="text" name="textinput3" id="textinput3" value=""  />
      
      <p><input type="submit" id="Submit" name="btn3" value="Agregar" /></p>
      </p>
</p>
    </div>
    <div data-role="collapsible" data-collapsed="true">
      <h3>Bebidas y Licores</h3>
      <p>
       Bebidas
         <label for="selectmenu6" class="select">:</label>
        <select name="selectmenu6" id="selectmenu6">
          <option value="option0">Seleccionar</option>
          <option value="option1">Bebida Botella</option>
          <option value="option2">Vaso Néctar</option>
          <option value="option3">Té</option>
          <option value="option4">Café</option>
          <option value="option5">Agua con Hierbas</option>
          <option value="option6">Café con Leche</option>
          <option value="option7">Cappuccino</option>
        </select>
      <p>
        <label for="selectmenu7" class="select">Licores:</label>
        <select name="selectmenu7" id="selectmenu7">
          <option value="option0">Seleccionar</option>
          <option value="option1">Combinado Capel 35°</option>
          <option value="option2">Combinado Alto del Carmen</option>
          <option value="option3">Pisco Sour</option>
          <option value="option4">Mango Sour</option>
          <option value="option5">Vaina</option>
          <option value="option6">Piña Coladada</option>
          <option value="option7">Gin con Gin</option>
          <option value="option8">Ron Barceló</option>
          <option value="option9">Ron Pampero</option>
          <option value="option10">Ron Mitjans</option>
          <option value="option11">Corto Gin</option>
          <option value="option12">Corto Vodka</option>
          <option value="option13">Corto Coñac 3 Palos</option>
          <option value="option14">Corto Manzanilla</option>
          <option value="option15">Fernet con Manzanilla</option>
          <option value="option16">Martini</option>
          <option value="option17">Corto Jack Daniel's (E. Negra)</option>
          <option value="option18">Corto Jack Daniel's (Honey)</option>
        </select>
      <p><input type="submit" id="Submit" name="btn4" value="Agregar" />
</p>
    </div>
    <div data-role="collapsible" data-collapsed="true">
      <h3>Cervezas</h3>
      <p>
        <label for="selectmenu8" class="select">Variedad:</label>
        <select name="selectmenu8" id="selectmenu8">
          <option value="option0">Seleccionar</option>
          <option value="option1">Pitcher Cristal</option>
          <option value="option2">Pitcher Heineken</option>
          <option value="option3">Pitcher Kunstmann</option>
          <option value="option4">MEGA PITCHER CRISTAL</option>
          <option value="option5">Shop Cristal</option>
          <option value="option6">Shop Heineken</option>
          <option value="option7">Shop Kunstmann</option>
          <option value="option8">Cristal</option>
          <option value="option9">Escudo</option>
          <option value="option10">Malta</option>
          <option value="option11">Lemon Stones</option>
          <option value="option12">Cristal Cero Alcohol</option>
          <option value="option13">Coors</option>
          <option value="option14">Heineken</option>
          <option value="option15">Corona</option>
          <option value="option16">Sol</option>
          <option value="option17">Stella Artois</option>
          <option value="option18">Royal</option>
          <option value="option19">Austral</option>
          <option value="option20">Kunstmann</option>
          <option value="option21">Erdinger (Alemana)</option>
        </select>
      
      <p><input type="submit" id="Submit" name="btn5" value="Agregar" /></p>
      </p>
    </div>
  </div>
  </div>
</div>
<p>&nbsp;</p>
</body>
</html>