<?php
/* @var $this InventoryController */
/* @var $model Inventory */

$this->breadcrumbs=array(
	'Inventories'=>array('index'),
	$model->inventoryId=>array('view','id'=>$model->inventoryId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Inventory', 'url'=>array('index')),
	array('label'=>'Create Inventory', 'url'=>array('create')),
	array('label'=>'View Inventory', 'url'=>array('view', 'id'=>$model->inventoryId)),
	array('label'=>'Manage Inventory', 'url'=>array('admin')),
);
?>

<h1>Update Inventory <?php echo $model->inventoryId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>