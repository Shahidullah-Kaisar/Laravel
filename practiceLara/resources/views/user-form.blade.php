<!-- Put this inside resources/views/user-form.blade.php or a plain HTML file -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add New User</title>
  <style>
    /* Vanilla CSS - simple, clean */
    :root{
      --bg: #f7fafc;
      --card: #ffffff;
      --accent: #2563eb;
      --muted: #6b7280;
      --danger: #e11d48;
      --radius: 10px;
    }

    *{box-sizing: border-box}
    body{
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background: linear-gradient(180deg, var(--bg), #eef2ff);
      margin: 0;
      padding: 32px;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      color: #111827;
    }

    .card{
      background: var(--card);
      width: 100%;
      max-width: 420px;
      border-radius: var(--radius);
      box-shadow: 0 8px 24px rgba(15,23,42,0.08);
      padding: 22px;
    }

    h2{
      margin: 0 0 14px 0;
      font-size: 20px;
      letter-spacing: -0.2px;
    }

    form .field{
      margin-bottom: 12px;
    }

    label{
      display: block;
      font-size: 13px;
      color: var(--muted);
      margin-bottom: 6px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"]{
      width: 100%;
      padding: 10px 12px;
      border-radius: 8px;
      border: 1px solid #e6e9ef;
      background: #fff;
      font-size: 14px;
      transition: box-shadow .12s, border-color .12s;
    }

    input::placeholder{ color: #94a3b8 }

    input:focus{
      outline: none;
      border-color: rgba(37,99,235,0.9);
      box-shadow: 0 0 0 4px rgba(37,99,235,0.08);
    }

    .actions{
      display: flex;
      gap: 10px;
      align-items: center;
      margin-top: 10px;
    }

    button.primary{
      background: linear-gradient(180deg,var(--accent), #1e40af);
      color: #fff;
      border: none;
      padding: 10px 14px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 600;
      flex: 1;
    }

    button.primary:hover{ transform: translateY(-1px) }
    button.secondary{
      background: transparent;
      border: 1px solid #e6e9ef;
      padding: 10px 12px;
      border-radius: 8px;
      cursor: pointer;
    }

    .help{
      font-size: 12px;
      color: var(--muted);
      margin-top: 8px;
    }

    .error{
      color: var(--danger);
      font-size: 13px;
      margin-top: 6px;
    }

    @media (max-width:480px){
      .card{ padding: 16px; margin: 10px; }
    }
  </style>
</head>
<body>
  <main class="card" role="main" aria-labelledby="form-heading">
    <h2 id="form-heading">Add new User</h2>

     <form action="/addUser" method="post"> <!--action basically বলে দেয় —form এর data (input, email, password etc.) কোথায় পাঠানো হবে যখন user "Submit" করে। -->
      @csrf

      <div class="field">
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="Enter username" required />
      </div>

      <div class="field">
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="you@example.com" required />
      </div>

      <div class="field">
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Create a password" required minlength="6" />
      </div>

      <div class="actions">
        <button type="submit" class="primary">Create User</button>
        <button type="reset" class="secondary">Reset</button>
      </div>

      <p class="help">Passwords must be at least 6 characters.</p>
    </form>
  </main>
</body>
</html>
