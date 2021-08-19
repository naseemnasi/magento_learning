<?php
$installer = $this;
$installer ->startSetup();
$installer->run("
    CREATE TABLE IF NOT EXISTS `user_new2`(
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(128) NOT NULL,
    PRIMARY KEY(`id`)
    )
    ");
$installer->endSetup();