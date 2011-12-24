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
 * Table tl_page
 */
$GLOBALS['TL_DCA']['tl_google'] = array
(

	// Config
	'config' => array
	(
		'label'                       => $GLOBALS['TL_CONFIG']['websiteTitle'],
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 2,
			'fields'                  => array('name'),
			'flag'                    => 1,
			'panelLayout'             => 'filter;sort,search,limit'
		),
		'label' => array
		(
			'fields'                  => array('name'),
			'format'                  => '<strong>%s</strong>',
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_google']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_google']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_google']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_google']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'                     => '{name_legend},name;{testing_legend},testing_page,testing_control,testing_tracking;{variation_legend},variation_page,variation_tracking;{conversion_legend},conversion_page,conversion_tracking;',
	),


	// Fields
	'fields' => array
	(
		'name' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_google']['name'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		),
		'testing_page' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_google']['testing_page'],
			'exclude'                 => true,
			'inputType'               => 'pageTree',
			'eval'                    => array('mandatory'=>true, 'fieldType'=>'radio')
		),
		'testing_control' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_google']['testing_control'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>true, 'allowHtml'=>true, 'preserveTags'=>true, 'style'=>'height:90px;', 'tl_class'=>'clr')
		),
		'testing_tracking' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_google']['testing_tracking'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>true, 'allowHtml'=>true, 'preserveTags'=>true, 'style'=>'height:90px;', 'tl_class'=>'clr')
		),
		'variation_page' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_google']['variation_page'],
			'exclude'                 => true,
			'inputType'               => 'pageTree',
			'eval'                    => array('mandatory'=>true, 'fieldType'=>'checkbox')
		),
		'variation_tracking' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_google']['variation_tracking'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>true, 'allowHtml'=>true, 'preserveTags'=>true, 'style'=>'height:90px;', 'tl_class'=>'clr')
		),
		'conversion_page' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_google']['conversion_page'],
			'exclude'                 => true,
			'inputType'               => 'pageTree',
			'eval'                    => array('mandatory'=>true, 'fieldType'=>'checkbox')
		),
		'conversion_tracking' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_google']['conversion_tracking'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>true, 'allowHtml'=>true, 'preserveTags'=>true, 'style'=>'height:90px;', 'tl_class'=>'clr')
		),
	)
);


/**
 * Class tl_log
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Leo Feyer 2005-2010
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Controller
 */
class tl_google extends Backend
{
}

?>