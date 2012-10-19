<?php
/* @var $this MovieController */
/* @var $model Movie */

$this->breadcrumbs=array(
	'Movies'=>array('index'),
	$model->title=>array('view','id'=>$model->movieId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Movie', 'url'=>array('index')),
	array('label'=>'Create Movie', 'url'=>array('create')),
	array('label'=>'View Movie', 'url'=>array('view', 'id'=>$model->movieId)),
	array('label'=>'Manage Movie', 'url'=>array('admin')),
);
?>

<h1>Update Movie <?php echo $model->movieId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>