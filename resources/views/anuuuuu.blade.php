<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome | Anushree</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #9f6eed, #65c3ff);
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(20px);
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      padding: 40px;
      width: 90%;
      max-width: 400px;
      text-align: center;
      color: white;
      animation: fadeIn 1.2s ease-out;
    }

    .card h1 {
      font-size: 2.2rem;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 1rem;
      margin-bottom: 30px;
      opacity: 0.85;
    }

    .card button {
      padding: 12px 24px;
      background: #fff;
      border: none;
      color: #6a0dad;
      font-weight: bold;
      border-radius: 30px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .card button:hover {
      background: #6a0dad;
      color: white;
      box-shadow: 0 5px 15px rgba(106, 13, 173, 0.4);
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: scale(0.95);
      }
      100% {
        opacity: 1;
        transform: scale(1);
      }
    }

    @media (max-width: 480px) {
      .card h1 {
        font-size: 1.8rem;
      }
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Hello, Anushree! 🌸</h1>
    <p>Welcome to your beautiful landing page. You can customize this to introduce your project or portfolio.</p>
    <button onclick="alert('You clicked the button!')">Get Started</button>
  </div>
</body>
</html>
