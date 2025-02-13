<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 50vh;
        width: 500px;
        border: 1px solid #000;
        margin: 10rem auto 0;
        padding: 1rem;
      }

      label {
        width: 100%;
        margin-bottom: 1rem;
        display: flex;
        flex-direction: column;
      }

      input {
        margin: 1rem 0;
        padding: 0.5rem;
        border: 1px solid #999;
        border-radius: 4px;
      }

      select {
        margin: 1rem 0;
        padding: 0.5rem;
        border: 1px solid #999;
        border-radius: 4px;
        width: 100%;
      }

      option {
        padding: 0.5rem;
        text-align: center;
      }

      input:focus {
        border: 1px solid #000;
        outline: none;
      }

      button {
        padding: 0.5rem 1rem;
        font-size: 1.01rem;
        width: 100%;
        border: none;
        border-radius: 4px;
        color: #fff;
        cursor: pointer;
        background-color: #470000;
        box-shadow: 1px 4px 2px 1px #00000032;
      }

      button:hover {
        background-color: #470000cf;
      }

      button:active {
        box-shadow: 0 4px 4px #00000032;
      }
    </style>
  </head>
  <body>
    <form action="process_math.php" method="post">
      <label for="num1">
        Number 1: <input type="text" name="num1" id="num1" />
      </label>
      <label for="operation">
        Operator
        <select name="operation" id="operation">
          <option value="add">+</option>
          <option value="subtract">-</option>
          <option value="multiply">*</option>
          <option value="divide">/</option>
        </select>
      </label>
      <label for="num2">
        Number 2: <input type="text" name="num2" id="num2" />
      </label>
      <input type="submit" value="Add" />
    </form>
  </body>
</html>
