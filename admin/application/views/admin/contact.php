                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                             
                                                
                                                <th>name</th>
                                                <th>email</th>
                                                   <th>contact</th>
                                                      <th>question</th>
                                                      <th>Date</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("contactus")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                              
                                             
                                                <td><?php echo $row->f_name.$row->l_name ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                   <td><?php echo $row->mobile; ?></td>
                                                      <td><?php echo $row->message; ?></td>
                                                         <td><?php echo $row->date; ?></td>
                                                
                                              
                                                <td>
                                                	<a href="<?php echo base_url();?>apanelForms/deletecontact/<?php echo $row->id; ?>">
                                                		Delete
                                                	</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            <?php endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->