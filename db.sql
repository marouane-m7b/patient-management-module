CREATE DATABASE IF NOT EXISTS patient_management;

USE patient_management;

CREATE TABLE IF NOT EXISTS patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    mob VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    doctor VARCHAR(255) NOT NULL,
    department VARCHAR(255) NOT NULL
);
