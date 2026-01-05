Vulnerable Web Application – Penetration Testing Lab

Project Overview
This project is a deliberately vulnerable full stack web application developed for internal academic assessment.  
The objective is to help students understand real-world web security issues by implementing common vulnerabilities and demonstrating practical attacks using penetration testing tools.

The application is intentionally insecure and is meant only for academic and learning purposes.

Objectives
- Design and implement a full stack web application
- Intentionally introduce web security vulnerabilities
- Demonstrate real-world attacks on localhost
- Analyze the impact of insecure coding practices

Technology Stack
- Operating System: Kali Linux
- Web Server: Apache
- Backend Language: PHP
- Database: MariaDB
- Frontend: HTML / Basic CSS

Vulnerabilities Implemented (OWASP Top 10)
The application intentionally includes the following vulnerabilities:
- SQL Injection
- Broken Authentication
- Cross-Site Scripting (XSS)
- Command Injection

At least one OWASP Top 10 vulnerability is required; this project demonstrates multiple vulnerabilities for learning purposes.

Tools Used
- Nmap
- Nikto
- Dirb
- Burp Suite
- Hydra
- SQLmap
- XSSer

Localhost Execution
This application runs entirely on localhost and does not rely on any cloud services.

Example URL:
http://127.0.0.1/vulnlab/

All attacks are demonstrated live during evaluation using Kali Linux tools.

Setup Instructions
1. Start Apache and MariaDB services
   sudo systemctl start apache2
   sudo systemctl start mariadb

2. Copy the project folder to:
   /var/www/html/

3. Import the database:
   mysql -u root -p < application/database/vulnlab.sql

4. Open the browser and access:
   http://127.0.0.1/vulnlab/

Project Structure
vulnlab-web-security/
├── application/
│   ├── login.php
│   ├── search.php
│   ├── cmd.php
│   └── database/
│       └── vulnlab.sql
├── screenshots/
├── README.md
└── REPORT.md

Team Information
This is a group project developed collaboratively.  
All team members contributed equally to coding, testing, documentation, and demonstration.

Disclaimer
This project is created strictly for educational purposes.  
Do not deploy this application in a production environment.
