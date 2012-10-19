<?php
/* @var $this InventoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inventories',
);

$this->menu=array(
	array('label'=>'Create Inventory', 'url'=>array('create')),
	array('label'=>'Manage Inventory', 'url'=>array('admin')),
);
?>

<h1>Inventories</h1>

<?php 

//$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); 



 $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
         //array('name'=>'id', 'header'=>'#'),
        array('name'=>'inventoryId', 'header'=>'Inventory Id'),
        array('name'=>'movieId', 'header'=>'Movie Id'),
        array('name'=>'stockNum', 'header'=>'Stock Number'),
        array('name'=>'purchaseDate', 'header'=>'Purchase Date'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
));


?>
