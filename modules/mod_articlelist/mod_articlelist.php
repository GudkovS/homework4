<?php
defined('_JEXEC') or die;

$db = JFactory::getDbo();
$query = $db->getQuery(true);
$query->select('title');
$query->from('#__content');
$db->setQuery($query);                
$list = $db->loadObjectList();

foreach ($list as $item) {
  echo $item->title;
  echo "</br>";
}

?>


