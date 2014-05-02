<html>

<head>
	<title>Codice Fiscale</title>
</head>

<body>
	<br>
	~~~ Inserisci i tuoi dati personali ~~~
	<br>
	<br>

	<form method="post" action="InOut.php">

		<fieldset>
		<legend>Form</legend>

			<fieldset>
			<legend>Dati personali</legend>
			<table cellpadding="6">

				<tr>
					<td align="right">Nome: </td>
					<td> <input type="text" name="nome"/> </td>
				</tr>

				<tr>
					<td align="right">Cognome: </td>
					<td> <input type="text" name="cognome"/> </td>
				</tr>

				<tr>
                <td align="right">Sesso: </td> 
                  <td>
                    <input type="radio" name="sesso" value="male"> M 
                    <input type="radio" name="sesso" value="female"> F 
                  </td>
                </tr>

                <tr>
                	<td align="right">Data di nascita: 
                	
                        <td align="right"> giorno: </td>
                        <td> <input  type="text" name="giorno"  size="5"/> </td>      
                      
                      
                        <td align="right"> mese: </td>
                        <td> <input  type="text" name="mese" size="5" /> </td>
                      

                        <td align="right"> anno: </td>
                        <td> <input  type="text" name="anno" size="5" /> </td>
                    </td>
                </tr>
              
                <tr>
					<td align="right">Comune: </td>
					<td> <input type="text" name="comune"/> </td>
				</tr>

				<tr>
					<td align="right">Provincia: </td>
					<td> <input type="text" name="provincia"/> </td>
				</tr>

			</table>
		    </fieldset>


		<fieldset>
			<legend>Invio dei dati</legend>
			<table cellpadding="6">

		    <tr>
                <td> <input type="submit" value="invia dati" /> </td>
                <td> <input type="reset" value = "reset" /> </td>
            </tr>
        </table>
        </fieldset>


        </fieldset>
    </form>
</body>

</html>