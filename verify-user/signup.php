<!-- for registration  -->
	<section>
	<div class="modal fade" id="register">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Join With Consult Professor</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                        	<div class="form-group">
                                <input type="text" class="form-control" id="susername" placeholder="full name *" value=""/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="channel_name" placeholder="channel name *" value=""/>
                            </div>
                           <div class="form-group">
                                <input type="text" class="form-control" id="spassword" placeholder="Your Password *" value=""/>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="select">
                                  <option id="0">country code</option>
                                <?php
                                  $sql = "SELECT * FROM country order by id asc";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                        ?>
                                       <option value="<?php echo $row["phonecode"] ?>"> <?php echo $row["phonecode"] ?>
                                     </option>
                                     <?php
                                      }
                                  } else {
                                      echo "0 results";
                                  }
                                ?>
                                </select>
                              </div>
                        </div>
                        <div class="col-md-6">
                        	<div class="form-group">
                                <input type="text" class="form-control" id="contact_number" placeholder="contact number *" value=""/>
                            </div>
                             <div class="form-group">
                                <input type="email" class="form-control" id="semail" placeholder="email *" value=""/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="sconfirm_password" placeholder="Confirm Password *" value=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary" id="create_account">create account</button>
        </div>
      </div>
    </div>
  </div>
	</section>