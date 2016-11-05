<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
<?php
$cs = Yii::app()->clientScript;
$themePath = Yii::app()->theme->baseUrl;

/**
 * StyleSHeets
 */
$cs
    ->registerCssFile($themePath.'/css/bootstrap.css')
    ->registerCssFile($themePath.'/css/main.css')
    ->registerCssFile($themePath.'/flat/bootstrap-flat.css')
    ->registerCssFile($themePath.'/flat/datetimepicker.css')
    ->registerCssFile($themePath.'/flat/bootstrap-flat-extras.css');    

/**
 * JavaScripts
 */
$cs
    ->registerCoreScript('jquery',CClientScript::POS_END)    
    ->registerCoreScript('jquery.ui',CClientScript::POS_END)
    ->registerScriptFile($themePath.'/js/bootstrap.min.js',CClientScript::POS_END)
    ->registerScriptFile($themePath.'/js/holder2.js',CClientScript::POS_END)

    ->registerScript('tooltip',
        "$('[data-toggle=\"tooltip\"]').tooltip();
        $('[data-toggle=\"popover\"]').tooltip()"
        ,CClientScript::POS_READY);

?>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/html5shiv.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/respond.min.js"></script>
<![endif]-->    

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-114x114.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>

<body>           
    <div class="myheader">      
        <div class="header">
          <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/header.png" alt="">
        </div>
        
      <hr>
      <ul class="mynav nav nav-justified">
        <li class="active"><a href="#">Inicio</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Destinos</a></li>
        <li><a href="#">Paquetes Túristicos</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Contáctenos</a></li>
      </ul>
    </div>
    <?php
      echo $content;
    ?>    

         <footer>
            <div class="container">
                <div class="col-md-3">
                    <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/pajaro.png" alt="">
                </div>
                <div class="col-md-3">
                    <h3>Lorem Ipsum</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat.                        
                    </p>
                </div>
                <div class="col-md-3">                    
                    <h3>Noticias</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <img class="img-responsive thumbnail" src="<?php echo Yii::app()->request->baseUrl; ?>/images/pajaro.png" alt="">                            
                        </div>
                        <div class="col-md-9">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                            </p>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <img class="img-responsive thumbnail" src="<?php echo Yii::app()->request->baseUrl; ?>/images/pajaro.png" alt="">                            
                        </div>
                        <div class="col-md-9">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                            </p>                            
                        </div>
                    </div>                    
                </div>
                <div class="col-md-3">
                    <h3>Dirección</h3>
                    <p>Col. Hato de Enmedio Sector 4</p>
                    <p>Teléfono: (504) - 9876-5432</p>
                    <p>Correo: <a href="emailto:rpenav91@hotmail.com">rpenav91@hotmail.com</a></p>
                </div>


            </div>
        </footer>
</body>

</html>

          
        

        
        
