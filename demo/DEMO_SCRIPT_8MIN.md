8-Minute Demo Script — WebApp Exploitation & Fix

00:00-00:30 - Intro & legal notice (lab-only)
00:30-02:00 - SQL Injection: show DVWA SQLi page, run payload `' OR '1'='1' --`, show extracted rows (screenshot)
02:00-03:30 - Fix SQLi: open prepared_statement.php, explain how parameters prevent injection
03:30-04:30 - Stored XSS: post `<script>alert('XSS Stored')</script>` show alert execution
04:30-05:30 - Fix XSS: show htmlspecialchars usage & CSP header snippet; reload page to show payload neutralized
05:30-06:30 - CSRF: open attacker page `csrf_attack.html` to show automated POST; show effect of victim password changed
06:30-07:30 - Fix CSRF: show token generation/validation (`mitigations/csrf_token.php`) and demo successful prevention
07:30-08:00 - Wrap-up and references (link to GitHub repo and report)
