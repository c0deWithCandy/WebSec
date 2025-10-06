Burp Suite quick notes (lab):
1. Configure browser proxy to Burp (127.0.0.1:8080). Install Burp CA cert for HTTPS if needed.
2. Proxy -> Intercept on. Submit login form on DVWA to capture request.
3. Right-click -> Send to Intruder. Choose positions, load small payload list (10-50 items), and run.
4. For modifications use Repeater to tweak parameters and observe responses.
5. In Intruder analyze response length/status differences to spot potential issues.

Use small payload sets and always stay in the lab.
