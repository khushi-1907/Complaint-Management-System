# 🛠️ Complaint Management System (CMS)
A web-based complaint management portal for students to submit complaints, and for incharges/principal to handle and resolve them. Built using **PHP**, **MySQL**, **Bootstrap**, and **Vanilla JS**.

## 🚀 Features
### 👨‍🎓 Student Panel
- Register & Login
- File a complaint by category
- View complaint status and history
- Edit/Delete complaints before they're taken up

### 👨‍💼 Admin Panel (Incharges/Principal)
- Secure login per complaint category
- View complaints relevant to their category
- Change status: **Pending → In Progress → Resolved**
- Manage complaint records (Edit/Delete)

## 🗂️ Admin Users (Default Logins)

| ID | Name  | Role     | Category                          | Email                 | Password     |
|----|-------|----------|-----------------------------------|------------------------|--------------|
| 1  | Abc   | incharge | Disciplinary Matters              | discipline@gmail.com   | discipline   |
| 2  | Xyz   | incharge | Sexual Harassment or Misconduct   | misconduct@gmail.com   | misconduct   |
| 3  | Def   | incharge | Teaching Facilities               | teaching@gmail.com     | teaching     |
| 4  | Gih   | incharge | Hostel Related                    | hostel@gmail.com       | hostel       |
| 5  | Dgh   | incharge | Others                            | other@gmail.com        | other        |
| 6  | Asd   | principal| All (Full Access)                 | principal@gmail.com    | principal    |

✅ You can log in as any of these incharges based on category responsibilities.

## 💾 Installation Guide

### 📦 Requirements
- PHP 7.x or higher
- MySQL
- Web Server (XAMPP/WAMP/LAMP recommended)

### 🔧 Setup Instructions

1. **Clone the Repo:**
git clone https://github.com/khushi-1907/Complaint-Management-System.git
Place in Server Directory:
Move to htdocs (XAMPP) or www (WAMP):
mv Complaint-Management-System /path/to/htdocs
Create Database:
Open phpMyAdmin
Create a new database: mycomplaints
Import the SQL file if provided (or recreate tables based on code structure)

Database Configuration:
Edit config.php:
<?php
$conn = mysqli_connect("localhost", "root", "", "mycomplaints");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

Run the Project:
http://localhost/Complaint-Management-System/
🛠️ Modules Overview

👨‍🎓 Student Dashboard:
Register/Login
Add Complaint
Track Complaint Status

👨‍💼 Incharge/Principal Dashboard:
View complaints by category
Update complaint status
Admin actions: Edit/Delete

🧪 Future Improvements
Email/SMS notifications
Admin-level analytics dashboard
File upload support for complaints
Chat integration between student and admin

🤝 Contributing
Want to make this project better? Fork the repo and raise a pull request!

📃 License
This project is licensed under the MIT License.

Screenshots
<img width="1920" height="996" alt="image" src="https://github.com/user-attachments/assets/78e9b85e-14e5-4723-9d19-7bc6ebefed1a" />
<img width="1917" height="1001" alt="image" src="https://github.com/user-attachments/assets/92a4f0cf-2153-4f65-902c-fb73b15a01d2" />
<img width="1919" height="996" alt="image" src="https://github.com/user-attachments/assets/365fcea3-303b-4792-ae02-fcaa9c555f3e" />
