<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Loan Calculator</title>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title">Loan Calculator</h5>
                    <form action="/" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="amount" class="form-label">Loan Amount</label>
                            <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter loan amount" required>
                        </div>
                        <div class="mb-3">
                            <label for="terms" class="form-label">Payment Terms</label>
                            <div class="input-group">
                                <select class="form-control form-select" id="terms" name="terms">
                                    <option value="default" selected disabled>Choose payment term</option>
                                    <option value="12">12 months</option>
                                    <option value="18">18 months</option>
                                    <option value="24">24 months</option>
                                    <option value="36">36 months</option>
                                    <option value="48">48 months</option>
                                    <option value="60">60 months</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Calculate</button>
                        <button type="reset" class="btn btn-secondary" onclick="">Clear</button>
                    </form>
                </div>
                <div class="container my-2 mx-2">
                    <h6>Your computed results are:</h6>
                    <div class="row align-items-start">
                        <div class="col">
                            Loan Amount:
                        </div>
                        <div class="col">
                            PHP {{ $loanAmount }}
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            Interest:
                        </div>
                        <div class="col">
                            PHP {{ $interest }}
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            Monthly Amortization:
                        </div>
                        <div class="col">
                            PHP {{ $amortization }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
