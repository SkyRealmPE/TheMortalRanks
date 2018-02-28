<?php

namespace HTTPS7Team\TheMortalRanks;

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
use pocketmine\level\particle;
use pocketmine\level\particle\HugeExplodeParticle;
use pocketmine\level\particle\FlameParticle;
use pocketmine\level\particle\RedstoneParticle;
use pocketmine\level\particle\HeartParticle;
use pocketmine\level\particle\WaterDripParticle;
use pocketmine\level\particle\SmokeParticle;
use pocketmine\level\particle\EnchantParticle;
use pocketmine\level\particle\BubbleParticle;
use pocketmine\level\particle\CriticalParticle;

class Main extends PluginBase implements listener {

private $config;

    public function onEnable() {
        $this->getLogger()->info(TextFormat::BLACK . "Created by Cat -Discord- ");
        @mkdir($this->getDataFolder());
        $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, array("DamageA" => 5, "DamageB" => 10, "DamageC" => 15, "FoodA" => 20, "FoodB" => 40, "FoodC" => 60, "HealthA" => 40, "HealthB" => 60, "HealthC" => 80, "ItemA" => "FIREWORK", "ItemB" => "FIREWORK", "ItemC" => "FIREWORK"));
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        
    }
            
            public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if ($sender->hasPermission("vip.update")) {
            if (strtolower($command->getName()) == "vipupdate") {
                $sender->sendMessage(TextFormat::GREEN . "updated!");
                if ($sender instanceof Player) {
                    $sender->setDamage($this->config->get("DamageA"));
                    $sender->setMaxHealth($this->config->get("HealthA"));
                    $sender->setFood($this->config->get("FoodA"));
                    $sender->setItemInHand($this->config->get("ItemA"));
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
                    $sender->setMaxHealth($this->config->get("HealthB"));
                    $sender->setFood($this->config->get("FoodB"));
                    $sender->setItemInHand($this->config->get("ItemB"));
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
                    $sender->setMaxHealth($this->config->get("HealthC"));
                    $sender->setFood($this->config->get("FoodC"));
                    $sender->setItemInHand($this->config->get("ItemC"));
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
                    $sender->setMaxHealth(20);
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