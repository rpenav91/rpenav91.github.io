<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
?>

<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Usuarios', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Usuarios') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>