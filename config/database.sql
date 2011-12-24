-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- 
-- Table `tl_google`
-- 

CREATE TABLE `tl_google` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `sorting` int(10) unsigned NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `testing_page` int(10) unsigned NOT NULL default '0',
  `testing_control` text NULL,
  `testing_tracking` text NULL,
  `variation_page` blob NULL,
  `variation_tracking` text NULL,
  `conversion_page` blob NULL,
  `conversion_tracking` text NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
