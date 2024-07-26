<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-9">
            <h1 class="mb-4">Patients List</h1>
            <div class="d-flex justify-content-between mb-3">
                <button class="btn btn-primary" data-toggle="modal" data-target="#addPatientModal">Add New Patient</button>
                <input type="text" id="patientSearch" class="form-control w-25" placeholder="Search here...">
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
                <tbody id="patientTable">
                    <?php foreach ($patients as $patient): ?>
                    <tr>
                        <td><?php echo $patient['name']; ?></td>
                        <td><?php echo $patient['mob']; ?></td>
                        <td><?php echo $patient['date']; ?></td>
                        <td><?php echo $patient['doctor_name']; ?></td>
                        <td><?php echo $patient['department']; ?></td>
                        <td>
                            <button class="btn btn-warning edit-patient" data-id="<?php echo $patient['id']; ?>" data-toggle="modal" data-target="#editPatientModal">Edit</button>
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

<!-- Add Patient Modal -->
<div class="modal fade" id="addPatientModal" tabindex="-1" role="dialog" aria-labelledby="addPatientModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="index.php?action=store" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPatientModalLabel">Add New Patient</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add Patient</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Patient Modal -->
<div class="modal fade" id="editPatientModal" tabindex="-1" role="dialog" aria-labelledby="editPatientModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="index.php?action=update" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPatientModalLabel">Edit Patient</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit_patient_id">
                    <div class="form-group">
                        <label for="edit_name">Name</label>
                        <input type="text" class="form-control" id="edit_name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_mob">MOB</label>
                        <input type="text" class="form-control" id="edit_mob" name="mob" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_date">Date</label>
                        <input type="date" class="form-control" id="edit_date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_doctor_id">Doctor</label>
                        <select class="form-control" id="edit_doctor_id" name="doctor_id" required>
                            <?php foreach ($doctors as $doctor): ?>
                            <option value="<?php echo $doctor['id']; ?>"><?php echo $doctor['name']; ?> - <?php echo $doctor['specialty']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_department">Department</label>
                        <input type="text" class="form-control" id="edit_department" name="department" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Update Patient</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Patient Search
        document.getElementById("patientSearch").addEventListener("keyup", function() {
            var filter = this.value.toUpperCase();
            var rows = document.getElementById("patientTable").getElementsByTagName("tr");

            for (var i = 0; i < rows.length; i++) {
                var cells = rows[i].getElementsByTagName("td");
                var matched = false;
                for (var j = 0; j < cells.length; j++) {
                    if (cells[j]) {
                        if (cells[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                            matched = true;
                            break;
                        }
                    }
                }
                if (matched) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        });

        // Edit Patient Modal
        document.querySelectorAll(".edit-patient").forEach(function(button) {
            button.addEventListener("click", function() {
                var id = this.getAttribute("data-id");
                var row = this.closest("tr");
                var name = row.cells[0].innerText;
                var mob = row.cells[1].innerText;
                var date = row.cells[2].innerText;
                var doctor_id = row.cells[3].getAttribute("data-doctor-id");
                var department = row.cells[4].innerText;

                document.getElementById("edit_patient_id").value = id;
                document.getElementById("edit_name").value = name;
                document.getElementById("edit_mob").value = mob;
                document.getElementById("edit_date").value = date;
                document.getElementById("edit_doctor_id").value = doctor_id;
                document.getElementById("edit_department").value = department;
            });
        });
    });
</script>
