<?php
  	$key_api = $_POST['Key_API'];
		$date=date('Y-m-d h:i:s');
	function INSERT (){
		global $key_api;
		global $date;
		
	$game_id = $_POST['Game_ID'];
		if ($game_id == ''){
			echo 'Erro Game_ID';
		} else {
			$sql_insert = "INSERT INTO log (game_id, date, key_api) 
							VALUES ('".$game_id."', '".$date."', '".$_POST['Key_API']."')" or die (mysql_error());
				if($sql_insert){
					echo $game_id;
				}else{
					echo 'erro';
					}
					
		mysql_query($sql_insert) or die (mysql_error());
			if ($sql_insert){
				return TRUE;
			} else {
				return FALSE;
			}
		}
	};
?>
