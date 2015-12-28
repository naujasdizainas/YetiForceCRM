<?php

/**
 * UIType ReferenceProcess Field Class
 * @package YetiForce.Fields
 * @license licenses/License.html
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class Vtiger_ReferenceProcess_UIType extends Vtiger_ReferenceLink_UIType
{

	public function getReferenceList()
	{
		return ['SSalesProcesses', 'HelpDesk', 'Project', 'ServiceContracts', 'Campaigns'];
	}
}