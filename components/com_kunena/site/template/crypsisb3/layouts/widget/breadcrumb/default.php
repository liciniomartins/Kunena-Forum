<?php
/**
 * Kunena Component
 * @package     Kunena.Template.Crypsis
 * @subpackage  Layout.Widget
 *
 * @copyright   (C) 2008 - 2015 Kunena Team. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link        http://www.kunena.org
 **/
defined('_JEXEC') or die;

$pathway = $this->breadcrumb->getPathway();
$item = array_shift($pathway);

if ($item) : ?>

<ul class="breadcrumb">
	<li class="active">
		<span class="divider glyphicon glyphicon-location"></span>
		<a href="<?php echo $item->link; ?>"><?php echo $item->name; ?></a>
	</li>

	<?php foreach($pathway as $item) : ?>
	<li>
		<a href="<?php echo $item->link; ?>"><?php echo $item->name; ?></a>
	</li>
	<?php endforeach; ?>

</ul>
<?php endif ?>
