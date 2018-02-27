<?php

namespace HTTPS7Team\HumanDefiner;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\entity\block\BlockPlaceEvent;
use pocketmine\entity\block\BlockUpdateEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\block\BlockEvent;
use pocketmine\block\Block;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\command as c;
use pocketmine\plugin\PluginBase as PB;
use pocketmine\event\entity\EntityBlockChangeEvent;
use pocketmine\Achievment;
use pocketmine\entity\Effect;
use pocketmine\entity\Human;
use pocketmine\entity\Living;
use pocketmine\utils\Config;

class Main extends PluginBase implements listener {

private $config;

    public function onEnable() {
        $this->getLogger()->info(TextFormat::GREEN . "Created by Cat -Discord- ");
        @mkdir($this->getDataFolder());
        $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, array(###This is the damage that is done for this group, "DamageA" => 5, "DamageB" => 10, "DamageC" => 15, ###This is the food, "foodA" => 20, "foodB" => 40, "foodC" => 60, "HealthA" => 40, "HealthB" => 60));
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        
    }
    
    
