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
    public function onEnable(){
        if(!file_exists($this->getDataFolder())){
           mkdir($this->getDataFolder(), 0744, true);
}
        $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, array(
         'have' => 'Elytraを着用しました。',
          'alreadyhave' => '既にエリトラを持っています。',
          'dontuseconsole' => 'コンソールからは使用できません。'));
}

	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch (strtolower($command->getName())) {
            case 'elgv':
                $sender->getInventory()->setArmorItem(1, Item::get(444, 0, 1));
                $send = $this->config->get("have");
                $sender->sendMessage($send);
                return true;
                break;
}
}
}
