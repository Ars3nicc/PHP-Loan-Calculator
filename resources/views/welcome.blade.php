<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
    <title>Activity 1</title>
</head>
<body>
    <form method="get">
        @csrf
        <div class="header">Loan Calculator</div>
        <hr/>
        <table>
            <tr>
                <td><label for="">Loan Amount:</label></td>
                <td><input type="text" name="loan"></td>


                <td>
                Payment Terms :
                    <select>
                        <option value="12mon">12 Months</option>}
                        <option value="18mon">18 Months</option>
                        <option value="24mon">24 Months</option>
                        <option value="36mon">36 Months</option>
                        <option value="48mon">48 Months</option>
                        <option value="60mon">60 Months</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>

                </td>
            </tr>
        </table>



        <div class="button-set">
            <input class="btn" type="submit" value="Compose">
            <input class="btn" type="submit" value="Clear">
        </div>
        <table>
        <tr>
            <th><h4>Your computed results are:</h4></th>
        </tr>
        <tr>
            <td><div class="result-holder">Loan Amount: </div></td>
        </tr>
        <tr>
            <td><div class="result-holder">Interest: </div></td>
        </tr>
        <tr>
            <td><div class="result-holder">Monthly Amortization: </div></td>
        </tr>
    </table>

    </form>



</body>
</html>
