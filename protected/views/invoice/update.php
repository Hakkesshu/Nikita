<?php
/* @var $this InvoiceController */
/* @var $model Invoice */

$this->breadcrumbs=array(
	'Invoices'=>array('index'),
	$model->title=>array('view','id'=>$model->invoiceId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Invoice', 'url'=>array('index')),
	array('label'=>'Create Invoice', 'url'=>array('create')),
	array('label'=>'View Invoice', 'url'=>array('view', 'id'=>$model->invoiceId)),
	array('label'=>'Manage Invoice', 'url'=>array('admin')),
);
?>

<h1>Update Invoice <?php echo $model->invoiceId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>