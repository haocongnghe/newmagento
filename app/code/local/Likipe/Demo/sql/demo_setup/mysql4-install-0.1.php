<?php

/*
    Document   : mysql4-install-0
    Created on : Jul 3, 2014, 2:04:00 PM
    Author     : Harrison
    Description: 
*/
?>
<?php
$installer = $this;
$installer->startSetup();

$installer->run("
    -- DROP TABLE IF EXISTS {$this->getTable('demo/demo')};
    CREATE TABLE {$this->getTable('demo/demo')} (
      `demo_id` int(11) unsigned NOT NULL auto_increment,
      `title` varchar(255) NOT NULL default '',
      `content` text NOT NULL default '',
      `status` smallint(6) NOT NULL default '0',
      `created_time` datetime NULL,
      `update_time` datetime NULL,
      PRIMARY KEY (`demo_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

");

$installer->endSetup();