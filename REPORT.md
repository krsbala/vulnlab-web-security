# Mini Project – Web Penetration Testing

## 1. Objective

The objective of this project is to identify, exploit, and document common web application vulnerabilities using industry-standard penetration testing tools in a controlled local environment.

---

## 2. Environment Setup

- **Operating System:** Kali Linux
- **Web Server:** Apache
- **Database:** MariaDB
- **Application Language:** PHP
- **Target Application:** Custom-built vulnerable web application (local host)

---

## 3. Tools and Techniques Used

### Footprinting & Reconnaissance
- Nmap – Service and port discovery
- Nikto – Web server vulnerability scanning
- Dirb – Directory and endpoint enumeration

### Authentication Attacks
- Burp Suite – Intercepting and brute-forcing login requests
- Hydra – Automated credential brute-force attack

### Injection Attacks
- Manual SQL Injection – Authentication bypass using crafted SQL payloads
- SQLmap – Automated detection and exploitation of SQL injection
- XSSer – Detection of reflected Cross-Site Scripting vulnerabilities

### Command Injection
- Manual command injection testing via vulnerable input parameters

---

## 4. Attacks Performed

- Identified exposed services and web server misconfigurations
- Enumerated hidden directories and application endpoints
- Performed login brute-force attacks using Burp Suite and Hydra
- Successfully bypassed authentication using manual SQL injection
- Extracted database information using SQLmap
- Detected reflected XSS vulnerability using XSSer
- Executed system-level commands through command injection flaws

Screenshots for each attack are included in the `screenshots/` directory as evidence.

---

## 5. Results and Observations

The application was found to be vulnerable due to:
- Lack of input validation
- Insecure authentication logic
- Absence of prepared statements
- No output encoding or sanitization
- Missing security headers

These weaknesses allowed successful exploitation using both manual techniques and automated tools.

---

## 6. Conclusion

This project demonstrates how insecure coding practices can lead to critical web application vulnerabilities.  
It highlights the importance of secure authentication mechanisms, proper input validation, and defense-in-depth strategies in modern web applications.

The lab provided practical exposure to real-world penetration testing workflows and tools.
