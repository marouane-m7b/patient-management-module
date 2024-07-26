<div class="container mt-5">
    <h1 class="mb-4">Doctors List</h1>
    <input type="text" id="doctorSearch" class="form-control w-25 mb-3" placeholder="Search doctors...">
    <div class="row" id="doctorTable">
        <?php foreach ($doctors as $doctor): ?>
        <div class="col-md-3 doctor-card">
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Doctor Search
        document.getElementById("doctorSearch").addEventListener("keyup", function() {
            var filter = this.value.toUpperCase();
            var cards = document.getElementById("doctorTable").getElementsByClassName("doctor-card");

            for (var i = 0; i < cards.length; i++) {
                var card = cards[i];
                var name = card.getElementsByTagName("strong")[0].innerHTML.toUpperCase();
                var specialty = card.getElementsByTagName("small")[0].innerHTML.toUpperCase();

                if (name.indexOf(filter) > -1 || specialty.indexOf(filter) > -1) {
                    card.style.display = "";
                } else {
                    card.style.display = "none";
                }
            }
        });
    });
</script>
