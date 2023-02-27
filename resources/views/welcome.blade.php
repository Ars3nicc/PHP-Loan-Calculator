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
        <form method="POST" action="/">
            @csrf
            <div class="header">Loan Calculator</div>
            <h6>Made by: Franz Manrique</h6>
            <hr />
            <div class="fields">
                <div class="input-fields">
                    <tr>
                        <td><label for="loan">Loan Amount:</label></td>
                    </tr>
                    <tr>
                        <td><input class="txt-input" type="text" name="loan"></td>
                    </tr>


                </div>
                <div>
                    <label>Payment Terms :</label>
                    <select name="months">
                        <option value="12">12 Months</option>
                        <option value="18">18 Months</option>
                        <option value="24">24 Months</option>
                        <option value="36">36 Months</option>
                        <option value="48">48 Months</option>
                        <option value="60">60 Months</option>
                    </select>
                </div>
            </div>

            <div class="button-set">
                <input class="btn" type="submit" value="Compute">
                <input class="btn" type="submit" value="Clear">
            </div>
            <div class="output-field">
                <table>
                    <tr>
                        <td>
                            <h4>Your computed results are:</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="result-holder">Loan Amount: </div>
                        </td>
                        <td>
                            <div class="data">P{{ $loan }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="result-holder">Interest: </div>
                        </td>
                        <td>
                            <div class="data">P{{ $interest }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="result-holder">Monthly Amortization: </div>
                        </td>
                        <td>
                            <div class="data">P{{ $amortization }}</div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</body>

</html>
