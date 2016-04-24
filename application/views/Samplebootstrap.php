<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/search.css'); ?>" rel="stylesheet">

<base href="<?php echo site_url(); ?>" />
<div class="container">

<?php echo form_open("Boots/getBoots",'class="form-inline"'); ?>
</br>

<div class="container">
	

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-3">
  	<img src="assets/img/mdalogo.png"  class= "mdalogo"  >

  </div>
  <div class="col-md-3"></div>
</div>
<!-- SECOND ROW -->


<div class="row">
  <div class="col-md-3">
  	<div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class=" search-query form-control" placeholder="Search by name" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>




  </div>
  <div class="col-md-5">
           <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class=" search-query form-control" placeholder="Search vessel No" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>


  </div>
  <div class="col-md-3">
  	
<div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class=" search-query form-control" placeholder="Search by Owner" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>




  </div>

       
</div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<!-- END SECOND ROW  -->
<!-- start third row  -->

<div class="row">
  <div class="col-md-3">   	<img src="assets/img/05.jpg"  class="images-under" >  </div>
  <div class="col-md-3">      <img src="assets/img/04.jpg" class="images-under"  ></div>
  <div class="col-md-3">     	<img src="assets/img/02.jpg"  class="images-under">   </div>
  <div class="col-md-3">     	<img src="assets/img/01.jpg" class="images-under" >   </div>
</div>

<!-- end third row  -->

		
</div>
<?php echo form_close(); ?>
</div>
