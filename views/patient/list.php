<h1>Patients List</h1>
<a href="index.php?action=create" class="btn btn-primary">Add New Patient</a>
<table class="table">
    <thead>
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
            <td><?php echo $patient['doctor']; ?></td>
            <td><?php echo $patient['department']; ?></td>
            <td>
                <a href="index.php?action=edit&id=<?php echo $patient['id']; ?>" class="btn btn-warning">Edit</a>
                <a href="index.php?action=delete&id=<?php echo $patient['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
