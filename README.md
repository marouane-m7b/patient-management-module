# Patient Management Module

## Overview
This project is focused on developing a comprehensive patient management module. The module provides functionality for creating, reading, updating, and deleting patient records, following the design specified in the provided mockup (`assets/images/maquette.png`).

## Technologies and Components
- **PHP 7.4**
- **MySQL**
- **JavaScript**
- **Bootstrap**
- **Smarty Template Engine**: [Smarty GitHub Repository](https://github.com/smarty-php/smarty)
- **AdminLTE Template**: [AdminLTE GitHub Releases](https://github.com/ColorlibHQ/AdminLTE/releases)

## Setup Instructions

1. **Clone the Repository**:
    ```sh
    git clone <repository_url>
    cd patient-management-module
    ```

2. **Install Dependencies**:
    ```sh
    composer install
    ```

3. **Database Setup**:
    - Create a database named `patient_management`.
    - Import the database schema:
        ```sh
        mysql -u root -p patient_management < db.sql
        ```

4. **Configuration**:
    - Rename `config/config.sample.php` to `config/config.php`.
    - Update the database configuration in `config/config.php`.

5. **Run the Application**:
    - Start your local server (e.g., Apache, Nginx).
    - Open the application in your browser: `http://localhost/patient-management-module/public`

## Usage
- Access the application via your browser.
- Utilize the interface to manage patient records effectively.

## Contact
For further information or queries, please contact m.elayadi@mibtech.ma or marouane@m7b.dev.
