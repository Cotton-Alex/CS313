<!DOCTYPE html>
<html>
    <head>
        <title>cs313</title>
		<?php include "mod/head.php"; ?>
    </head>
    <body onload="checkLocalStorage()">
		<header id="page_header">
			<?php include "mod/header.php"; ?>
        </header>
		<div class="container">
		<div id="clickMeButton">
			<button onclick="clickAlert()">Click Me!!!</button> 
		</div>
		<br>
		<br>
		<table id="localStorage">
            <tr>
				<th></th>
				<th colspan="4">Color</th>
            </tr>
            <tr>
                <td>Background:</td>
                <td><div id="bgBlue" class="swatch" onclick="backgroundColor('lightblue')">Blue</div></td>
                <td><div id="bgGrey" class="swatch" onclick="backgroundColor('lightgrey')">Grey</div></td>
                <td><div id="bgOrange" class="swatch" onclick="backgroundColor('seashell')">Bleh</div></td>
                <td><button onclick="clearBackgroundColor('backgroundColor')">reset</button></td>
            </tr>
        </table>
		<br>
		<div class="colorSelector">
			<fieldset>
				<label for="Red">R</label>
				<input type="range" min="0" max="255" id="Red" step="1" value="255" onInput="colorChange()">
				<output for="Red" id="Red_out">255</output>
			</fieldset>
			<fieldset>
				<label for="Green">G</label>
				<input type="range" min="0" max="255" id="Green" step="1" value="255" onInput="colorChange()">
				<output for="Green" id="Green_out">255</output>
			</fieldset> 
			<fieldset>
				<label for="Blue">B</label>
				<input type="range" min="0" max="255" id="Blue" step="1" value="255" onInput="colorChange()">
				<output for="Blue" id="Blue_out">255</output>
			</fieldset>
			<br>
			<span><button class="colorSave" id="saveColor" type="submit" onClick="setColor()">Save</button></span>
			<button class="colorClear" id="resetColor" type="submit" onClick="resetColor()">Reset</button>
		</div>
		</div>
    </body>
</html>
