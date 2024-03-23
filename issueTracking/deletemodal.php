
<?php
  include "db.php";
// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
  

// } 



?>
<style>
    p,label{
            color: black !important;
        }
 </style> 

<div class="modal fade" id="deleteIssueModal-<?php echo $id?>" tabindex="-1" role="dialog" aria-labelledby="deleteIssueModalLabel"
aria-hidden="true">
<form action ='' method ='POST' >
  
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteIssueModalLabel" style="color: black">Delete Issue </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="color: black">Are you sure you want to delete this issue ?</p>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal" style="color: black" >Close</button>
                <button type="sunmit" class="btn btn-danger" style="color: black" name = "submit" value = <?php echo "$id" ?>  >Delete Issue</button>
            </div>
   
        </div>
    </div>
    
</form>

</div>


<?php
  include "db.php";
if (isset($_POST['submit'])) {
    $id = $_POST['submit'];
    echo ("$id");
   
    $sql = "DELETE FROM  `tasks` WHERE `id`='$id'";
   $result = $conn->query($sql);
    if ($result == TRUE ) {
        echo "record delete successfully";
        header ('location: index.php');
    } else {
        echo "Error:" .$sql . "<br>" . $conn->error ;
    }

} 



?> 