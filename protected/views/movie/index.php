<?php
/* @var $this MovieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Movies',
);

$this->menu=array(
	array('label'=>'Create Movie', 'url'=>array('create')),
	array('label'=>'Manage Movie', 'url'=>array('admin')),
);
?>

<h1>Movies</h1>

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
        array('name'=>'movieId', 'header'=>'Movie Id'),
        array('name'=>'movieTypeId', 'header'=>'Type Id'),
        array('name'=>'title', 'header'=>'Title'),
        array('name'=>'movieCategoryNum', 'header'=>'Movie Category Number'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
));


?>
