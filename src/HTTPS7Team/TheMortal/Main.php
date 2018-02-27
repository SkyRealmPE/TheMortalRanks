<?php

namespace HTTPS7Team\HumanDefiner;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\entity\block\BlockPlaceEvent;
use pocketmine\entity\block\BlockUpdateEvent;
use pocketmine\event\block\BlockEvent;
use pocketmine\block\Block;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\command as c;
use pocketmine\plugin\PluginBase as PB;
use pocketmine\event\entity\EntityBlockChangeEvent;
use pocketmine\entity\Human;
use pocketmine\entity\Living;
use pocketmine\utils\Config;
use pocketmine\block\Fire;

class Main extends PluginBase implements listener {

private $config;

    public function onEnable() {
        $this->getLogger()->info(TextFormat::BLACK . "Created by Cat -Discord- ");
        @mkdir($this->getDataFolder());
        $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, array("DamageA" => 5, "DamageB" => 10, "DamageC" => 15, "FoodA" => 20, "FoodB" => 40, "FoodC" => 60, "HealthA" => 40, "HealthB" => 60, "HealthC" => 80));
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        
    }
            
            public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if ($sender->hasPermission("vip.update")) {
            if (strtolower($command->getName()) == "vipupdate") {
                $sender->sendMessage(TextFormat::GREEN . "updated!");
                if ($sender instanceof Player) {
                    $sender->setDamage($this->config->get("DamageA"));
                    $sender->setHealth($this->config->get("HealthA"));
                    $sender->setFood($this->config->get("FoodA"));
                    $sender->getLevel()->setBlock($sender->floor(), Block::get(Block::FIRE));
                    return true;
                } else {
                    $sender->sendMessage(TextFormat::RED . "Incorrect usage or privlages!");
                    return false;
                }
            }
            
            if ($sender->hasPermission("viplus.update")) {
            if (strtolower($command->getName()) == "viplusupdate") {
                $sender->sendMessage(TextFormat::YELLOW . "updated!");
                if ($sender instanceof Player) {
                    $sender->setDamage($this->config->get("DamageB"));
                    $sender->setHealth($this->config->get("HealthB"));
                    $sender->setFood($this->config->get("FoodB"));
                    $sender->getLevel()->setBlock($sender->floor(), Block::get(Block::FIRE));
                    return true;
                } else {
                    $sender->sendMessage(TextFormat::RED . "Incorrect usage or privlages!");
                    return false;
                    
                }
                
            }
                
                if ($sender->hasPermission("mvp.update")) {
            if (strtolower($command->getName()) == "mvpupdate") {
                $sender->sendMessage(TextFormat::BLUE . "updated!");
                if ($sender instanceof Player) {
                    $sender->setDamage($this->config->get("DamageC"));
                    $sender->setHealth($this->config->get("HealthC"));
                    $sender->setFood($this->config->get("FoodC"));
                    $sender->getLevel()->setBlock($sender->floor(), Block::get(Block::FIRE));
                    return true;
                } else {
                    $sender->sendMessage(TextFormat::RED . "Incorrect usage or privlages!");
                    return false;
                    
                }
                
            }
                    
                    if ($sender->hasPermission("group.reset")) {
            if (strtolower($command->getName()) == "reset") {
                $sender->sendMessage(TextFormat::PINK . "updated!");
                if ($sender instanceof Player) {
                    $sender->setDamage(0.3);
                    $sender->setHealth(20);
                    $sender->setFood(20);
                    $sender->getLevel()->setBlock($sender->floor(), Block::get(Block::WATER));
                    return true;
                } else {
                    $sender->sendMessage(TextFormat::RED . "Incorrect usage or privlages!");
                    return false;
                    
                }
                
            }
                        
                    }
                    
                }
                
            }
            
        }
                
            }
    
}
