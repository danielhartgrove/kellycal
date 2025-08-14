<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Terms of Service — KellyCal</title>
  <style>
    :root { --fg:#1f2937; --muted:#6b7280; --bg:#ffffff; --brand:#68B0AB; }
    * { box-sizing: border-box; }
    body { margin: 0; font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; color: var(--fg); background: var(--bg); }
    header { padding: 2rem 1rem; border-bottom: 1px solid #e5e7eb; }
    .container { max-width: 860px; margin: 0 auto; padding: 0 1rem; }
    h1 { margin: 0 0 .5rem; font-size: clamp(1.8rem, 2.5vw, 2.2rem); }
    .muted { color: var(--muted); }
    main { padding: 2rem 0; line-height: 1.65; }
    h2 { margin-top: 2rem; font-size: 1.25rem; }
    a { color: var(--brand); text-decoration: none; }
    a:hover { text-decoration: underline; }
    ul { padding-left: 1.2rem; }
    footer { border-top: 1px solid #e5e7eb; padding: 1.25rem 1rem; font-size: .95rem; background: #fafafa; }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <h1>Terms of Service</h1>
      <p class="muted">Effective date: 14 August 2025</p>
    </div>
  </header>

  <main class="container">
    <p>These Terms of Service (“Terms”) govern your access to and use of KellyCal and related services (“Service”). By creating an account or using the Service, you agree to these Terms.</p>

    <h2>1. Eligibility</h2>
    <p>You must be at least 13 years old and capable of forming a binding contract to use the Service.</p>

    <h2>2. Account Registration &amp; Security</h2>
    <ul>
      <li>Provide accurate, current information and keep it updated.</li>
      <li>Keep your credentials confidential; you’re responsible for activity under your account.</li>
      <li>Notify us of any unauthorized use or suspected breach.</li>
    </ul>

    <h2>3. Acceptable Use</h2>
    <ul>
      <li>Do not misuse the Service, interfere with its operation, or attempt unauthorized access.</li>
      <li>Do not upload unlawful, harmful, or infringing content.</li>
      <li>Do not attempt to reverse engineer or circumvent security features.</li>
    </ul>

    <h2>4. Health Disclaimer</h2>
    <p>KellyCal provides informational tools only and is not medical advice. Consult a qualified healthcare professional before making significant dietary or fitness changes. You are responsible for your own health decisions.</p>

    <h2>5. Privacy</h2>
    <p>Your use of the Service is subject to our <a href="privacy.html">Privacy Policy</a>, which explains how we handle your information.</p>

    <h2>6. Intellectual Property</h2>
    <p>The Service, including software, design, and content, is owned by KellyCal or its licensors and protected by law. We grant you a limited, non-exclusive, non-transferable license to use the Service for personal, non-commercial purposes.</p>

    <h2>7. Termination</h2>
    <p>We may suspend or terminate access if you violate these Terms or if we discontinue the Service. You may stop using the Service at any time; you may request account deletion via support.</p>

    <h2>8. Disclaimers</h2>
    <p>The Service is provided “as is” and “as available.” We disclaim all warranties to the fullest extent permitted by law, including implied warranties of merchantability, fitness for a particular purpose, and non-infringement.</p>

    <h2>9. Limitation of Liability</h2>
    <p>To the maximum extent permitted by law, KellyCal and its affiliates will not be liable for any indirect, incidental, special, consequential, or punitive damages, or loss of data, profits, or revenue, arising from your use of the Service.</p>

    <h2>10. Changes to the Service and Terms</h2>
    <p>We may modify the Service and these Terms. If changes are material, we’ll provide notice within the Service or by email. Continued use means you accept the updated Terms.</p>

    <h2>11. Governing Law</h2>
    <p>These Terms are governed by the laws applicable in your country of residence unless otherwise required by mandatory local law.</p>

    <h2>12. Contact</h2>
    <p>Questions? Email <a href="mailto:support@kellycal.com">support@kellycal.com</a>.</p>
  </main>

  <footer>
    <div class="container">
      <span>&copy; <span id="year"></span> KellyCal</span> ·
      <a href="privacy.html">Privacy Policy</a>
    </div>
  </footer>

  <script>document.getElementById('year').textContent = new Date().getFullYear();</script>
</body>
</html>
