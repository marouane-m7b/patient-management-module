<?php
namespace Src\Views;

class PatientView {
    public function render($template, $data = []) {
        extract($data);
        include "../views/header.php";
        include "../views/patient/{$template}.php";
        include "../views/footer.php";
    }
}
