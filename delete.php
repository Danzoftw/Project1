<?php
        require_once 'dbconnect.php';

            $id = $_POST['duserId'];

            //print_r($id);

        $sql = "DELETE FROM  `crud` WHERE id = '$id'";
        $results = $conn->query($sql);
        if($results)
        {
           echo 1;
           //echo $id;
        }
        else{
            echo 0;
        }      
    
?>
<div class="db-table">
    <div class="titles-holder d-flex">
      <div class="col-sm-2">
        <h4>Email</h4>
      </div>
      <div class="col-sm-1">
        <h4>Name</h4>
      </div>
      <div class="col-sm-1">
        <h4>Mobile</h4>
      </div>
      <div class="col-sm-4">
        <h4>Address</h4>
      </div>
      <div class="col-sm-2">
      </div>
    </div>

    <?php
      $sql = "SELECT * FROM crud"; 
      $result = $conn-> query($sql);
      while ($row = $result->fetch_assoc()) {
    ?>
        <div  class="update-form">
          <div class="single-row d-flex">
            <div class="col-sm-2">
              <h4><?php echo $row["email"]; ?></h4>
            </div>
            <div class="col-sm-1">
              <h4><?php echo $row["name"]; ?></h4>
            </div>
            <div class="col-sm-1">
              <h4><?php echo $row["mobile"]; ?></h4>
            </div>
            <div class="col-sm-4">
              <h4><?php echo $row["address"]; ?></h4>
            </div>
            <div class="col-sm-1">
              <button type="button" id="<?php echo $row["id"];?>" data-role="update" data-target="#updatemodal" data-toggle="modal" class="btn btn-info btn-lg up-btn" data-id="<?php echo $row["id"];?>" >UPDATE</button>
            </div>  
            <div class="col-sm-1">
              <button type="button" id="<?php echo $row["id"];?>" data-role="delete" data-target="#deletemodal" data-toggle="modal" class="btn btn-info btn-lg del-btn" data-id="<?php echo $row["id"];?>" >DELETE</button>
            </div>       
          </div>
        </div>

    <?php
      }
    ?> 
  </div>