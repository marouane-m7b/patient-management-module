# Patient Management Module

## Overview
This project involves the creation of a patient management module, adhering to the provided mockup (see `assets/images/maquette.png`). The module includes functionalities for creating, reading, updating, and deleting patient records (CRUD operations).

## Technologies and Components
- PHP 7.4
- MySQL
- JavaScript
- Bootstrap
- Smarty Template Engine: [Smarty GitHub Repository](https://github.com/smarty-php/smarty)
- AdminLTE Template: [AdminLTE GitHub Releases](https://github.com/ColorlibHQ/AdminLTE/releases)

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
- Navigate to the application in your browser.
- Use the provided interface to manage patient records.

## Additional Notes
- Ensure all CRUD operations for patient management are functional.
- Follow the design provided in `assets/images/maquette.png` closely.
- Include any additional documentation or comments in your code to explain the functionality and usage.

## Contact
For any queries or further information, please contact m.elayadi@mibtech.ma.
