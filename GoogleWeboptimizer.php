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

class GoogleWeboptimizer extends Frontend
{ 
	public function optGeneratePage(Database_Result $objPage, Database_Result $objLayout, PageRegular $objPageRegular)
	{
		
		//Get all optimization data
		$objGoogle = $this->Database->prepare("SELECT * FROM tl_google")->execute();
		while($objGoogle->next())
		{
			//testing code
			if($objPage->id == $objGoogle->testing_page)
			{
				$GLOBALS['TL_HEAD'][] = $objGoogle->testing_control;
				$GLOBALS['TL_MOOTOOLS'][] = $objGoogle->testing_tracking;
			}
			
			$arrVariations = deserialize($objGoogle->variation_page);
			if(is_array($arrVariations) && count($arrVariations)>0)
			{
				if(in_array($objPage->id, $arrVariations))
				{
					$GLOBALS['TL_MOOTOOLS'][] = $objGoogle->variation_tracking;
				}
			}
			
			$arrConversions = deserialize($objGoogle->conversion_page);
			if(is_array($arrConversions) && count($arrConversions)>0)
			{
				if(in_array($objPage->id, $arrConversions))
				{
					$GLOBALS['TL_MOOTOOLS'][] = $objGoogle->conversion_tracking;
				}
			}
		}
	
	}
	
}

?>