<div class="modal fade" id="editAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form method="POST" enctype="multipart/form-data" action="../controllers/LoginController.php" onsubmit="return checkForm(this);">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
               
              <div class="modal-body">
                <center>
                  <img src="../../capstone-admin<?php echo $_SESSION['profile']['Photo']?>" width="100px" style="border-radius: 100px;" />
                  <div style="display:block; margin-top: 10px; font-size: 18px;">
                    <b><?php echo $_SESSION['profile']['FirstName'];?> &nbsp; <?php echo $_SESSION['profile']['LastName'];?></b>
                  </div>
                    <small><?php echo $_SESSION['profile']['Course'];?></small>                  
                </center>
                <div class="" style="margin-top: 20px; margin-left: 50px;">

                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Old Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" required id="inputOldPassword" placeholder="Old Password" style="width: 80%;" name="oldPassword">
                    </div>
                  </div>   
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">New Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" required id="inputNewPassword" placeholder="New Password" style="width: 80%;" name="newPassword">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Confirm Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" required id="inputConfPassword" placeholder="Confirm Password" style="width: 80%;" name="confirmPassword">
                    </div>
                  </div>

                </div>

    
    
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" name="editPass" >Save changes</button>
              </div>
            
            </div>
        </div>
    </form>
</div>  