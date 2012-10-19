<?php
/* @var $this MovieController */
/* @var $data Movie */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('movieId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->movieId), array('view', 'id'=>$data->movieId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('movieTypeId')); ?>:</b>
	<?php echo CHtml::encode($data->movieTypeId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('movieCategoryNum')); ?>:</b>
	<?php echo CHtml::encode($data->movieCategoryNum); ?>
	<br />


</div>