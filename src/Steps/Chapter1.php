<!DOCTYPE html>
<html lang="en">
	
	<?php
		$rep;
		$StartPoint;
		$dialog=["based"=>["J'ai fait une grosse soirée hier... C'est le blackout total, je ne me rappel plus de rien!
Qu'est ce que j'ai mal à la tête...", "Le téléphone vibre"],
		"bad"=>[], 
		"good"=>[],
		"med"=>[]
		];
		$branch="base";
		$step=0;
		$len=sizeof(dialog["base"]);
	
	echo "<head><title>Game</title></head>";
	echo "<body>";
	
	if(branch=="base"){
			echo dialog[base[step]]
	}
	else if (branch=="bad"){
			
	}
	else if (branch=="good"){
		
	}
	else if (branch=="med"){
		
	}
	else {
		echo "Ayo wtf ?";
	}
	?>
	
	<form method=post>
	</body>
	
</html>