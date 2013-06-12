<?php
session_start();
if($_SESSION['logged'])
{
    $title="Lista Zakupów";
    $leftContent='<form action="../controler/controlerZapisz.php" method="post">
		<fieldset> 
			<p> 
				<label for="produkt">Produkt</label> 
				<input type="text" id="produkt" name="produkt" value="" maxlength="20" /> 
			</p> 
			<p> 
				<label for="sklep">Skleo</label> 
				<select name="sklep">
					<option value="Biedronka">Biedronka</option>
					<option value="Żabka" selected>Żabka</option>
					<option value="Tesco">Tesco</option>
					<option value="Makro">Makro</option>
					<option value="Carrefoury">Carrefoury</option>
					
					<option value="Inny">Inny</option>
				</select>
			</p> 
			<p> 
				<label for="ilosc">Ilosc</label> 
				<input type="number" id="ilosc" name="ilosc" value="" maxlength="20" /> 
			</p>
			<p> 
				<label for="notatki">Notatki</label> 
				<textarea id="notatki" name="notatki" value=""  ></textarea> 
			</p> 
			<p> 
				<input type="submit" value="Zapisz" /> 
			</p> 
		</fieldset> 
	</form> ';
        require '../view/RigthMenuContent.php';
	require '../view/messageTemplate.php';
}
else
{
    require '../view/viewLoginUser.php';
}


?>