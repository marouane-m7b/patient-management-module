<div class="container mt-5">
    <h1 class="mb-4">Add New Patient</h1>
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
            <label for="doctor_id">Doctor</label>
            <select class="form-control" id="doctor_id" name="doctor_id" required>
                <?php foreach ($doctors as $doctor): ?>
                <option value="<?php echo $doctor['id']; ?>"><?php echo $doctor['name']; ?> - <?php echo $doctor['specialty']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" class="form-control" id="department" name="department" required>
        </div>
        <button type="submit" class="btn btn-success">Add Patient</button>
    </form>
</div>
