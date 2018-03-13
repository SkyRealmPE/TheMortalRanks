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
use pocketmine\inventory\Inventory;
use pocketmine\item\ItemFactory;
use pocketmine\event\entity\EntityInventoryChangeEvent;
use pocketmine\item\Item;
use pocketmine\inventory\BaseInventory;


class Main extends PluginBase implements listener {

    private $config;

    public function onEnable() {
        $this->getLogger()->info(TextFormat::YELLOW . "Created by Cat -Discord- ");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if ($sender->hasPermission("svip.update")) {
            if (strtolower($command->getName()) == "svipupdate") {
                $sender->sendMessage(TextFormat::GREEN . "updated!");
                if ($sender instanceof Player) {
                    $sender->setMaxHealth(40);
                    $sender->setHealth(40);
                    $sender->addFood(20);
                    $sender->setMaxAirSupplyTicks(20);
                    $sender->getLevel()->setBlock($sender->floor(), Block::get(Block::FIRE));
                    return true;
                } else {
                    $sender->sendMessage(TextFormat::RED . "Incorrect usage or privlages!");
                    return false;
                }
            }

            if ($sender->hasPermission("sviplus.update")) {
                if (strtolower($command->getName()) == "sviplusupdate") {
                    $sender->sendMessage(TextFormat::YELLOW . "updated!");
                    if ($sender instanceof Player) {
                        $sender->setMaxHealth(60);
                        $sender->addFood(20);
                        $sender->setHealth(60);
                        $sender->setMaxAirSupplyTicks(30);
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
                            $sender->setMaxHealth(80);
                            $sender->addFood(20);
                            $sender->setHealth(80);
                            $sender->setMaxAirSupplyTicks(35);
                            $sender->getLevel()->setBlock($sender->floor(), Block::get(Block::FIRE));
                            return true;
                        } else {
                            $sender->sendMessage(TextFormat::RED . "Incorrect usage or privlages!");
                            return false;
                        }
                    }

                    if ($sender->hasPermission("group.reset")) {
                        if (strtolower($command->getName()) == "resetsgroups") {
                            $sender->sendMessage(TextFormat::RED . "updated!");
                            if ($sender instanceof Player) {
                                $sender->setMaxHealth(20);
                                $sender->addFood(20);
                                $sender->setMaxAirSupplyTicks(50);
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
