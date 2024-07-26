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
        $doctors = $this->model->getAllDoctors();
        $stats = $this->model->getStatistics();
        $this->view->render('list', ['patients' => $patients, 'doctors' => $doctors, 'stats' => $stats]);
    }

    public function create() {
        $doctors = $this->model->getAllDoctors();
        $this->view->render('create', ['doctors' => $doctors]);
    }

    public function store($data) {
        $this->model->addPatient($data);
        header('Location: index.php');
    }

    public function edit($id) {
        $patient = $this->model->getPatientById($id);
        $doctors = $this->model->getAllDoctors();
        $this->view->render('edit', ['patient' => $patient, 'doctors' => $doctors]);
    }

    public function update($data) {
        $this->model->updatePatient($data);
        header('Location: index.php');
    }

    public function delete($id) {
        $this->model->deletePatient($id);
        header('Location: index.php');
    }

    public function showDoctors() {
        $doctors = $this->model->getAllDoctors();
        $this->view->render('doctors/list', ['doctors' => $doctors]);
    }

    public function showAppointments() {
        $appointments = $this->model->getAllAppointments();
        $this->view->render('appointments/list', ['appointments' => $appointments]);
    }
}
