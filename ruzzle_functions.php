<?php

function getLetters()
{

	$lettert_html = '<option value="A" selected>A</option>
	<option value="B">B</option>
	<option value="C">C</option>
	<option value="D">D</option>
	<option value="E">E</option>
	<option value="F">F</option>
	<option value="G">G</option>
	<option value="H">H</option>
	<option value="I">I</option>
	<option value="J">J</option>
	<option value="K">K</option>
	<option value="L">L</option>
	<option value="M">M</option>
	<option value="N">N</option>
	<option value="O">O</option>
	<option value="P">P</option>
	<option value="Q">Q</option>
	<option value="R">R</option>
	<option value="S">S</option>
	<option value="T">T</option>
	<option value="U">U</option>
	<option value="V">V</option>
	<option value="W">W</option>
	<option value="X">X</option>
	<option value="Y">Y</option>
	<option value="Z">Z</option>';

	return $lettert_html;
	
}

function getPoints()
{
	
	$points_html = '<option value="1" selected>1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>';

	return $points_html;
}

function getRewards()
{
	
	$rewards_html = '<option value="" selected>none</option>
	<option value="DW">DW</option>
	<option value="TW">TW</option>
	<option value="DL">DL</option>
	<option value="TL">TL</option>';

	return $rewards_html;
	
}
?>