<?php
namespace OPjoin
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\command\Command;
use pocketmine\command\ComandSender;
class OPjoin extends PluginBase implements Listener(
public function onLoad(){
   $this->getLogger()->info("OPjoin.1.0.0 is being loaded")
     $this->getServer()->broadcastMessage(TextFormat::AQUA "$name has joined the craziness");
}
public function on Command (CommandSender $sender,Command $cmd, $label, array $args){
if($cmd->getName("test"){
  $sender->getInventory()->addItem(Item:get(276,0,5);
  $sender->sendMessage(TextFormat::AQUA "YOU HAVE RECIEVED 5 DIAMOND SWORDS");
  }
  

