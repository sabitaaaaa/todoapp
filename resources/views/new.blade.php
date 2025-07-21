<!DOCTYPE html>
<html>
<head>
  <title>Simple PHP Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .calculator {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    input, select, button {
      padding: 10px;
      margin: 10px 0;
      width: 100%;
      font-size: 16px;
    }

    .result {
      margin-top: 15px;
      font-weight: bold;
      color: #333;
    }
  </style>
</head>
<body>
  <div class="calculator">
    <h2>PHP Calculator</h2>
    <form method="post">
      <input type="number" name="num1" step="any" placeholder="Enter first number" required>
      <input type="number" name="num2" step="any" placeholder="Enter second number" required>

      <select name="operation" required>
        <option value="">--Select Operation--</option>
        <option value="add">Addition (+)</option>
        <option value="sub">Subtraction (-)</option>
        <option value="mul">Multiplication (×)</option>
        <option value="div">Division (÷)</option>
      </select>

      <button type="submit" name="submit">Calculate</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $operation = $_POST['operation'];
