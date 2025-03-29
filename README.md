# AppSec Practices - Vulnerable Application Security Training Platform

A Docker-based security training platform that grows with community contributions.

## 🎯 Purpose

- Learn security vulnerabilities through practical examples
- Share modern security issues and their solutions
- Create a community-driven, sustainable training platform

## 📁 Project Structure

```
.
├── labs/                    # Vulnerability labs
│   └── [category]/[lab]/   # Example: injection/sql_php
│       ├── vuln/           # Vulnerable version
│       │   ├── src/        # Source code
│       │   └── Dockerfile  # Docker configuration
│       ├── fixed/          # Fixed version
│       │   ├── src/        # Source code
│       │   └── Dockerfile  # Docker configuration
│       ├── exploit/        # Exploit examples
│       └── README.md       # Lab documentation
└── docs/                   # General documentation
```

## 🚀 Getting Started

### Prerequisites

1. Install Docker:
   - [Docker Desktop](https://www.docker.com/products/docker-desktop) for Windows/Mac
   - [Docker Engine](https://docs.docker.com/engine/install/) for Linux

2. Install Docker Compose:
   - [Docker Compose](https://docs.docker.com/compose/install/) (usually comes with Docker Desktop)

### Running Labs

1. Clone the repository:
```bash
git clone https://github.com/mhkarazeybek/appsec_practices.git
cd appsec_practices
```

2. Run any lab:
```bash
cd labs/[category]/[lab]/vuln
docker-compose up
```

3. Access the lab:
   - Open your browser and navigate to `http://localhost:8080` (port may vary by lab)
   - Follow the lab's README.md for specific instructions

## 🤝 Contributing

1. Fork this repository
2. Create a new branch (`git checkout -b lab/new-vulnerability`)
3. Create your lab directory and add required files
4. Commit your changes (`git commit -am 'New lab: Added XSS example'`)
5. Push your branch (`git push origin lab/new-vulnerability`)
6. Create a Pull Request

## 📝 Lab Requirements

Each lab directory must include:

1. `README.md`:
   - Vulnerability description
   - Setup instructions
   - Exploit example
   - Fix explanation
   - Technical details
   - References

2. `vuln/` directory:
   - Vulnerable application code
   - Dockerfile
   - docker-compose.yml
   - Required configuration files

3. `fixed/` directory:
   - Fixed application code
   - Dockerfile
   - docker-compose.yml
   - Required configuration files

4. `exploit/` directory:
   - Exploit scripts
   - Usage examples

## 🔒 Security Categories

- Injection (SQL, NoSQL, Command, ...)
- Broken Authentication
- Sensitive Data Exposure
- XML External Entities (XXE)
- Broken Access Control
- Security Misconfiguration
- Cross-Site Scripting (XSS)
- Insecure Deserialization
- Using Components with Known Vulnerabilities
- Insufficient Logging & Monitoring
- Server-Side Request Forgery (SSRF)
- Insecure File Upload
- Race Condition
- and more...

## ⚠️ Legal Disclaimer

This platform is for educational purposes only. Testing these techniques on real systems without permission is prohibited.

## 📚 Resources

- [OWASP Top 10](https://owasp.org/www-project-top-ten/)
- [OWASP Testing Guide](https://owasp.org/www-project-web-security-testing-guide/)
- [PortSwigger Web Security Academy](https://portswigger.net/web-security)
- [HackerOne Hacktivity](https://hackerone.com/hacktivity) 