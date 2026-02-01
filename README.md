# 🏥 Healthcare Management System

A **PHP‑based Healthcare Management System** designed to manage patient registration, login, and patient details. This project demonstrates a simple, functional healthcare solution built with **plain PHP** and connects basic user authentication, form handling, PDF generation, and database interaction.

---

## 📌 Features

- 🧑‍⚕️ **Patient Registration & Login**  
  Patients can register and log into the system using secure form submission.

- 📋 **Patient Details Management**  
  View and manage patient information and details stored in the database.

- 📄 **PDF Generation for Reports**  
  Generate patient reports as PDFs using TCPDF library.

- 🔐 **Session‑Based Authentication**  
  Secure access to protected pages using PHP sessions.

- 🗃️ **MySQL Database**  
  Stores user, patient, and authentication data.

---

## 📁 Project Structure

healthcare/
├── assets/css/ # CSS stylesheets
├── config/ # Database & app configuration
├── database/ # Database related files
├── dberror/ # Error handling
├── fonts/ # Font assets
├── images/ # Image assets
├── include/ # Included PHP header/footer files
├── includes/ # Helper functions and includes
├── patientDetails/ # Patient detail views
├── tcpdf/ # PDF generation library
├── onclick.html # Example HTML interface
├── patientRegistration.php # Patient signup form
├── userRegistration.php # User signup form
├── userLogin.php # Login handler
├── logout.php # Logout script
├── viewDetails.php # Patient detail view
├── generatepdf.php # PDF generation script
├── README.md # Project description
└── code.php # Main code and routing


---

## 🛠️ Technologies Used

- **PHP** – Server‑side scripting for dynamic pages  
- **TCPDF** – PHP library to generate PDF files  
- **MySQL** – Database to store patient and user details  
- **HTML/CSS** – Frontend layout and styling  
- **Sessions** – Login session management

---

## 🚀 How It Works

### 1. Patient Registration  
Users fill out a registration form (`patientRegistration.php`) with personal details.

### 2. User Login  
Registered users login through `userLogin.php`, which verifies credentials against the database.

### 3. View & Manage Details  
Once logged in, users can view details in `viewDetails.php`.

### 4. Generate PDF Report  
Patient or report information can be exported to PDF using `generatepdf.php` via the **TCPDF** library.

---

## 📝 Setup & Installation

1. **Clone the repository**

```bash
git clone https://github.com/Bittu169/healthcare.git
cd healthcare
