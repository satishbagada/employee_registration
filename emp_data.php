
<div class="container mt-5 p-3">
    <div class="row">
        <div class="col-md-12">
        <button class="btn btn-primary  btn-lg float-end" data-bs-target="#log" data-bs-toggle="modal">
          add employee</button>         
        <table class="table table-striped table-bordered">
  <thead class="table bg-dark text-light">
    <tr> 
      <th scope="col">eid</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">email</th>
      <th scope="col">state</th>
      <th scope="col">city</th>
      <th scope="col">gander</th>
      <th scope="col">datetime</th>
      <th scope="col">photo</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php 
        foreach($chk as $row){

        
        ?>
    <tr>
       
      <th scope="row"><?php echo $row['eid'];?></th>
      <td><?php echo $row['text_fname'];?></td>
      <td><?php echo $row['text_lname'];?></td>
      <td><?php echo $row['text_email'];?></td>
      <td><?php echo $row['sname'];?></td>
      <td><?php echo $row['cname'];?></td>
      <td><?php echo $row['text_gander'];?></td>
      <td><?php echo $row['rdatetime'];?></td>
      
      <td><img src="<?php echo $row['emp_photo']; ?>" alt="NOT found" style="width:80px;height:70px"></td>
      <td><a href="<?php echo $mainurl;?>emp_table?emp_id=<?php echo $row['eid'];?>">
      <span class="bi bi-trash text-danger"></span></a></td>
      
      
    </tr>
    <?php 
    }
  ?>
    
  </tbody>
</table>
        </div>
    </div>
</div>