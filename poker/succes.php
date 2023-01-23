<?php
		include("data.php");
		$carte[0]=rand(0,51);
		for($i=1;$i<11;$i++)
		{
			$carte[$i]=rand(0,51);
			while($carte[$i]==$carte[$i-1])
			{
				$carte[$i]=rand(0,51);
			}
			if($carte[$i]!=$carte[$i-1])
			{
				$carte[$i]=$carte[$i];
			}
		}
    	for($i=0; $i<5; $i++)
		{
           $Carte_joueur[$i]=$carte[$i];
        }
        for($i=5; $i<10; $i++)
		{
           $Carte_Bot[$i]=$carte[$i];
        }	
	
	if($Carte_joueur[$i]== $carte[9] and $carte[10] and $carte[11] and $carte[12] and $carte[0])//royal
	{
		
		$rep=10;
	}
	if($Carte_joueur[$i]==$carte[33] and $carte[34] and $carte[35] and $carte[36] and $carte[37])//quinteflush
	{
		$rep=9;
	}
	if($Carte_joueur[$i]==$carte[28] and $carte[15] and $carte[2] and $carte[41])//carrer
	{
		$rep=8;
	}
	if($Carte_joueur[$i]==$carte[32] and $carte[19] and $carte[6])//brelan
	{
		$rep=4;
	}
	if($Carte_joueur[$i]==$carte[28] and $carte[41] and $carte[13] and $carte[0])//deuxpaire
	{
		$rep=3;
	}
	$rep=0;
		if($Carte_joueur[$i]==$carte[28]  and $carte[15] and $carte[2] and $carte[19] and $carte[32])//full
		{
			$rep=7;
		}
		if($Carte_joueur[$i]==$carte[40]  and $carte[48] and $carte[49] and $carte[50] and $carte[44])//flush
		{
			$rep=6;
		}
		if($Carte_joueur[$i]==$carte[9]  and $carte[49] and $carte[11] and $carte[38] and $carte[13])//straigth
		{
			$rep=5;
		}
	
	
	
	
		$rep2=0;
	    if($Carte_Bot[$i]==$carte[28]  and $carte[15] and $carte[2] and $carte[19] and $carte[32])
		{
			$rep2=7;
		}
		if($Carte_Bot[$i]==$carte[40]  and $carte[48] and $carte[49] and $carte[50] and $carte[44])
		{
			$rep2=6;
		}
		if($Carte_Bot[$i]==$carte[9]  and $carte[49] and $carte[11] and $carte[38] and $carte[13])
		{
			$rep2=5;
		}

		
?>
<html>
    <head>
        <title>jeux poker </title>
        <meta charset="UTF-8"> 
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>Voici les cartes</h1>
		<table border=2 width="100">
		
		<tr width="100">
		    <td rowspan="1">BOT</td>
			<?php for($i=5; $i<10; $i++) { ?>
			<td><?php echo $Carte_Bot[$i]; ?></td>
			<?php } ?>
		</tr>
		<tr width="100">
		    <td rowspan="1">player</td>
			<?php for($i=0; $i<5; $i++) { ?>
			<td><?php echo $Carte_joueur[$i]; ?></td>
			<?php } ?>
		</tr>
		</table>
		<p>combinaison du BOT: </p>
		<p>combinaison du player: </p>
		<p><strong>le gagnant:</strong></p>
	</body>
</html>	
		
		