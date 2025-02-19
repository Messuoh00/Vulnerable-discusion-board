# Vulnerable Discussion Board


The **Vulnerable Discussion Board** is a deliberately insecure web application designed for educational purposes. It serves as a platform to learn about and practice identifying common web application vulnerabilities, such as SQL injection, cross-site scripting (XSS), cross-site request forgery (CSRF), and more. This project is intended for security researchers, developers, and students to understand how vulnerabilities arise and how to mitigate them.

---

## Features
- User registration and login functionality.
- Posting and replying to discussion threads.
- Admin panel for managing users and posts.
- Deliberately implemented vulnerabilities for educational purposes.

---

## Purpose
This project is designed to:

Provide a safe environment for learning about web application security.

Demonstrate common vulnerabilities and their impact.

Help developers understand how to secure web applications effectively.

Serve as a learning resource for CodeIgniter, including its MVC architecture, routing, and database integration.

---

## Installation
To set up the Vulnerable Discussion Board locally, follow these steps:

### Prerequisites
- PHP (version 7.0 or higher)
- MySQL or MariaDB
- A web server (e.g., Apache, Nginx)

### Steps
1. **Clone the repository**:
   ```bash
   git clone https://github.com/Messuoh00/Vulnerable-discusion-board.git
   cd Vulnerable-discusion-board
   ```

2. **Set up the database**:
   - Import the provided SQL file (`database.sql`) into your MySQL/MariaDB server.
   - Update the database connection details in `config.php` with your credentials.

3. **Configure the web server**:
   - Point your web server to the project's root directory.
   - Ensure the server has write permissions for any directories that require it (e.g., uploads).

4. **Access the application**:
   - Open your browser and navigate to the application's URL (e.g., `http://localhost/Vulnerable-discusion-board`).

---

## Usage
- Register a new user account or use the default admin credentials (if provided).
- Explore the discussion board features and attempt to identify vulnerabilities.
- Use the application responsibly and only in a controlled environment.

---

## Vulnerabilities
This project intentionally includes the following vulnerabilities for educational purposes:
- **SQL Injection**: Poorly sanitized user inputs in login and search functionalities.
- **Cross-Site Scripting (XSS)**: Unsanitized user inputs in posts and comments.
- **Cross-Site Request Forgery (CSRF)**: Lack of anti-CSRF tokens in forms.
- **Broken Authentication**: Weak password policies and session management.
- **File Upload Vulnerabilities**: Unrestricted file uploads leading to potential remote code execution.

**Note**: These vulnerabilities are intentionally included for learning purposes. Do not deploy this application in a production environment.

---

## Disclaimer
This project is intended for educational purposes only. The author is not responsible for any misuse of this software. Use it responsibly and only in environments where you have permission to test for vulnerabilities.
