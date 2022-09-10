<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
    <title>Loan Calculator</title>
</head>
<body>
    <div class="form-container">
        <form method="get">
            @csrf
            <div class="header">Loan Calculator</div>
            <h6>Made by: Franz Manrique</h6>
            <hr/>
            <div class="fields">
                <div class="input-fields">
                    <label>Loan Amount:</label>
                    <input class="txt-input" type="text" name="loan">
                </div>
                <div>
                    <label>Payment Terms :</label>
                    <select>
                        <option value="12mon">12 Months</option>}
                        <option value="18mon">18 Months</option>
                        <option value="24mon">24 Months</option>
                        <option value="36mon">36 Months</option>
                        <option value="48mon">48 Months</option>
                        <option value="60mon">60 Months</option>
                    </select>
                </div>
            </div>

            <div class="button-set">
                <input class="btn" type="submit" value="Compute">
                <input class="btn" type="submit" value="Clear">
            </div>

        </form>
        <div class= "output-field">
            <table>
                <tr>
                    <td><h4>Your computed results are:</h4></td>
                </tr>
                <tr>
                    <td><div class="result-holder">Loan Amount: </div></td>
                    <td><div class= "data">P{{$loan}}</div></td>
                </tr>
                <tr>
                    <td><div class="result-holder">Interest: </div></td>
                    <td><div class= "data">P{{$loan}}</div></td>
                </tr>
                <tr>
                    <td><div class="result-holder">Monthly Amortization: </div></td>
                    <td><div class= "data">P{{$loan}}</div></td>
                </tr>
            </table>
        </div>

    </div>





</body>
</html>
