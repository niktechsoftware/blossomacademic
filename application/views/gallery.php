<div class="container">
		<div class="row">
			<div class="col-lg-12" style="margin-top:10px; padding-bottom:20px;">    		
                    <h2 style="margin-top:50px;" class="text-center">Blossom Academic<span> School Images</span></h2>
            <hr>
                </div>
				</div>

				<div class="row">
				
   <?php $val = $this->db->get("gallery"); 
   if($val->num_rows()>0)
   {
   $i=1;
   foreach($val->result() as $d):
  
  ?>     
                
                <div class="col-md-3 pb-3">
                <div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
								<a href="<?php echo base_url();?>admin/assets/images/<?php echo $d->image; ?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Blossom Academic School">
								<img style="height:200px; width:270px;" src="<?php echo base_url();?>admin/assets/images/<?php echo $d->image; ?>" alt=""/></a>
								</div>
							</div>
				</div>
				<?php $i++; endforeach;} ?>
</div>
                </div>
