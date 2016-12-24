<?php

namespace takesi;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\scheduler\PluginTask;
use pocketmine\scheduler\CallbackTask;
use pocketmine\scheduler\Task;
use pocketmine\Server;
use pocketmine\command\CommandExecuter;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\Player;
use pocketmine\item\Item;

class Main extends PluginBase implements Listener
{
	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch (strtolower($command->getName())) {
            case 'elgv':
                $item = Item::get(444, 0, 1);
                if ($sender->getInventory()->contains($item)) {
                } else {
                    $sender->getInventory()->setArmorItem(1, Item::get(444, 0, 1));
                }
                return true;
                break;
        }
    }
}
