<?php
namespace Src\Models;

class PatientModel {
    private $pdo;

    public function __construct($dbConfig) {
        // Check if database configuration is provided
        if (!$dbConfig || !isset($dbConfig['host'], $dbConfig['dbname'], $dbConfig['user'], $dbConfig['password'])) {
            throw new \Exception('Invalid database configuration.');
        }
        
        $dsn = 'mysql:host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['dbname'];
        $this->pdo = new \PDO($dsn, $dbConfig['user'], $dbConfig['password']);
    }

    public function getAllPatients() {
        $stmt = $this->pdo->query('SELECT * FROM patients');
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addPatient($data) {
        $stmt = $this->pdo->prepare('INSERT INTO patients (name, mob, date, doctor, department) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$data['name'], $data['mob'], $data['date'], $data['doctor'], $data['department']]);
    }

    public function getPatientById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM patients WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function updatePatient($data) {
        $stmt = $this->pdo->prepare('UPDATE patients SET name = ?, mob = ?, date = ?, doctor = ?, department = ? WHERE id = ?');
        $stmt->execute([$data['name'], $data['mob'], $data['date'], $data['doctor'], $data['department'], $data['id']]);
    }

    public function deletePatient($id) {
        $stmt = $this->pdo->prepare('DELETE FROM patients WHERE id = ?');
        $stmt->execute([$id]);
    }
}
