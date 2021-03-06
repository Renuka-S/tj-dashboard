<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Tjdashboard
 * @author     Techjoomla <extensions@techjoomla.com>
 * @copyright  2017 Techjoomla
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die;

JHTML::_('behavior.modal');


$document = JFactory::getDocument();
$script = 'var root_url = "' . Juri::root() . '";';
$document->addScriptDeclaration($script, 'text/javascript');
// $document->addScript('components/com_tjdashboard/assets/js/jquery.min.js'); Why this line needed don't get it
$document->addScript('components/com_tjdashboard/assets/js/morris.min.js');
$document->addScript('components/com_tjdashboard/assets/js/raphael-min.js');
$document->addScript('components/com_tjdashboard/assets/js/tjdashContentService.js');
$document->addScript('components/com_tjdashboard/assets/js/tjdashContentUI.js');
$document->addStylesheet('components/com_tjdashboard/assets/css/morris.css');
?>
<script>
jQuery(document).ready(function() {
		tjdashContentUI.dashboard.init(<?php echo $this->dashboardId; ?>);
	});
</script>

<div class="row-fluid">
	<div class="span12 tjdashboard" style="margin-left:10px;">
	</div>
</div>
