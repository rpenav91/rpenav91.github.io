<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
?>

<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Usuarios', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Usuarios', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Usuarios', 'url'=>array('view', 'id'=>$model->id)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Usuarios '.$model->id) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>