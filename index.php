<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ماشین حساب</title>
  <style>
    body {
      background: #2C2C2C;
      color: white;
      font-family: 'Arial', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .calculator {
      background: #3A3A3A;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
      padding: 20px;
      width: 400px;
    }
    .Num {
      background: #000;
      color: #00FF7F;
      font-size: 1.5em;
      padding: 10px;
      border-radius: 8px;
      border: none;
      width: 95%;
      margin-bottom: 10px;
      text-align: right;
    }
    .operator {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 18px;
      font-size: 1.2em;
      color: white;
      background: #DBA979;
      cursor: pointer;
      margin-bottom: 15px;
    }
    .button {
      width: 95%;
      padding: 10px;
      border: none;
      border-radius: 8px;
      font-size: 1.2em;
      color: white;
      background: #787777;
      cursor: pointer;
      text-align: center;
      margin-bottom: 15px;

    }
    label {
      display: block;
      margin-bottom: 5px;
      text-align: right;
      font-size: 1em;
    }
  </style>
</head>
<body dir="rtl">
  <table name="calculator" class="calculator">
    <form action="index (2)_register.php" method="POST">
      <tr>
        <td colspan="2">
          <label for="firstNum">عدد اول:</label>
          <input type="text" id="firstNum" name="firstNum" class="Num" placeholder="عدد اول را وارد کنید">
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <label for="secondNum">عدد دوم:</label>
          <input type="text" id="secondNum"  name="secondNum" class="Num" placeholder="عدد دوم را وارد کنید">
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <select name="operator" class="operator">
            <option value="+">جمع</option>
            <option value="-">تفریق</option>
            <option value="*">ضرب</option>
            <option value="/">تقسیم</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <button type="submit" class="button">محاسبه</button>
        </td>
      </tr>
    </form>
  </table>

</body>
</html>
