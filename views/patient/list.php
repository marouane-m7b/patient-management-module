<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-9">
            <h1 class="mb-4">Patients List</h1>
            <div class="d-flex justify-content-between mb-3">
                <a href="index.php?action=create" class="btn btn-primary">Add New Patient</a>
                <input type="text" class="form-control w-25" placeholder="Search here...">
            </div>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>MOB</th>
                        <th>Date</th>
                        <th>Doctor</th>
                        <th>Department</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($patients as $patient): ?>
                    <tr>
                        <td><?php echo $patient['name']; ?></td>
                        <td><?php echo $patient['mob']; ?></td>
                        <td><?php echo $patient['date']; ?></td>
                        <td><?php echo $patient['doctor_name']; ?></td>
                        <td><?php echo $patient['department']; ?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?php echo $patient['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="index.php?action=delete&id=<?php echo $patient['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <h3>Statistics</h3>
            <div class="row">
                <div class="col-6">
                    <div class="card stat-card">
                        <div class="card-body text-center">
                            <h5>Total Appointments</h5>
                            <p><?php echo $stats['total_appointments']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card stat-card">
                        <div class="card-body text-center">
                            <h5>Total Patients</h5>
                            <p><?php echo $stats['total_patients']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card stat-card">
                        <div class="card-body text-center">
                            <h5>Total Cancellations</h5>
                            <p><?php echo $stats['total_cancellations']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card stat-card">
                        <div class="card-body text-center">
                            <h5>Avg per Doctor</h5>
                            <p><?php echo $stats['avg_per_doctor']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="mt-4">Available Doctors</h3>
            <div class="row">
                <?php foreach ($doctors as $doctor): ?>
                <div class="col-6 doctor-card">
                    <div class="card">
                        <img src="../assets/images/<?php echo $doctor['photo']; ?>" alt="Doctor Photo" class="card-img-top doctor-photo">
                        <div class="card-body text-center">
                            <strong><?php echo $doctor['name']; ?></strong><br>
                            <small><?php echo $doctor['specialty']; ?></small>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
