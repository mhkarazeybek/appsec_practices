# Contributing Guide

This guide is prepared for those who want to contribute to the AppSec Labs project.

## 📝 Naming Conventions

### Directory Structure
```
.
├── labs/                    # Vulnerability labs
│   └── [category]/[number]_[technology]_[vulnerability]/
└── ctfs/                    # CTF challenges
    └── [category]/[number]_[technology]_[challenge]/
```

1. **Category Names:**
   - Use lowercase letters
   - Use underscores for spaces
   - Examples:
     - `injection`
     - `authentication`
     - `file_upload`
     - `xxe`
     - `ssrf`

2. **Lab Names:**
   - Format: `[number]_[technology]_[vulnerability]`
   - Number format: 3 digits with leading zeros (001, 002, etc.)
   - Use lowercase letters
   - Use underscores for spaces
   - Examples:
     - `001_php_sql`
     - `002_java_deserialization`
     - `003_node_xxe`
     - `004_python_ssrf`

3. **CTF Challenge Names:**
   - Format: `[number]_[technology]_[challenge]`
   - Number format: 3 digits with leading zeros (001, 002, etc.)
   - Use lowercase letters
   - Use underscores for spaces
   - Examples:
     - `001_php_weak_hash`
     - `002_java_xxe`
     - `003_python_ssrf`
     - `004_node_file_upload`

4. **File Names:**
   - Use descriptive names
   - Use lowercase letters
   - Use underscores for spaces
   - Examples:
     - `index.php`
     - `config.json`
     - `docker-compose.yml`
     - `init.sql`

5. **Docker Related:**
   - Container names: `[number]_[lab-name]-[service]`
   - Volume names: `[number]_[lab-name]-[data-type]`
   - Network names: `[number]_[lab-name]-network`
   - Examples:
     - `001_sql_php-web`
     - `001_sql_php-db`
     - `001_sql_php-data`
     - `001_sql_php-network`

6. **Code Variables:**
   - Use camelCase for variables
   - Use UPPER_CASE for constants
   - Use descriptive names
   - Examples:
     ```php
     $dbConnection
     $userInput
     $queryResult
     DB_HOST
     API_KEY
     ```

7. **Documentation:**
   - README.md files should be in the root of each lab/challenge
   - Use clear, descriptive titles
   - Include emojis for better readability
   - Include lab/challenge number in title
   - Examples:
     ```markdown
     # Lab 001: SQL Injection
     # CTF 001: Weak Hash Challenge
     ```

8. **Git Branches:**
   - Format: `[type]/[category]/[number]_[name]`
   - Examples:
     - `lab/injection/001_sql_php`
     - `ctf/web/001_weak_hash`
     - `lab/authentication/002_jwt_bypass`

9. **Commit Messages:**
   - Format: `[Type] [Category] [Number] Short description`
   - Use present tense
   - Be specific and descriptive
   - Examples:
     ```
     [LAB] [SQL] [001] Add basic SQL injection lab
     [CTF] [WEB] [001] Add weak hash challenge
     [LAB] [XSS] [002] Fix input validation in login form
     ```

## 📝 Lab Creation Steps

1. Choose appropriate category and name:
```
labs/[category]/[number]_[technology]_[vulnerability]
Example: labs/injection/001_php_sql
```

2. Create the required folder structure:
```
[number]_[lab_name]/
├── vuln/
│   ├── src/
│   ├── Dockerfile
│   └── docker-compose.yml
├── fixed/
│   ├── src/
│   ├── Dockerfile
│   └── docker-compose.yml
├── exploit/
└── README.md
```

3. Prepare README.md according to the following template:
```markdown
# Lab [Number]: [Vulnerability Name]

## 📝 Description
[Detailed description of the vulnerability]

## 🎯 Impact
[Potential impacts of the vulnerability]

## 💡 Setup
[Docker setup and running instructions]

## 🔧 Exploitation
[Explanation of how to exploit the vulnerability and example codes]

## 🛡️ Fix
[Explanation of how the vulnerability is fixed]

## 📚 Resources
[Related resources and references]
```

## 📝 CTF Challenge Creation Steps

1. Choose appropriate category and name:
```
ctfs/[category]/[number]_[technology]_[challenge]
Example: ctfs/web/001_php_weak_hash
```

2. Create the required folder structure:
```
[number]_[challenge_name]/
├── src/
├── Dockerfile
├── docker-compose.yml
└── README.md
```

3. Prepare README.md according to the following template:
```markdown
# CTF [Number]: [Challenge Name]

## 📝 Description
[Detailed description of the challenge]

## 🎯 Challenge
[Clear description of what needs to be solved]

## 💡 Setup
[Docker setup and running instructions]

## 🔧 Hints
[Optional hints to help solve the challenge]

## 🏆 Flag
[Flag format and example]

## 📚 Resources
[Related resources and references]
```

## 🐳 Docker Requirements

1. Each lab/challenge must run on Docker
2. `docker-compose.yml` file must include all requirements
3. Dockerfiles must be optimized
4. Containers must run in isolation
5. Ports and volumes must be properly configured

## 💻 Code Requirements

1. Code quality:
   - Readable and organized code
   - Appropriate comments
   - Error handling
   - Security checks

2. Code standards:
   - No sensitive information in code
   - Clear vulnerability markers
   - Safe default configurations

## 📋 Pull Request Checklist

- [ ] Lab/challenge folder structure is correct
- [ ] README.md is complete and detailed
- [ ] Docker configuration works
- [ ] Code works as expected
- [ ] Exploit examples work (for labs)
- [ ] Code is clean and organized
- [ ] Comments are sufficient

## 🔍 Review Process

1. When Pull Request is opened:
   - Code quality is checked
   - Docker configuration is tested
   - Documentation is reviewed

2. If fixes are needed:
   - Comments are added
   - Changes are requested
   - New commit is awaited

3. When approved:
   - PR is merged
   - Lab/challenge is added to the system

## 🤝 Communication

- Open Issues for questions
- Create Pull Requests for suggestions
- Use Discussions for debates 