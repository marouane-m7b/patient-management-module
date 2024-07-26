<?php
namespace Src\Models;

class PatientModel {
    private $pdo;

    public function __construct($dbConfig) {
        $dsn = 'mysql:host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['dbname'];
        $this->pdo = new \PDO($dsn, $dbConfig['user'], $dbConfig['password']);
    }

    public function getAllPatients() {
        $stmt = $this->pdo->query('SELECT patients.*, doctors.name as doctor_name FROM patients JOIN doctors ON patients.doctor_id = doctors.id');
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addPatient($data) {
        $stmt = $this->pdo->prepare('INSERT INTO patients (name, mob, date, doctor_id, department) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$data['name'], $data['mob'], $data['date'], $data['doctor_id'], $data['department']]);
    }

    public function getPatientById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM patients WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function updatePatient($data) {
        $stmt = $this->pdo->prepare('UPDATE patients SET name = ?, mob = ?, date = ?, doctor_id = ?, department = ? WHERE id = ?');
        $stmt->execute([$data['name'], $data['mob'], $data['date'], $data['doctor_id'], $data['department'], $data['id']]);
    }

    public function deletePatient($id) {
        $stmt = $this->pdo->prepare('DELETE FROM patients WHERE id = ?');
        $stmt->execute([$id]);
    }

    public function getAllDoctors() {
        $stmt = $this->pdo->query('SELECT * FROM doctors');
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getStatistics() {
        $stats = [];

        $stmt = $this->pdo->query('SELECT COUNT(*) as total FROM appointments');
        $stats['total_appointments'] = $stmt->fetch(\PDO::FETCH_ASSOC)['total'];

        $stmt = $this->pdo->query('SELECT COUNT(*) as total FROM patients');
        $stats['total_patients'] = $stmt->fetch(\PDO::FETCH_ASSOC)['total'];

        $stmt = $this->pdo->query('SELECT COUNT(*) as total FROM appointments WHERE status = "Cancelled"');
        $stats['total_cancellations'] = $stmt->fetch(\PDO::FETCH_ASSOC)['total'];

        $stmt = $this->pdo->query('SELECT COUNT(*) / COUNT(DISTINCT doctor_id) as avg_per_doctor FROM appointments');
        $stats['avg_per_doctor'] = $stmt->fetch(\PDO::FETCH_ASSOC)['avg_per_doctor'];

        return $stats;
    }
}
