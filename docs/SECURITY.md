# Security Policy

## Reporting Security Issues

If you discover a security vulnerability in AppSec Labs, please follow these steps:

1. **DO NOT** disclose the issue publicly
2. Send a detailed report to [mhkarazeybek@gmail.com]
3. Include:
   - Description of the vulnerability
   - Steps to reproduce
   - Potential impact
   - Suggested fix (if any)

## Security Guidelines for Labs

### Creating Vulnerable Code

1. **Isolation**
   - All vulnerable code must run in isolated containers
   - No connection to production systems
   - Limited network access

2. **Scope**
   - Vulnerabilities should be clearly defined
   - Impact should be contained
   - No persistent system changes

3. **Documentation**
   - Clear warnings about vulnerability
   - Usage restrictions
   - Safety precautions

### Running Labs

1. **Environment**
   - Use dedicated testing environment
   - Never run on production systems
   - Keep containers updated

2. **Data**
   - Use dummy/test data only
   - No sensitive information
   - Regular cleanup

3. **Network**
   - Isolated network preferred
   - Limited external access
   - Monitored connections

## Best Practices

1. **Container Security**
   - Latest base images
   - Minimal required permissions
   - No sensitive data in images

2. **Code Security**
   - Clear vulnerability markers
   - Documented security controls
   - Safe default configurations

3. **Access Control**
   - Limited user permissions
   - No root by default
   - Proper authentication

## Vulnerability Disclosure

1. **Timeline**
   - Initial response: 24 hours
   - Assessment: 72 hours
   - Fix implementation: case-by-case

2. **Communication**
   - Encrypted communication preferred
   - Clear status updates
   - Coordinated disclosure

3. **Credits**
   - Proper attribution
   - Responsible disclosure rewards
   - Public acknowledgment

## Acceptable Use

This platform is for:
- Educational purposes
- Security research
- Vulnerability awareness
- Testing in safe environments

This platform is NOT for:
- Attacking real systems
- Malicious purposes
- Unauthorized testing
- Illegal activities

## Updates and Maintenance

1. **Regular Updates**
   - Security patches
   - Dependency updates
   - Documentation reviews

2. **Version Control**
   - Tagged releases
   - Change documentation
   - Migration guides

3. **Monitoring**
   - Usage tracking
   - Error logging
   - Security alerts

## Contact

For security concerns:
- Email: [mhkarazeybek@gmail.com]
- PGP Key: [Key ID]
- Response time: 24-48 hours

## Acknowledgments

We thank all security researchers who responsibly disclose vulnerabilities and contribute to the security of this platform. 