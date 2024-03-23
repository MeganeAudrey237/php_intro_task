<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>
    /* Custom styles */
    body {
        background-color: #343a40;
        /* Dark background */
        color: #fff;
        /* White text */
    }

    .task-container {
        margin-top: 50px;
    }

    .task {
        border: 1px solid #555;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
        background-color: #444;
        /* Darker background */
    }

    .task-details {
        flex: 1;
    }

    .task-title {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .progress {
        width: 100px;
        height: 20px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .status {
        width: 100px;
        text-align: center;
        padding: 5px;
        border-radius: 5px;
    }

    .status-created {
        background-color: #ffc107;
        /* Yellow */
    }

    .status-in-progress {
        background-color: #17a2b8;
        /* Blue */
    }

    .status-done {
        background-color: #28a745;
        /* Green */
    }

    .tag {
        background-color: #6c757d;
        /* Dark grey */
        color: #fff;
        /* White text */
        padding: 3px 8px;
        border-radius: 3px;
        margin-right: 5px;
    }

    .action-icons {
        display: flex;
        align-items: center;
    }

    .action-icons i {
        margin-right: 10px;
        cursor: pointer;
    }

    .action-icons i:hover {
        color: #007bff;
    }
</style>
<div class="task-container">
<?php
include "db.php";
$sql = "SELECT * FROM tasks";
$result = $conn -> query($sql);
while($row = $result -> fetch_assoc()){
    $id = $row['id'];
    $title = $row['title'];
    $description = $row['description'];
    $tag = $row['tag'];
    $status = $row['status'];
?>
    <div class='task'>  
        <div class='task-details'>
            <div class='task-title'>Issue <?php echo "$id:$title" ?></div>
            <div class='status status-in-progress'> <?php echo $status; ?></div>
        </div>
        <div>
            <span class='tag'><?php echo $tag ?></span>
            <span class='tag'> <?php echo $tag?></span>
        </div>
        <div class='progress'>
            <div class='progress-bar bg-danger' role='progressbar' style='width: 50%;' aria-valuenow='50'
                aria-valuemin='0' aria-valuemax='100'>50% Complete</div>
        </div>
        <div class='action-icons'>
            <i class='fas fa-edit icon-action' data-toggle='modal' data-target='#editIssueModal'>  </i>
            <button type="button"><i class='fas fa-trash-alt icon-action' data-toggle='modal' data-target='#deleteIssueModal-<?php echo $id ?>' >  </i> </button>
        </div>
    </div>
   <?php 
    include "deletemodal.php";
include "edit.php";
}




?>




   
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

