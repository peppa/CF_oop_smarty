<?php /* Smarty version Smarty-3.1.18, created on 2014-05-02 11:44:49
         compiled from ".\templates\Input.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22156536364d181e122-93888105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89ecec738e682993ad96edb8088c1159ed5e90eb' => 
    array (
      0 => '.\\templates\\Input.tpl',
      1 => 1399023884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22156536364d181e122-93888105',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536364d19c0107_04814554',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536364d19c0107_04814554')) {function content_536364d19c0107_04814554($_smarty_tpl) {?><html>

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

</html><?php }} ?>
