# Security Testing Report — WebApp (DVWA)
**Target:** DVWA (lab) — http://192.168.56.102/DVWA/
**Author:** Mitraj (Candy)
**Date:** YYYY-MM-DD

## Scope
Tested OWASP Top 10 examples in DVWA: SQL Injection, XSS (stored & reflected), CSRF, File Inclusion (LFI/RFI). All activity performed in an isolated lab environment.

## Executive Summary
- Critical findings: SQL Injection (data extraction)
- High: Stored XSS (persistence)
- Medium: CSRF (change password)
- Informational: LFI exposures (sensitive file disclosure)

## Findings (examples)
### 1. SQL Injection (Auth Bypass & data extraction)
- Location: /DVWA/vulnerabilities/sqli/
- Test payload: `' OR '1'='1' --`
- Impact: Retrieved usernames and password hashes from DB
- Evidence: `report/screenshots/sql_injection.png`
- Recommendation: Use prepared statements (see `mitigations/prepared_statement.php`)

### 2. Stored XSS
- Location: /DVWA/vulnerabilities/xss_s/
- Payload: `<script>alert('XSS Stored')</script>`
- Impact: Stored script executed for any visitor — persistent XSS.
- Evidence: `report/screenshots/xss_stored.png`
- Recommendation: Apply output encoding (`htmlspecialchars`) and CSP headers.

### 3. CSRF - Change password
- Location: /DVWA/vulnerabilities/csrf/
- PoC: `attack-scenarios/csrf_attack.html`
- Impact: Attacker can change an authenticated victim's password.
- Evidence: `report/screenshots/csrf_change.png`
- Recommendation: Implement CSRF tokens as shown in `mitigations/csrf_token.php`.

## Conclusion
All vulnerabilities demonstrated in DVWA are critical to web app security. Use defensive coding patterns (parameterized queries, CSP, CSRF tokens, input validation) and harden server headers. See repository mitigations for code samples and remediation steps.
