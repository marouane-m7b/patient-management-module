<h1>Edit Patient</h1>
<form action="index.php?action=update" method="post">
    <input type="hidden" name="id" value="<?php echo $patient['id']; ?>">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $patient['name']; ?>" required>
    </div>
    <div class="form-group">
        <label for="mob">MOB</label>
        <input type="text" class="form-control" id="mob" name="mob" value="<?php echo $patient['mob']; ?>" required>
    </div>
    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" name="date" value="<?php echo $patient['date']; ?>" required>
    </div>
    <div class="form-group">
        <label for="doctor">Doctor</label>
        <input type="text" class="form-control" id="doctor" name="doctor" value="<?php echo $patient['doctor']; ?>" required>
    </div>
    <div class="form-group">
        <label for="department">Department</label>
        <input type="text" class="form-control" id="department" name="department" value="<?php echo $patient['department']; ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Update Patient</button>
</form>
