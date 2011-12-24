<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  	Blair Winans 2011
 * @author     	Blair Winans <blair@winanscreative.com>
 * @package    	Google Weboptimizer
 * @license    	LGPL
 * @filesource
 */



/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_google']['name']       = array('Campaign name', 'Please enter the campaign title.');
$GLOBALS['TL_LANG']['tl_google']['testing_page']       = array('Testing Page', 'Please select the testing page.');
$GLOBALS['TL_LANG']['tl_google']['testing_control']       = array('Testing Control', 'Please enter testing control script.');
$GLOBALS['TL_LANG']['tl_google']['testing_tracking']       = array('Testing Tracking', 'Please enter the testing tracking script.');
$GLOBALS['TL_LANG']['tl_google']['variation_page']       = array('Variation Pages', 'Please select the variation pages.');
$GLOBALS['TL_LANG']['tl_google']['variation_tracking']       = array('Variation Tracking', 'Please enter the variation tracking script.');
$GLOBALS['TL_LANG']['tl_google']['conversion_page']       = array('Conversion Pages', 'Please select the conversion pages.');
$GLOBALS['TL_LANG']['tl_google']['conversion_tracking']       = array('Conversion Tracking', 'Please enter the conversion tracking script.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_google']['name_legend']   = 'Campaign Name';
$GLOBALS['TL_LANG']['tl_google']['testing_legend']   = 'Testing Section';
$GLOBALS['TL_LANG']['tl_google']['variation_legend']   = 'Variation Section';
$GLOBALS['TL_LANG']['tl_google']['conversion_legend']   = 'Conversion Section';


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_google']['header'] = 'Header';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_google']['new']        = array('New Test Campaign', 'Create a new campaign');
$GLOBALS['TL_LANG']['tl_google']['show']       = array('Campaign details', 'Show the details of campaign ID %s');
$GLOBALS['TL_LANG']['tl_google']['edit']       = array('Edit campaign', 'Edit campaign ID %s');
$GLOBALS['TL_LANG']['tl_google']['editheader'] = array('Edit campaign settings', 'Edit the settings of campaign ID %s');
$GLOBALS['TL_LANG']['tl_google']['copy']       = array('Duplicate campaign', 'Duplicate campaign ID %s');
$GLOBALS['TL_LANG']['tl_google']['cut']        = array('Move campaign', 'Move campaign ID %s');
$GLOBALS['TL_LANG']['tl_google']['delete']     = array('Delete campaign', 'Delete campaign ID %s');
$GLOBALS['TL_LANG']['tl_google']['toggle']     = array('Publish/unpublish campaign', 'Publish/unpublish campaign ID %s');
$GLOBALS['TL_LANG']['tl_google']['pasteafter'] = array('Paste after', 'Paste after campaign ID %s');
$GLOBALS['TL_LANG']['tl_google']['pasteinto']  = array('Paste into', 'Paste into page ID %s');

?>