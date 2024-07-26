<?php
namespace Src\Controllers;

use Src\Models\PatientModel;
use Src\Views\PatientView;

class PatientController {
    private $model;
    private $view;

    public function __construct($dbConfig) {
        $this->model = new PatientModel($dbConfig);
        $this->view = new PatientView();
    }

    public function index() {
        $patients = $this->model->getAllPatients();
        $this->view->render('list', ['patients' => $patients]);
    }

    public function create() {
        $this->view->render('create');
    }

    public function store($data) {
        $this->model->addPatient($data);
        header('Location: index.php');
    }

    public function edit($id) {
        $patient = $this->model->getPatientById($id);
        $this->view->render('edit', ['patient' => $patient]);
    }

    public function update($data) {
        $this->model->updatePatient($data);
        header('Location: index.php');
    }

    public function delete($id) {
        $this->model->deletePatient($id);
        header('Location: index.php');
    }
}
