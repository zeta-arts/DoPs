<?php
class Users
{
	public $DataRow = null;
	public function checkSession()
	{
		global $MySQLi;
		if(isset($_SESSION['server1']['user']['sessionId'], $_SESSION['server1']['user']['email']) && is_numeric($_SESSION['server1']['user']['sessionId'])):
			$userRow = $MySQLi->query('SELECT users.ID, users.Email, users.Name, server_1_players.playerID, server_1_players.shipId, server_1_players.factionId, server_1_players.credits, server_1_players.uri, server_1_players.level, server_1_players.exp, server_1_players.honor FROM users, server_1_players WHERE users.sessionId = \'' . $_SESSION['server1']['user']['sessionId'] . '\' AND users.Email = \'' . $_SESSION['server1']['user']['email'] . '\' AND server_1_players.userID = users.ID');
			if($userRow && $userRow->num_rows === 1):
				$this->DataRow = $userRow->fetch_assoc();
			endif;
		endif;
	}
}
?>