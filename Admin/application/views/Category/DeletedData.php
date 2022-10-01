<div class="row">
	<div class="col-md-12">
		<!-- DATA TABLE -->
		<h3 class="title-5 m-b-35">Deleted Categories</h3>
		<div class="table-data__tool">
			<div class="table-responsive table--no-card m-b-30">
				<table class="table table-data2">
					<thead>
						<tr>
	                                                <th>Category Name</th>
	                                                <th>Entry Date</th>
	                                                <th>Last Updated</th>
	                                                <th></th>
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                        	<?php 
	                                        	foreach ($Categories as $Category) {
	                                        		?>
	                                        		<tr class="tr-shadow">
	                                                
	                                                <td><?php echo $Category['Category_Name'] ?></td>
	                                                <td><?php echo $Category['Category_Entry_Date'] ?></td>
	                                                <td><?php echo $Category['Category_Update_Date'] ?></td>
	                                                
	                                                
	                                                <td>
	                                                	<div class="table-data-feature">

	                                                		<a href="<?php echo base_url()."index.php/Category/DeleteCategory/".$Category['Category_id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete Permanantly">
	                                                			<i class="zmdi zmdi-delete" style="color: red"></i>
	                                                		</a>
	                                                			<a href="<?php echo base_url()."index.php/Category/CategoryStatus/".$Category['Category_id']."/Active" ?>" class="item" data-toggle="tooltip" data-placement="top"><i class="fas fa-upload" title="Recover"></i></a>
	                                                	</div>
	                                                </td>
	                                            </tr>
	                                            <tr class="spacer"></tr>
	                                            <?php
	                                        }
	                                        ?>
	                                        
	                                    </tbody>
	                                </table>
	                            </div>
	                            <!-- END DATA TABLE -->
	                        </div>
	                                            </div>
                </div>
            </div>
        </div>

    </div>

    