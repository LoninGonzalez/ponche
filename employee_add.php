
<?php
include_once "header.php";
include_once "nav.php";
?>
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Add employee</h1>
    </div>
    <div class="col-12">
        <form action="employee_save.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" placeholder="Name" type="text" id="name" class="form-control" required>
                <label for="name">lastname</label>
                <input name="lastname" placeholder="lastname" type="text" id="lastname" class="form-control" required>
                <label for="position">Position</label>
                <input name="position" placeholder="position" type="text" id="position" class="form-control" required>
                <label for="schedule">Schedule</label>
                <input name="schedule" placeholder="schedule" type="text" id="schedule" class="form-control" required>
                
            </div>
            <div class="form-group">
                <button class="btn btn-success">
                    Save <i class="fa fa-check"></i>
                </button>
            </div>
        </form>
    </div>
</div>
<?php
include_once "footer.php";
