<?php
/**
 * Config DB and Chat parameters
 *
 * LICENSE: CREATIVE COMMONS PUBLIC LICENSE  "Namensnennung � Nicht-kommerziell 2.0"
 *
 * @copyright  2017 <SEDesign />
 * @license    http://creativecommons.org/licenses/by-nc/2.0/de/
 * @version    $3.0.7$
 * @link       http://www.sedesign.de/de_produkte_chat-v3.html
 * @since      File available since Beta 1.0
 */
  
  
$database = "etchat";		//Datenbankname
$sqlhost = "localhost";    	//Datenbank Hostname
$sqluser = "root";         	//Datenbank Username
$sqlpass = "";    			//Datenbank Passwort
	
$prefix = "db1_";			//Prefix bei den Tabellennamen und allen Sessionvariablen
	
// Parameter wird IMMER ben�tigt um die richtige SQL-Syntaxis zu erzeugen und auch bei der Anbindung �ber PDO umd die richtige DB auszuw�hlen
$usedDatabaseType = "mysql";	// "mysql" oder "pgsql"

// ############################################################################
/*
 Welche Datenbankanbindung soll benutzt werden?
 Wenn Sie sich mit der Serverkonfiguration nicht besonders gut auskennen, sollen Sie diese Einstellungen nicht ver�ndern!
*/

// PDO ist die einheitliche Datenbankanbindungskomponennte in PHP5 f�r alle Datenbanken, also MySQL und PostgreSQL 

$usedDatabaseExtension = "pdo";

// Nach Wunsch oder wenn die PDO nicht verf�gbar ist, kann die MySQLi f�r die Anbindung an MySQL benutzt werden. 
// Es soll angeblich auch etwas performanter sein.

//$usedDatabaseExtension = "mysqli";

// ############################################################################
// Chatparameter optional zu ver�ndern

// Wieviele alte Messages sieht der User, wenn er den Chat erstmalig betritt.
$messages_shown_on_entrance = 1;

// Wieviele Male darf man sich in drei Muten in den Chat neu einloggen.
$limit_logins_in_three_minutes = 5;

// Privatmessages im Chatfenster erlauben.
$allowed_privates_in_chat_win = true;

// Separate Privatchatfenster erlauben.
$allowed_privates_in_separate_win = true;

// Bei False wird die History / Chatverlauf nur f�r Admin und Mod sichtbar
$show_history_all_user = true;

// Wie lange darf der User nichts schreiben bis er aus dem Chat rausfliegt 
// Zeitangabe im Millisekunden: 1 Sekunde = 1000 Millisekunden
$interval_for_inactivity=1800000;

// Starteinstellung beim Messages-Sound [ none | privat | all ]
// none: keine Sounds
// privat: Sounds nur f�r eingehende private Nachrichten
// all: Sounds f�r alle Nachrichten im Chat
$messages_sound = "all";


// Sollen die allgemeinen Systemnachrichten beim Start angezeigt werden?
$show_sys_messages = true;


// Niknameregistrierung erlauben
$allow_nick_registration = true;
// WICHTIG!!! Wenn die Anbindung des Chats an eine Fremduserverwaltung �ber die Zusatztool_Anbindung_an_Fremduserverwaltung.php
// umgesetzt wird, darf kein Chatbenutzer ein eigenes Passwort festlegen k�nnen. Deshalb sollte bei der Verwendung von 
// Zusatztool_Anbindung_an_Fremduserverwaltung.php die $allow_nick_registration = false; geschaltet sein!

// ############################################################################