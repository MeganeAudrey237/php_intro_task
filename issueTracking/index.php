
<?php
include "db.php";
if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $tag = $_POST['tag'];
    $status = $_POST['status'];
    $sql = "INSERT INTO `tasks` (`title`,`description`,`tag`,`status`) VALUES ('$title','$description','$tag','$status') ";
    $result = $conn->query($sql);
    if($result == TRUE) {
        echo "issue created successfully";
        header ('location: index.php');
      
    } else{
        echo "error:" .$sql . "<br>" . $con->connect_error;
    }
    $conn->close();
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add custom styles here */
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Issue Management System</h1>
        <div class="text-center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createIssueModal">
                Create Issue
            </button>
        </div>
    </div>

    <div class="container">
        <?php include "listIssue.php" ?>
    </div>

    <!-- Create Issue Modal -->
    <div class="modal fade" id="createIssueModal" tabindex="-1" role="dialog" aria-labelledby="createIssueModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createIssueModalLabel">Create Issue</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form to create a new issue -->
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="issueTitle">Title</label>
                            <input type="text" class="form-control" name="title" id="issueTitle" required>
                        </div>
                        <div class="form-group">
                            <label for="issueDescription">Description</label>
                            <textarea class="form-control" id="issueDescription" type="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="issueTag">Tag</label>
                            <input type="text" class="form-control"  name="tag" id="issueTag">
                        </div>
                        <div class="form-group">
                            <label for="issueStatus">Status</label>
                            <select class="form-control" id="issueStatus" type="status" name="status">
                                <option value="created">Created</option>
                                <option value="in-progress">In Progress</option>
                                <option value="done">Done</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                    
                    <button button="submit" type="submit" class="btn btn-secondary" name = "submit" value="submit" data-dismiss="modal">Close</button>
                    <button button="submit" type="submit" class="btn btn-primary" name = "submit" value="submit" >Save Issue</button>
               
            </div>
                    </form>
                </div>
             
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>



