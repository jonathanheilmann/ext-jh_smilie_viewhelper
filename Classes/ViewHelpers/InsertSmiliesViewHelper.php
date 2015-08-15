<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2013 Jonathan Heilmann <mail@jonathan-heilmann.de>
*
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * InsertSmilies Viewhelper
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_JhSmilieViewhelper_ViewHelpers_InsertSmiliesViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * Renders a list of available smilies
	 *
	 * @param	string	$targetId	The id of the target form-field
	 * @param	string	$imgPath		Relative path to smilie-images
	 * @return	string 					list of available smilies
	 * @author 	Jonathan Heilmann		<mail@jonathan-heilmann.de>
	 */
	public function render($targetId, $imgPath = 'typo3conf/ext/smilie/res/') {
		$output = '<script language="JavaScript">
			/*<![CDATA[*/
			<!--
			function setSmilie(shortcut) {
			   document.getElementById("'.$targetId.'").value = document.getElementById("'.$targetId.'").value + shortcut;
			}
			//-->
			/*]]>*/
			</script>';
		$smilie = t3lib_div::makeInstance('tx_smilie');
		foreach ($smilie->conf['smilies.'] as $key => $value) {
			$value = explode(' ',$value);
			$output .= '<a href="javascript:setSmilie(\''.$value[0].'\')"><img src="'.$imgPath.$key.'.gif" border="0" alt="Emoticon"/></a>';
		}

		return $output;
	}
}

?>