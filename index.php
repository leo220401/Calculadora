   <html>
<head>
   <title>Calculadora</title>
<style type="text/css">
    
</style>
<style type="text/css">
   .batata{
		padding: 5px;
	}
	table{
		border-right: 4px solid darkblue;
		border-bottom: 4px solid darkblue;
		background-color: green;
		padding: 1px;
	}
	input{
		border: 4px solid darkblue;
		background-color: yellow;
		color: black;
		font-family: calculator;
		font-weight: bold;
		cursor: pointer;
		transition: ease-out;
		transition-duration: 0.5s;
		font-size: 12px;
	}
	.batata input:hover{
		color: gold;
		background-color: black;
	}
	.result{
		padding: 4px;
		cursor: default !important;
	}
	.c input:hover{
		color: white;
		background-color: red;
	}
</style>
</head>

<body>
<center>
   <form name="calc">
      <table>
      	<tr>
      		<td align="center">
      			<input type="text" class="result"  name="input" size="32w" readonly="readonly" placeholder="Brasil acima de tudo, Deus acima de todos">
      		</td>
      	</tr>
      	<tr>
      		<td align="center">
      			<div class="batata">
      				<input type="button" name="um" value="  1  " onclick="calc.input.value += '1'">
      				<input type="button" name="dois" value="  2  " onclick="calc.input.value += '2'">
      				<input type="button" name="tres" value="  3  " onclick="calc.input.value += '3'">
      				<input type="button" name="quatro" value="  4  " onclick="calc.input.value += '4'">
      				<input type="button" name="cinco" value="  5  " onclick="calc.input.value += '5'">
      				
      			</div>
      			
      			<div class="batata">
      				<input type="button" name="seis" value="  6  " onclick="calc.input.value += '6'">
      				<input type="button" name="sete" value="  7  " onclick="calc.input.value += '7'">
      				<input type="button" name="oito" value="  8  " onclick="calc.input.value += '8'">
      				<input type="button" name="nove" value="  9  " onclick="calc.input.value += '9'">
      				<input type="button" name="zero" value="  0  " onclick="calc.input.value += '0'">
      				
      			</div>
      			
      			<div class="batata">
      				<input type="button" name="mais" value="  +  " onclick="calc.input.value += ' + '">
      				<input type="button" name="menos" value="  -   " onclick="calc.input.value += ' - '">
      				<input type="button" name="multi" value="  x  " onclick="calc.input.value += ' * '">
      				<input type="button" name="div" value="  /   " onclick="calc.input.value += ' / '">
      			</div>
      
      			
      			<div class="c">
      				<input type="button" name="clear" value="  C  " onclick="calc.input.value = ''">
      				
      				<input type="button" name="resul" value="  =  " onclick="calc.input.value = eval(calc.input.value)">
      				
      			</div>
      			
      			
      
      		</td>
      	</tr>
      </table>
   </form>
</center>
</body>
</html>
