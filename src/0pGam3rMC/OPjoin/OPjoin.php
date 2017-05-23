<?php
namespace 0pGam3rMC\OPjoin;
use pocketmine\event\player\PlayerJoinEvent;
pocketmine\event\player\PlayQuitEvent;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
class OPjoin extends PluginBase implements Listener{
} 
{getServer()->getPluginManager()->registerEvents($this,$this);
public function onLoad()
}
 {
$this->getLogger()->info("OPjoin id being loaded");
}
public function onEnable () {$this->getLogger()->info("OPjoin is ready to mangle!");
}
public function onDisable() { 
$this->getLogger( )->info("OPjoin is leaving :'(");
} }
public function onJoin(PlayerJoinEvent $event) {
$player = $event->getPlayer();
$name = $player->getName();
$this->getServer()->broadcastMessage(TextFormat::AQUA. "$name Has Joined the Craziness!");
public function onCommand(CommandSender $sender,Command $cmd,$label,array $args) { }
if($cmd->getName()== "test") {
if(!$sender instanceof Player) {
$sender->sendMessage ("Sorry this command is only for humans online xD!");
}else{
$sender->sendMessage("This command was made by 0pGam3rMC");}
return true; } }
if($cmd->getName()== "test")
if(! isset ( $args[0] ) ) { // If Player Name was NOT Entered!
$sender->sendMessage("Use /test"; }else{
$player = $this->getServer( ) ->getPlayer[0]);
if($player instanceof Player) { //Checks if Player is ONLINE $sender->sendMessage(" ". $sender->getName()." hello!");
}else{ //If Player is NOT Online $sender->sendMessage("Player was not found..sorry!"); // Command Sender gets Message That the entered player is not Online!
$sender->getInventory()->addItem(Item: : get(276,0,1) ) ;
$sender->sendMessage(TextFormat:: BOLD. "Here's a free diamond sword for using 0pGam3rMC's plugin ^_^!");}
return true;
 ?>





