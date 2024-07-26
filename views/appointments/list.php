<div class="container mt-5">
    <h1 class="mb-4">Appointments List</h1>
    <input type="text" id="appointmentSearch" class="form-control w-25 mb-3" placeholder="Search appointments...">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Patient Name</th>
                <th>Doctor Name</th>
                <th>Appointment Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody id="appointmentTable">
            <?php foreach ($appointments as $appointment): ?>
            <tr>
                <td><?php echo $appointment['patient_name']; ?></td>
                <td><?php echo $appointment['doctor_name']; ?></td>
                <td><?php echo $appointment['appointment_date']; ?></td>
                <td><?php echo $appointment['status']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Appointment Search
        document.getElementById("appointmentSearch").addEventListener("keyup", function() {
            var filter = this.value.toUpperCase();
            var rows = document.getElementById("appointmentTable").getElementsByTagName("tr");

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
    });
</script>
