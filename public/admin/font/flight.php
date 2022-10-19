 <?php 
 include('admincp/core/dbcore.php');

 $pagename=get_lang_key('flight',$lang);

 include('header.php');
   ?>

 <!-- BEGIN: PAGE TITLE SECTION -->
 <section>
     <!-- START: PAGE TITLE -->
     <div class="row page-title">
         <div class="container clear-padding text-center flight-title">
             <h3  id="view_type" ><?php echo $pagename; ?></h3>
         </div>
     </div>
     <!-- END: PAGE TITLE -->
 </section>
 <!-- END: PAGE TITLE SECTION -->

 <!-- BEGIN: CONTENT SECTION -->
 <section style="background: #fff;">
     <!-- START: POST LISTING -->
     <div class="row">
         <div class="container clear-padding" >
             <div>
                 <div class="col-md-12">

                     <div role="tabpanel">

                         <!-- Nav tabs -->
                         <ul class="nav nav-tabs" role="tablist">
                             <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php echo get_lang_key('inflight',$lang);?></a></li>
                             <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><?php echo get_lang_key('outflight',$lang);?></a></li>
                         </ul>

                         <!-- Tab panes -->
                         <div class="tab-content search-section">
                             <div role="tabpanel" class="tab-pane active" id="home">
 
 
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(document).ready(function(){

$('#submit').click(function(){

$.post("<?php echo $siteurl; ?>send.php", $("#mycontactform").serialize(),  function(response) {   
 $('#success').html(response);
 $('#success').hide('slow');
});
return false;


});

});
</script> 

<form action="" method="post" id="mycontactform" >
                                 <div class="col-md-4 col-sm-12 search-col-padding">
                                     <label><?php echo get_lang_key('name',$lang);?></label><br>
                                     <div class="input-group">
                                         <input type="text" name="name" class="form-control" placeholder="<?php echo get_lang_key('name',$lang);?>">
                                         <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>

                                     </div>
                                 </div>


                                 <div class="col-md-4 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('mobiel',$lang);?></label><br>
                                     <div class="input-group">
                                         <input type="text" name="mobiel" class="form-control" placeholder="<?php echo get_lang_key('mobiel',$lang);?>">
                                         <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>

                                     </div>
                                 </div>

                                 <div class="col-md-4 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('email',$lang);?></label><br>
                                     <div class="input-group">
                                         <input type="email" name="email" class="form-control" placeholder="<?php echo get_lang_key('email',$lang);?>">
                                         <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>

                                     </div>
                                 </div>

                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('from',$lang);?></label><br>
                                     <div class="input-group">
                                         <input type="text" id="departure_date" name="from_date" class="form-control" placeholder="DD/MM/YYYY">
                                         <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                     </div>
                                 </div>

                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('to',$lang);?></label><br>
                                     <div class="input-group">
                                         <input type="text" id="return_date" class="form-control" name="to_date" placeholder="DD/MM/YYYY">
                                         <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                     </div>
                                 </div>


                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('from',$lang);?><?php echo get_lang_key('city',$lang);?></label><br>
                                     <div class="input-group">
                                         <input type="text"   name="from_city" class="form-control" placeholder="<?php echo get_lang_key('from',$lang);?><?php echo get_lang_key('city',$lang);?>">
                                         <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>

                                     </div>
                                 </div>

                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('to',$lang);?><?php echo get_lang_key('city',$lang);?></label><br>
                                     <div class="input-group">
                                         <input type="text"   class="form-control" name="to_city" placeholder="<?php echo get_lang_key('to',$lang);?><?php echo get_lang_key('city',$lang);?>">
                                         <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>

                                     </div>
                                 </div>
                                <?php /* ?> 
                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('puls12',$lang);?></label><br>
                                     <select class="selectpicker">
                                         <?php for ($i=0; $i<=8; $i++){?>

                                             <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                         <?php }?>
                                     </select>
                                 </div>

                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('child2to12',$lang);?></label><br>
                                     <select class="selectpicker">
                                         <?php for ($i=0; $i<=8; $i++){?>

                                             <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                         <?php }?>
                                     </select>
                                 </div>
                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('under2',$lang);?></label><br>
                                     <select class="selectpicker">
                                         <?php for ($i=0; $i<=8; $i++){?>

                                             <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                         <?php }?>
                                     </select>
                                 </div>
								<?php */ ?> 
                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('leveltype',$lang);?></label><br>
                                     <select class="selectpicker">

                                             <option value="<?php echo get_lang_key('ektsady',$lang);?>"><?php echo get_lang_key('ektsady',$lang);?></option>
                                             <option value="<?php echo get_lang_key('bussnismao',$lang);?>"><?php echo get_lang_key('bussnismao',$lang);?></option>
                                      </select>
                                 </div>
                                 <div class="text-center">

                                     <button type="submit" class="search-button btn transition-effect">  <?php echo get_lang_key('send',$lang);?>  </button>

                                 </div>
						</form>		 
                             </div>
							 
							 
							 
							 
							 
                             <div role="tabpanel" class="tab-pane" id="profile">



                                 <div class="col-md-4 col-sm-12 search-col-padding">
                                     <label><?php echo get_lang_key('name',$lang);?></label><br>
                                     <div class="input-group">
                                         <input type="text" name="departure_date" class="form-control" placeholder="<?php echo get_lang_key('name',$lang);?>">
                                         <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>

                                     </div>
                                 </div>


                                 <div class="col-md-4 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('mobiel',$lang);?></label><br>
                                     <div class="input-group">
                                         <input type="text" name="departure_date" class="form-control" placeholder="<?php echo get_lang_key('mobiel',$lang);?>">
                                         <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>

                                     </div>
                                 </div>

                                 <div class="col-md-4 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('email',$lang);?></label><br>
                                     <div class="input-group">
                                         <input type="text" name="departure_date" class="form-control" placeholder="<?php echo get_lang_key('email',$lang);?>">
                                         <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>

                                     </div>
                                 </div>

                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('from',$lang);?></label><br>
                                     <div class="input-group">
                                         <input type="text" id="departure_date" name="departure_date" class="form-control" placeholder="DD/MM/YYYY">
                                         <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                     </div>
                                 </div>

                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('to',$lang);?></label><br>
                                     <div class="input-group">
                                         <input type="text" id="return_date" class="form-control" name="return_date" placeholder="DD/MM/YYYY">
                                         <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                     </div>
                                 </div>


                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('from',$lang);?><?php echo get_lang_key('country',$lang);?></label><br>
                                     <div class="input-group">
                                         <input type="text"   name="departure_date" class="form-control" placeholder="<?php echo get_lang_key('from',$lang);?><?php echo get_lang_key('country',$lang);?>">
                                         <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>

                                     </div>
                                 </div>

                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('to',$lang);?><?php echo get_lang_key('country',$lang);?></label><br>
                                     <div class="input-group">
                                         <input type="text"   class="form-control" name="return_date" placeholder="<?php echo get_lang_key('to',$lang);?><?php echo get_lang_key('country',$lang);?>">
                                         <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>

                                     </div>
                                 </div>

                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('puls12',$lang);?></label><br>
                                     <select class="selectpicker">
                                         <?php for ($i=0; $i<=8; $i++){?>

                                             <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                         <?php }?>
                                     </select>
                                 </div>

                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('child2to12',$lang);?></label><br>
                                     <select class="selectpicker">
                                         <?php for ($i=0; $i<=8; $i++){?>

                                             <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                         <?php }?>
                                     </select>
                                 </div>
                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('under2',$lang);?></label><br>
                                     <select class="selectpicker">
                                         <?php for ($i=0; $i<=8; $i++){?>

                                             <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                         <?php }?>
                                     </select>
                                 </div>
                                 <div class="col-md-3 col-sm-6 search-col-padding">
                                     <label><?php echo get_lang_key('leveltype',$lang);?></label><br>
                                     <select class="selectpicker">

                                         <option value="<?php echo get_lang_key('ektsady',$lang);?>"><?php echo get_lang_key('ektsady',$lang);?></option>
                                         <option value="<?php echo get_lang_key('bussnismao',$lang);?>"><?php echo get_lang_key('bussnismao',$lang);?></option>
                                     </select>
                                 </div>
                                 <div class="text-center">

                                 <button type="submit" class="search-button btn transition-effect">  <?php echo get_lang_key('send',$lang);?>  </button>

</div>
                             </div>

                         </div>

                     </div>




                 </div>
             </div>
         </div>
         <!-- END: POST LISTING -->
 </section>
 <!-- END: CONTENT SECTION -->



 <?php 
 include('footer.php');
 ?>