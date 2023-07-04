<?php
namespace teisetv\Test1;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat as C;
use pocketmine\plugin\PluginBase;

class main extends PluginBase{

    public function onEnable(): void{
        $this->getLogger()->info("Das Discord Plugin wurde erforlgreich aktiviert!");
        $this->getLogger()->emergency(C::RED . "Das Plugin ist noch in der TestPhase!");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        switch($command->getName()){

            case "dc":
                if($sender instanceof Player){
                    $sender->sendMessage("§aDiscord: §ehttps://discord.gg/NDTRvkYXQ5%22");
                }else{
                    $sender->sendMessage("§cBitte benutze es als ein Spieler!");
                }
                break;
        }
    return true;    
    }

    public function onDisable(): void{
        $this->getLogger()->warning("Der Discord-Link wird nicht mehr angezeigt.");
    }
}