Output encoding and sanitization (PHP)

When outputting user-supplied content, always encode:
echo htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

Avoid blacklists. Prefer whitelisting, strict input validation, and output encoding.
