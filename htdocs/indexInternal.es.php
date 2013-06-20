<?php
if(isset($_GET['dontShow']) && $_GET['dontShow'] === '1'):
	exit;
endif;

require '../KERNEL-DOCMS/Init.php';

$Users->checkSession();
if($Users->DataRow == null):
	header ('Location: ' . SERVER);
endif;

if(isset($_GET['action'])):
	if($_GET['action'] === 'internalCompanyChoose' && $Users->DataRow['factionId'] === '0'):
		if(isset($_GET['subaction'], $_GET['factionID']) && $_GET['subaction'] === 'factionChoose' && $_GET['factionID'] > 0 && $_GET['factionID'] < 4):
			$mapId = 1;
			$MySQLi->query('UPDATE server_1_players SET factionId = ' . $_GET['factionID'] . ', mapId = ' . $mapId . ' WHERE playerID = ' . $Users->DataRow['playerID']);
			echo 'indexInternal.es?action=internalStart';
			exit;
		endif;

		require FILES . 'INDEXINTERNAL/CompanyChoose_Header.php';
		require GLOBALS . 'xajax.php';
		require GLOBALS . 'internalHeader.php';
		require FILES . 'INDEXINTERNAL/CompanyChoose_Body.php';
		echo '</html>';
	elseif($Users->DataRow['factionId'] === '0'):
		header ('Location: ' . SERVER . '/indexInternal.es?action=internalCompanyChoose');
	else:
		if($_GET['action'] === 'internalStart'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalStart.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalStart_Body.php';
		elseif($_GET['action'] === 'internalGalaxyGates'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalGalaxyGates.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalGalaxyGates_Body.php';
		elseif($_GET['action'] === 'internalPayment'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalPayment.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalPayment_Body.php';
		elseif($_GET['action'] === 'internalHallofFame'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalHallofFame.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalHallofFame_Body.php';
		elseif($_GET['action'] === 'internalBalance'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalBalance.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalBalance_Body.php';
		elseif($_GET['action'] === 'internalEvoucher'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalEvoucher.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalEvoucher_Body.php';
		elseif($_GET['action'] === 'internalNewClanDetails'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalNewClanDetails.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalNewClanDetails_Body.php';
		elseif($_GET['action'] === 'internalNewClan'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalNewClan.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalNewClan_Body.php';
		elseif(isset($_GET['tpl']) && $_GET['tpl'] === 'internalClanChangeFirm'):
				require GLOBALS . 'internalDoc.php';
				echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalClan.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
				require GLOBALS . 'internalDocEnd.php';
				require GLOBALS . 'sajax.php';
				require GLOBALS . 'xajax.php';
				require GLOBALS . 'headerEndJS.php';
				require GLOBALS . 'internalMenu.php';
				require GLOBALS . 'internalHeader.php';
				require FILES . 'INDEXINTERNAL/internalClanChangeFirm_Body.php';
		elseif($_GET['action'] === 'internalMessaging'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalMessaging.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalMessaging_Body.php';
		elseif($_GET['action'] === 'internalPilotSheet'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalPilotSheet.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalPilotSheet_Body.php';
		elseif($_GET['action'] === 'internalUserDataChange'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/darkorbit.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalUserDataChange_Body.php';
		elseif($_GET['action'] === 'internalItemUpgradeSystem'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalItemUpgradeSystem.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalItemUpgradeSystem_Body.php';
		elseif($_GET['action'] === 'internalSkylab'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalSkylab.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalSkylab_Body.php';
		elseif($_GET['action'] === 'internalNanoTechFactory'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalNanoTechFactory.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalNanoTechFactory_Body.php';
		elseif($_GET['action'] === 'externalPassword'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/do_password.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/externalPassword_Body.php';
		elseif($_GET['action'] === 'externalLogout'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/logout.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/externalLogout_Body.php';
		elseif($_GET['action'] === 'internalHistory'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalHistory.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalHistory_Body.php';
		elseif($_GET['action'] === 'internalHandel'):
			require GLOBALS . 'internalDoc.php';
			echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalHandel.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
			require GLOBALS . 'internalDocEnd.php';
			require GLOBALS . 'sajax.php';
			require GLOBALS . 'xajax.php';
			require GLOBALS . 'headerEndJS.php';
			require GLOBALS . 'internalMenu.php';
			require GLOBALS . 'internalHeader.php';
			require FILES . 'INDEXINTERNAL/internalHandel_Body.php';
		elseif(isset($_GET['tpl']) && $_GET['tpl'] === 'internalHandelClosed'):
				require GLOBALS . 'internalDoc.php';
				echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalHandel.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
				require GLOBALS . 'internalDocEnd.php';
				require GLOBALS . 'sajax.php';
				require GLOBALS . 'xajax.php';
				require GLOBALS . 'headerEndJS.php';
				require GLOBALS . 'internalMenu.php';
				require GLOBALS . 'internalHeader.php';
				require FILES . 'INDEXINTERNAL/internalHandelClosed_Body.php';
		elseif($_GET['action'] === 'internalDock'):
			if(isset($_GET['tpl']) && $_GET['tpl'] === 'internalDockEquipment'):
				require GLOBALS . 'internalDoc.php';
				echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalDock.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
				require GLOBALS . 'internalDocEnd.php';
				require GLOBALS . 'sajax.php';
				require GLOBALS . 'xajax.php';
				require GLOBALS . 'headerEndJS.php';
				require GLOBALS . 'internalMenu.php';
				require GLOBALS . 'internalHeader.php';
				require FILES . 'INDEXINTERNAL/internalDockEquipment_Body.php';
			elseif(isset($_GET['tpl']) && $_GET['tpl'] === 'internalDockShips'):
				require GLOBALS . 'internalDoc.php';
				echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalDock.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
				require GLOBALS . 'internalDocEnd.php';
				require GLOBALS . 'sajax.php';
				require GLOBALS . 'xajax.php';
				require GLOBALS . 'headerEndJS.php';
				require GLOBALS . 'internalMenu.php';
				require GLOBALS . 'internalHeader.php';
				require FILES . 'INDEXINTERNAL/internalDockShips_Body.php';
			elseif(isset($_GET['tpl']) && $_GET['tpl'] === 'internalDockPetProtocols'):
                require GLOBALS . 'internalDoc.php';
                echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalDock.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
                require GLOBALS . 'internalDocEnd.php';
                require GLOBALS . 'sajax.php';
                require GLOBALS . 'xajax.php';
                require GLOBALS . 'headerEndJS.php';
                require GLOBALS . 'internalMenu.php';
                require GLOBALS . 'internalHeader.php';
                require FILES . 'INDEXINTERNAL/internalDockPetProtocols_Body.php';
			elseif(isset($_GET['tpl']) && $_GET['tpl'] === 'internalDockAmmo'):
                require GLOBALS . 'internalDoc.php';
                echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalDock.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
                require GLOBALS . 'internalDocEnd.php';
                require GLOBALS . 'sajax.php';
                require GLOBALS . 'xajax.php';
                require GLOBALS . 'headerEndJS.php';
                require GLOBALS . 'internalMenu.php';
                require GLOBALS . 'internalHeader.php';
                require FILES . 'INDEXINTERNAL/internalDockAmmo_Body.php';
			elseif(isset($_GET['tpl']) && $_GET['tpl'] === 'internalDockBooster'):
                require GLOBALS . 'internalDoc.php';
                echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalDock.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
                require GLOBALS . 'internalDocEnd.php';
                require GLOBALS . 'sajax.php';
                require GLOBALS . 'xajax.php';
                require GLOBALS . 'headerEndJS.php';
                require GLOBALS . 'internalMenu.php';
                require GLOBALS . 'internalHeader.php';
                require FILES . 'INDEXINTERNAL/internalDockBooster_Body.php';
			elseif(isset($_GET['tpl']) && $_GET['tpl'] === 'internalDockDrones'):
                require GLOBALS . 'internalDoc.php';
                echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalDock.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
                require GLOBALS . 'internalDocEnd.php';
                require GLOBALS . 'sajax.php';
                require GLOBALS . 'xajax.php';
                require GLOBALS . 'headerEndJS.php';
                require GLOBALS . 'internalMenu.php';
                require GLOBALS . 'internalHeader.php';
                require FILES . 'INDEXINTERNAL/internalDockDrones_Body.php';
			elseif(isset($_GET['tpl']) && $_GET['tpl'] === 'internalDockGenerator'):
                require GLOBALS . 'internalDoc.php';
                echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalDock.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
                require GLOBALS . 'internalDocEnd.php';
                require GLOBALS . 'sajax.php';
                require GLOBALS . 'xajax.php';
                require GLOBALS . 'headerEndJS.php';
                require GLOBALS . 'internalMenu.php';
                require GLOBALS . 'internalHeader.php';
                require FILES . 'INDEXINTERNAL/internalDockGenerator_Body.php';
			elseif(isset($_GET['tpl']) && $_GET['tpl'] === 'internalDockLaser'):
                require GLOBALS . 'internalDoc.php';
                echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalDock.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
                require GLOBALS . 'internalDocEnd.php';
                require GLOBALS . 'sajax.php';
                require GLOBALS . 'xajax.php';
                require GLOBALS . 'headerEndJS.php';
                require GLOBALS . 'internalMenu.php';
                require GLOBALS . 'internalHeader.php';
                require FILES . 'INDEXINTERNAL/internalDockLaser_Body.php';
			elseif(isset($_GET['tpl']) && $_GET['tpl'] === 'internalDockShipModel'):
                require GLOBALS . 'internalDoc.php';
                echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalDock.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
                require GLOBALS . 'internalDocEnd.php';
                require GLOBALS . 'sajax.php';
                require GLOBALS . 'xajax.php';
                require GLOBALS . 'headerEndJS.php';
                require GLOBALS . 'internalMenu.php';
                require GLOBALS . 'internalHeader.php';
                require FILES . 'INDEXINTERNAL/internalDockShipModel_Body.php';
			elseif(isset($_GET['tpl']) && $_GET['tpl'] === 'internalDockPetGear'):
                require GLOBALS . 'internalDoc.php';
                echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalDock.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
                require GLOBALS . 'internalDocEnd.php';
                require GLOBALS . 'sajax.php';
                require GLOBALS . 'xajax.php';
                require GLOBALS . 'headerEndJS.php';
                require GLOBALS . 'internalMenu.php';
                require GLOBALS . 'internalHeader.php';
                require FILES . 'INDEXINTERNAL/internalDockPetGear_Body.php';
			elseif(isset($_GET['tpl']) && $_GET['tpl'] === 'internalDockSpecials'):
                require GLOBALS . 'internalDoc.php';
                echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalDock.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
                require GLOBALS . 'internalDocEnd.php';
                require GLOBALS . 'sajax.php';
                require GLOBALS . 'xajax.php';
                require GLOBALS . 'headerEndJS.php';
                require GLOBALS . 'internalMenu.php';
                require GLOBALS . 'internalHeader.php';
                require FILES . 'INDEXINTERNAL/internalDockSpecials_Body.php';
				
		
			
		   
				
			else:
				require GLOBALS . 'internalDoc.php';
				echo '<link rel="stylesheet" media="all" href="http://darkorbit-22.ah.bpcdn.net/css/cdn/internalDock.css?__cv=7100a6c4bd443edce1c0f25238e61c00" />';
				require GLOBALS . 'internalDocEnd.php';
				require GLOBALS . 'sajax.php';
				require GLOBALS . 'xajax.php';
				require GLOBALS . 'headerEndJS.php';
				require GLOBALS . 'internalMenu.php';
				require GLOBALS . 'internalHeader.php';
				require FILES . 'INDEXINTERNAL/internalDock_Body.php';
				
			endif;
		elseif($_GET['action'] === 'internalMapRevolution'):
			require FILES . 'INDEXINTERNAL/internalMapRevolution.php';
		endif;
	endif;
endif;
?>