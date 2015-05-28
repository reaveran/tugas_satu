<?php
include "player.php";

$players = array();

echo "# =================================== #\n";
echo "# Welcome to the Battle Arena         #\n";
echo "# =================================== #\n";
echo "# Description:                        #\n";
echo "# 1. type 'new' to create a character #\n";
echo "# 2. type 'start' to begin the fight  #\n";
echo "# 3. type 'exit' to exit the game     #\n";
echo "# =================================== #\n";
echo "# Current Player:                     #\n";
echo "# -                                   #\n";
echo "#* Max player 2 or 3                  #\n";
echo "# =================================== #\n";

$menu = readline();
$status = "alive";
$temp=100;
while ($menu!="exit" and $status!="dead") {
	switch ($menu) {
		case "new":
			if (count($players)<3) {
				echo "Insert name : ";
				$name = readline();
				$players[$name] = new Player($name);
			} else {
				echo "already reach max player\n";
			}
			
			break;
		case "start":
			if (count($players)<2) {
				echo "please make at least 2 character\n";
			} else {
				echo "# =================================== #\n";
				echo "# Welcome to The Battle Arena         #\n";
				echo "# =================================== #\n";
				echo "Battle Start: \n";
				echo "who will attack : \n";
				$p1 = readline();
				while (!array_key_exists($p1, $players)) {
					echo "player name doesn't exist, please insert again \n";
					$p1=readline();
				}
				echo "who will be attacked : \n";
				$p2 = readline();
				while (!array_key_exists($p2, $players)) {
					echo "player name doesn't exist, please insert again \n";
					$p2=readline();
				}
				$attack = $players[$p1];
				$temp = ($players[$p2]->get_blood())-20;
				
				$players[$p2]->set_blood($temp);
				$defend = $players[$p2];
				echo $attack->get_name()." : blood = ".$attack->get_blood()." , manna = ".$attack->get_manna()."\n";
				echo $defend->get_name()." : blood = ".$defend->get_blood()." , manna = ".$defend->get_manna()."\n";
				
			}
			
			break;
	}
	echo "# =================================== #\n";
	echo "# Welcome to the Battle Arena         #\n";
	echo "# =================================== #\n";
	echo "# Description:                        #\n";
	echo "# 1. type 'new' to create a character #\n";
	echo "# 2. type 'start' to begin the fight  #\n";
	echo "# 3. type 'exit' to exit the game     #\n";
	echo "# =================================== #\n";
	echo "# Current Player:                     #\n";
	if(count($players)!=0){
		foreach ($players as $key => $value) {
	    	echo "# - $key\n";
		}
	}else {
		echo "# -                                   #\n";
	}
	
	echo "#* Max player 2 or 3                  #\n";
	echo "# =================================== #\n";
	if($temp<=1){
		$status="dead";
		echo "game over\n";
	}else{
		$menu = readline();
	}
}

?>