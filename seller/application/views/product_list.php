<?php echo $html_heading;?>
<body class="  ">
    <div class="bg-dark dk" id="wrap">
        <?php echo $top.$left;?>
        <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">

            <!--Begin Datatables
            <h4 class="reg_header">&nbsp;</h4>-->
            
            <br style="clear:both;" />
            <div class="form-group field required">
            <div class="row">
                 <div class="col-md-1">
                 	<label>Action</label>
                 </div>
                    
                  <div class="col-md-4">
                 	 <select name="actionDrop" class="form-control input" id="actionDrop" >
                        <option value="0" >Please Select</option>
                        <option value="1">Bulk Delete</option>
                        <option value="2">Bulk Active</option>
                        <option value="3">Bulk Inactive</option>
                      </select>
                    <input type="hidden" autocomplete="off" />  
                      
                 </div>
                 </div>
                 </div>
               <br style="clear:both;" />
               
               
                  <div  id="div-2" class="body table-responsive">                   
                    <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                      <thead>
                        <tr>
                          <th width="15"></th>
                          <th width="200">Action</th>
                          <th>Status</th>
                          <th>Image</th>
                          <th>SKU</th>
                          <th width="90">Product Name</th>
                          <th width="30">In stock</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(count($DataArr)>0){
                            foreach($DataArr AS $k){?>  
                        <tr>
                          <td><input type="checkbox" name="sel_pro"></td>
                          <td><a href="#">Edit</a> / <a href="#">Delete</a></td>
                          <td><?php echo ($k->status==0) ?'Activve' : 'Inactive';?></td>
                          <td><img src="<?php echo SiteResourcesURL.'product/100X100/'.$k->image;?>" alt="<?php echo $k->title;?>"></td>
                          <td><?php echo $k->model;?></td>
                          <td><?php echo $k->title;?></td>
                          <td><?php echo $k->qty; ?></td>
                        </tr>
                        <?php }
                        }?> 
                        
                        
                      </tbody>
                    </table>
                  </div>
               <!-- /.row -->

            <!--End Datatables-->
           
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
    </div>
    <?php echo $footer;?>
</body>
</html>
<script src="<?php echo SiteJSURL;?>jquery.dataTables.min.js"></script>
<script src="<?php echo SiteJSURL;?>dataTables.bootstrap.js"></script>
<script src="<?php echo SiteJSURL;?>jquery.tablesorter.min.js"></script>
<script src="<?php echo SiteJSURL;?>jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo SiteJSURL;?>metis-file-map-sortable-datatable-pricing-progress.js"></script>
<script type="text/javascript">
 $(function() {

    $("#actionDrop").sortable(); $("#actionDrop").disableSelection();

}); 
    $(function() {
      Metis.MetisTable();
      Metis.metisSortable();
    });
	
</script>
