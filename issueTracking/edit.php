<?php
include "db.php";
/*if (isset($_POST['submit'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $tag = $_POST['tag'];
    $status = $_POST['status'];
    $sql = "UPDATE tasks SET `title`= '$title',  `description`= '$description',`tag`= '$tag',`status`= '$status' WHERE  `id` = '$id' ";
    $result = $conn->query($sql);
    if ($result == true) {
            echo "record updated successfully.";
            header('Location: listIssue.php');
     }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

}



    $sql = " SELECT * FROM tasks  WHERE id ='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result -> fetch_assoc()){
        $id = $row['id'];
        $title = $row['title'];
        $description = $row['description'];
        $tag = $row['tag'];
        $status = $row['status'];
    }
}

 */   

?> 



<!-- Edit Issue Modal -->
<style>
    p,label{
            color: black !important;
        }
 </style>       
<div class="modal fade" id="editIssueModal-<?php echo $id?>" tabindex="-1" role="dialog" aria-labelledby="editIssueModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editIssueModalLabel" style="color: black">Edit Issue</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to edit an existing issue -->
               
                <form action = '' method = "POST">
                    <div class="form-group">
                        <label for="editIssueTitle" style="color: black !important">Title</label>
                        <input type="text" class="form-control" id="editIssueTitle" value =  required>
                    </div>
                    <div class="form-group">
                        <label for="editIssueDescription" style="color: black">Description</label>
                        <textarea class="form-control" id="editIssueDescription" rows="3" value = ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editIssueTag" style="color: black">Tag</label>
                        <input type="text" class="form-control" id="editIssueTag  >
                    </div>
                    <div class="form-group">
                        <label for="editIssueStatus">Status</label>
                        <select class="form-control" id="editIssueStatus" >
                            <option value="created">Created</option>
                            <option value="in-progress">In Progress</option>
                            <option value="done">Done</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Issue</button>
                </div>
        </form>
            
        </div>
    </div>
</div>



<?php



?>
