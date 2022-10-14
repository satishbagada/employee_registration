<div class="modal fade" id='log' data-bs-backdrop="static">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="text-center txt-danger mx-auto">employee data</h4>
                <button class="btn btn-danger btn-sm" data-bs-dismiss="modal">
                    <span>&times;</span></button>
            </div>
            <div class="modal-body">
            <div class="container">
                <form method="post" enctype="multipart/form-data">

                <div class="row">
                

                 
                <div class="col-md-6 form-group mb-3">
                <input type="text" name="txt_fname" placeholder="enter firstname *" class="form-control" required>
                </div>

                <div class="col-md-6 form-group mb-3">
                <input type="text" name="txt_lname" placeholder="enter lastname *" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md">

                <div class="form-group mb-3">
                <input type="email" name="txt_email" placeholder="enter email *" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                <input type="password" name="txt_pass" placeholder="enter password *" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                <input type="password" name="txt_cpass" placeholder="enter password *" class="form-control" required>
                </div>

                <div class="d-flex mx-5">
                <div class="form-check px-5">
                <input class="form-check-input" type="radio" name="gander" value="male">
                <label class="form-check-label">MALE</label>
                </div>
                <div class="form-check px-5">
                <input class="form-check-input" type="radio" name="gander" value="female">
                <label class="form-check-label">FEMALE</label>
                </div>
                <div class="form-check px-5">
                <input class="form-check-input" type="radio" name="gander" value="other">
                <label class="form-check-label">OTHER</label>
                </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <select name="state" class="form-control">

                            <option value="">-select state-</option>
                            <?php 
                            foreach($st as $row){
                                echo "<option value='{$row["sid"]}'>{$row['sname']}</option>";
                            }
                            ?>
                        </select>
                    </div>

                        <div class="col-md-6 form-group">
                        <select name="city" class="form-control">
                            <option value="">-select city-</option>
                            <?php 
                            foreach($ct as $row1){
                                ?>
                                <option value="<?php echo $row1['ctid'];?>">
                            <?php echo $row1['cname'];?>
                            </option>

                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md mt-3">
                     <input type="file" name="img" class="form-control" required>   
                    </div>
                    </div>
                    <input type="submit" value="show data" name="reg" class="btn btn-success w-50 mt-3 mx-auto">
                </div>

            </div>

                </form>
            </div>
            <!-- container  -->
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-bs-dismiss="modal">
                    close
                </button>
                <!-- <button class="btn btn-success">
                    Show Data
                </button> -->
            </div>
        </div> <!-- content -->
        </div>
        </div>
    

