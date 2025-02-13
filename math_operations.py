import sys

error_style = 'style="color: red; text-align: center;"'

try:
    num1, num2 = float(sys.argv[1]), float(sys.argv[2])
except ValueError:
    print(f"<h3 {error_style}>Error: Please provide a number.</h3>")
    sys.exit(1)

operation = sys.argv[3]

print("<h1 style='text-align: center;'>Result</h1>")

expression = f"{num1} {operation} {num2}"
if operation == "+":
    result = num1 + num2
elif operation == "-":
    expression = f"{num2} {operation} {num1}"
    result = num2 - num1
elif operation == "*":
    result = num1 * num2
else:
    if num2 == 0:
        print(f"<h3 {error_style}>Error: Division by zero is not allowed.</h3>")
    else:
        result = num1 / num2

if result > 100:
    print(f"<p style='text-align: center;'>({expression}) ", end="")
    print(f"* 2 = {str(result * 2)}</p>")
elif result < 0:
    print(f"<p style='text-align: center;'>({expression}) ", end="")
    print(f"+ 50 = {str(result + 50)}</p>")
else:
    print(f"<p style='text-align: center;'>{expression} ", end="")
    print(f"= {str(result)}</p>")
