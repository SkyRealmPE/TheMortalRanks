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
        $this->getLogger()->info(TextFormat::YELLOW . "SkyRealm's Ranks Plugin enabled");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if ($sender->hasPermission("member.command")) {
            if (strtolower($command->getName()) == "member") {
                $sender->sendMessage("§l§bSky§6Bonus §8>§r§a You have been given special rewards for being a §dmember§a rank!);
                if ($sender instanceof Player) {
                    $sender->setMaxHealth(50);
                    $sender->setHealth(40);
                    $sender->addFood(20);
                    $sender->setMaxAirSupplyTicks(20);
                    $sender->getLevel()->setBlock($sender->floor(), Block::get(Block::FIRE));
                    return true;
                } else {
                    $sender->sendMessage(TextFormat::RED . "You dont have permission for this command! Vote at §abit.do/skyrealmpe §4to use this command!");
                    return false;
                }
            }

            if ($sender->hasPermission("donater.command")) {
                if (strtolower($command->getName()) == "donater") {
                    $sender->sendMessage("§l§bSky§6Bonus§8 >§r§a You have been given special rewards for having a §ddonater §arank!");
                    if ($sender instanceof Player) {
                        $sender->setMaxHealth(70);
                        $sender->addFood(20);
                        $sender->setHealth(70);
                        $sender->setMaxAirSupplyTicks(30);
                        $sender->getLevel()->setBlock($sender->floor(), Block::get(Block::FIRE));
                        return true;
                    } else {
                        $sender->sendMessage(TextFormat::RED . "You dont have permission for this command! Vote at §abit.do/skyrealmpe §4to use this command!");
                        return false;
                    }
                }

                if ($sender->hasPermission("youtuber.command")) {
                    if (strtolower($command->getName()) == "youtuber") {
                        $sender->sendMessage("§l§bSky§6Bonus§8 >§r§a You have been given special rewards for having a §dyoutube §arank!");
                        if ($sender instanceof Player) {
                            $sender->setMaxHealth(60);
                            $sender->addFood(20);
                            $sender->setHealth(60);
                            $sender->setMaxAirSupplyTicks(35);
                            $sender->getLevel()->setBlock($sender->floor(), Block::get(Block::FIRE));
                            return true;
                        } else {
                            $sender->sendMessage(TextFormat::RED . "Incorrect usage or privlages!");
                            return false;
                        }
                    }

                    if ($sender->hasPermission("staffop.command")) {
                        if (strtolower($command->getName()) == "staff") {
                            $sender->sendMessage("§l§bSky§6Bonus§8 >§r§a You have been given special rewards for having a §ddonater §arank!");
                            if ($sender instanceof Player) {
                                $sender->setMaxHealth(70);
                                $sender->addFood(20);
                                $sender->setHealth(70);
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
