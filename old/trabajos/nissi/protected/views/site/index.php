    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>        
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/hn1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>              
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/hn2.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>              
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    <div class="reservacion">
        <div class="container">
          <div class="form-roup">
            <div class="col-md-2"><p>Reservación: </p></div>
          </div>
          <form class="form-inline" id="user_form_inline" action="/nissi/" method="post">              
            <div class="form-group">
              <div>
                <input name="LoginForm[username]" id="LoginForm_username" class="form-control" placeholder="Check In" type="text" />                
              </div>
            </div>
            <div class="form-group">
              <div>
                <input name="LoginForm[username]" id="LoginForm_username" class="form-control" placeholder="Check Out" type="text" />                
              </div>
            </div>
            <div class="form-group">
              <div>
                <input name="LoginForm[username]" id="LoginForm_username" class="form-control" placeholder="Paquete" type="text" />                
              </div>
            </div>                        
            <div class="form-group">
              <div>
                <input name="LoginForm[username]" id="LoginForm_username" class="form-control" placeholder="Númoero de personas" type="text" />                
              </div>
            </div>            
            <button class="btn btn-primary" type="submit" name="yt0">Submit</button>          
          </form>

        </div>
    </div>

    <div class="container">
      <div class="text-center">
        <h1>Paquetes Preferidos</h1>
        <p>Estos son los mejores paquetes turísticos</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <img class="img-responsive thumbnail" src="<?php echo Yii::app()->request->baseUrl; ?>/images/hn5.jpg" alt="">
          <h3>Lorem Ipsum - $1300</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
           <div class="">
              <ul class="list-unstyled">
                  <li class="span2"><i class="glyphicon glyphicon-check"></i>Kingsize Bed</li>
                  <li class="span2"><i class="glyphicon glyphicon-check"></i>Mountain View</li>
                  <li class="span2"><i class="glyphicon glyphicon-check"></i>Hotspot and TV Cable</li>
                  <li class="span2"><i class="glyphicon glyphicon-check"></i>Free Lunch and Dinner</li>
              
              </ul>
            </div>        
        </div> 
        <div class="col-md-4">
          <img class="img-responsive thumbnail" src="<?php echo Yii::app()->request->baseUrl; ?>/images/hn6.jpg" alt="">
          <h3>Lorem Ipsum - $1300</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
           <div class="">
              <ul class="list-unstyled">
                  <li class="span2"><i class="glyphicon glyphicon-check"></i>Kingsize Bed</li>
                  <li class="span2"><i class="glyphicon glyphicon-check"></i>Mountain View</li>
                  <li class="span2"><i class="glyphicon glyphicon-check"></i>Hotspot and TV Cable</li>
                  <li class="span2"><i class="glyphicon glyphicon-check"></i>Free Lunch and Dinner</li>
              
              </ul>
            </div>        
        </div>
        <div class="col-md-4">
          <img class="img-responsive thumbnail" src="<?php echo Yii::app()->request->baseUrl; ?>/images/hn7.jpg" alt="">
          <h3>Lorem Ipsum - $1300</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
           <div class="">
              <ul class="list-unstyled">
                  <li class="span2"><i class="glyphicon glyphicon-check"></i>Kingsize Bed</li>
                  <li class="span2"><i class="glyphicon glyphicon-check"></i>Mountain View</li>
                  <li class="span2"><i class="glyphicon glyphicon-check"></i>Hotspot and TV Cable</li>
                  <li class="span2"><i class="glyphicon glyphicon-check"></i>Free Lunch and Dinner</li>
              
              </ul>
            </div>        
        </div>        
      </div>

      <hr class="newclass">
      <div class="row text-center">
        <div class="col-md-3 feature">
          <i class="glyphicon glyphicon-cutlery glyphicon-3x"></i><br>
          <h4>Lorem Ipsum</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
          
        <div class="col-md-3 feature">
          <i class="glyphicon glyphicon-calendar glyphicon-3x"></i><br>
          <h4>Lorem Ipsum</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        
        <div class="col-md-3 feature">
          <i class="glyphicon glyphicon-arrow-right glyphicon-3x"></i><br>
          <h4>Lorem Ipsum</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        
        <div class="col-md-3 feature">
          <i class="glyphicon glyphicon-thumbs-up glyphicon-3x"></i><br>
          <h4>Lorem Ipsum</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>        
      </div>
      <hr class="newclass">

    </div>