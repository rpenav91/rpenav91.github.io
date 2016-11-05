<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
?>

<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->id,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Usuarios', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Usuarios', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Usuarios', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Usuarios '.$model->id) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
	),
)); ?>