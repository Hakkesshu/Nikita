<?php
/* @var $this InvoiceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Invoices',
);

$this->menu=array(
	array('label'=>'Create Invoice', 'url'=>array('create')),
	array('label'=>'Manage Invoice', 'url'=>array('admin')),
);
?>

<h1>Invoices</h1>

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
        array('name'=>'invoiceId', 'header'=>'Invoice Id'),
        array('name'=>'stockNum', 'header'=>'Stock Number'),
        array('name'=>'title', 'header'=>'title'),
        array('name'=>'customerNum', 'header'=>'Customer Number'),
        array('name'=>'invoiceNum', 'header'=>'Invoice Number'),
        array('name'=>'rentalDate', 'header'=>'Rental Date'),
        array('name'=>'dueDate', 'header'=>'Due Date'),
        array('name'=>'rentalPrice', 'header'=>'Rental Price'),
        array('name'=>'rentalStatus', 'header'=>'Rental Status'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
));


?>
