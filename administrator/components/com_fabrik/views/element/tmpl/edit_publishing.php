<?php
/**
 * Admin Element Edit:publishing Tmpl
 *
 * @package     Joomla.Administrator
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005 Fabrik. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @since       3.0
 */

// No direct access
defined('_JEXEC') or die;
?>
<?php echo JHtml::_('tabs.panel', JText::_('COM_FABRIK_PUBLISHING'), 'settings');

$panels = array(
	array('heading'=>JText::_('COM_FABRIK_ELEMENT_LABEL_PUBLISHING_DETAILS'),
		'fieldset'=>'publishing'),

	array('heading'=>JText::_('COM_FABRIK_ELEMENT_LABEL_RSS'),
		'fieldset'=>'rss'),

	array('heading'=>JText::_('COM_FABRIK_ELEMENT_LABEL_TIPS'),
		'fieldset'=>'tips')
);

echo JHtml::_('sliders.start','element-sliders-publishingsettings-'.$this->item->id, array('useCookie'=>1));

foreach ($panels as $panel) {
	echo JHtml::_('sliders.panel', $panel['heading'], $panel['fieldset'].-'details');
			?>
			<fieldset class="adminform">
				<ul class="adminformlist">
					<?php foreach ($this->form->getFieldset($panel['fieldset']) as $field) :?>
					<li>
						<?php echo $field->label; ?><?php echo $field->input; ?>
					</li>
					<?php endforeach; ?>
				</ul>
			</fieldset>
<?php }
echo JHtml::_('sliders.end'); ?>