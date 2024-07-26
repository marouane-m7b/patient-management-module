CREATE DATABASE IF NOT EXISTS patient_management;

USE patient_management;

CREATE TABLE IF NOT EXISTS patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    mob VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    doctor_id INT NOT NULL,
    department VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    specialty VARCHAR(255) NOT NULL,
    photo VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    doctor_id INT NOT NULL,
    appointment_date DATE NOT NULL,
    status VARCHAR(255) NOT NULL
);

-- Insert sample doctors
INSERT INTO doctors (name, specialty, photo) VALUES
('Dr. Jennifer Roberts', 'Pediatrics', 'doctor1.jpg'),
('Dr. Michael Sullivan', 'Cardiology', 'doctor2.jpg'),
('Dr. Emily Harris', 'Gynecology', 'doctor3.jpg'),
('Dr. Jonathan Davis', 'Orthopedics', 'doctor4.jpg'),
('Dr. Sarah Mitchell', 'Dermatology', 'doctor5.jpg'),
('Dr. Andrew Thompson', 'Neurology', 'doctor6.jpg'),
('Dr. Jessica Anderson', 'Internal Medicine', 'doctor7.jpg'),
('Dr. David Wilson', 'Ophthalmology', 'doctor8.jpg'),
('Dr. Samantha Carter', 'Psychiatry', 'doctor9.jpg');

-- Insert sample patients and appointments
INSERT INTO patients (name, mob, date, doctor_id, department) VALUES
('Andrew Richardson', '555-123-4567', '2023-09-06', 1, 'Pediatrics'),
('Benjamin Thompson', '555-987-6543', '2023-08-06', 2, 'Cardiology'),
('Charlotte Ramirez', '555-246-8135', '2023-08-06', 3, 'Gynecology'),
('James Murphy', '555-369-2580', '2023-10-06', 4, 'Orthopedics'),
('Amelia Griffin', '555-741-8520', '2023-10-06', 5, 'Dermatology'),
('Evelyn Bennett', '555-654-3210', '2023-09-06', 6, 'Neurology'),
('Andrew Richardson', '555-888-9999', '2023-11-06', 7, 'Internal Medicine'),
('Mia Butler', '555-333-7777', '2023-09-06', 8, 'Ophthalmology');

-- Insert sample appointments
INSERT INTO appointments (patient_id, doctor_id, appointment_date, status) VALUES
(1, 1, '2023-09-06', 'Completed'),
(2, 2, '2023-08-06', 'Completed'),
(3, 3, '2023-08-06', 'Completed'),
(4, 4, '2023-10-06', 'Completed'),
(5, 5, '2023-10-06', 'Completed'),
(6, 6, '2023-09-06', 'Completed'),
(7, 7, '2023-11-06', 'Cancelled'),
(8, 8, '2023-09-06', 'Completed');
