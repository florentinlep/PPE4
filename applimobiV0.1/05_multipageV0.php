<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Application Chauffeur</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" href="jquery/jquery.mobile-1.4.0.min.css" />
		<script src="jquery/jquery-1.11.0.min.js"></script>
		<script src="jquery/jquery.mobile-1.4.0.min.js"></script>
	</head>

	<body>

		<div data-role="page" id="page1">
			<div data-role="header" >
				<h1>Affichage Tourn&eacute;es</h1>
			</div><!-- /header -->
			<div data-role="content">
				<?php
													include 'connectAD.php';
													
													// on crée la requête SQL
													$sql='SELECT `TRNNUM`, `VEHIMMAT`, `CHFID`, `TRNDTE`, `TRNPECCHAUFFEUR`, `TRNARCHAUFFEUR`, `TRNCOMMENTAIRE`
													FROM tournee 
													ORDER BY TRNNUM';  
													
													echo '<table style="margin: auto;">';
													echo '<tr>
													<th>N&#186; de tourn&eacute;e</th>
													<th>V&eacute;hicule</th>
													
													<th>Date tourn&eacute;e</th>
							
													<th></th>
													<th></th>
													<th></th>
													</tr>';
													
													$result= tableSQL($sql);

													foreach ($result as $ligne) {
													echo '<tr><td id="circle" style="text-align: center;">';
														$TRNID = $ligne['0'];
													echo $TRNID;
													echo '</td><td>';
														$Vehimat = $ligne['1'];
													echo "$Vehimat";
													echo '</td>';
													echo '</td>';
														$CHFID = $ligne['2'];
														$sql2='select CHFNOM, CHFPRENOM from chauffeur where CHFID = '.$CHFID;
														$result2=tableSQL($sql2);
														foreach ($result2 as $ligne2) {
														$NOMCHF = $ligne2['0'];
														$PRECHF = $ligne2['1'];
														}
													
													echo '</td><td>';
														$Trndte = $ligne['3'];
													echo "$Trndte";
													echo '</td>';
													echo '</td>';
													echo '</td>';
													echo '</td>';

												
													echo '<td><a href="delete/delete_ac11.php?id='.$TRNID.'"><img src="images/delete-cross.png" /></a></td><td><a href="ac12update.php?TRNNUM='.$TRNID.'"><img src="images/crayon.png" /></a></td><td><a href="#page2"><img src="images/eye-open.png" /></a></td></tr>';
													
													}
													echo '</table>';
												?>
				<a href="#page2"><input type="button" value="Page2"></input></a>
			</div><!-- /content -->
			<div data-role="footer">
				<h4>&copy; 2016 EstranSup </h4>
			</div><!-- /footer -->
		</div><!-- /page 1 -->

		<div data-role="page" id="page2">
			<div data-role="header">
				<h1>Titre - Page 2</h1>
			</div><!-- /header -->
			<div data-role="content">
				<p>Contenu de la seconde page.</p>
				<p><a href="#page1">Retour à la page 1</a></p>
			</div><!-- /content -->
			<div data-role="footer" >
				<h4>&copy; 2016 EstranSup </h4>
			</div><!-- /footer -->
		</div><!-- /page 2 -->

		</body>
</html>
