<h1>Add New Patient</h1>
<form action="index.php?action=store" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="mob">MOB</label>
        <input type="text" class="form-control" id="mob" name="mob" required>
    </div>
    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <div class="form-group">
        <label for="doctor">Doctor</label>
        <input type="text" class="form-control" id="doctor" name="doctor" required>
    </div>
    <div class="form-group">
        <label for="department">Department</label>
        <input type="text" class="form-control" id="department" name="department" required>
    </div>
    <button type="submit" class="btn btn-success">Add Patient</button>
</form>
