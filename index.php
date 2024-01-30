<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Donate</title>
  <link rel="stylesheet" href="css/all.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&family=Roboto+Condensed:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
  
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mt-5">
                <div class="calculate-form">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4 class="p-2" style="font-size: 22px; font-weight: 700;">Basic Calculator</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Fisrt Number</label>
                                    <input type="number" class="form-control" name="num1">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Second Number</label>
                                    <input type="number" class="form-control" name="num2">
                                </div>
                                <div class="mb-3">
                                <select name="operation" class="form-control">
                                    <option value="add">Addition</option>
                                    <option value="subtract">Subtraction</option>
                                    <option value="multiply">Multiplication</option>
                                    <option value="divide">Division</option>
                                    <!-- <option value="binary">Binary Conversion</option>
                                    <option value="octal">Octal Conversion</option>
                                    <option value="hexadecimal">Hexadecimal Conversion</option> -->
                                </select>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn text-white" style="font-weight: 600; font-size: 18px; color: #fff; background: #000; display:block; width:100%">Calculate</button>
                                </div>                                
                            </form>
                            <div id="result">
                                <?php
                                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                                        $num1 = $_POST["num1"];
                                        $num2 = $_POST["num2"];
                                        $operation = $_POST["operation"];

                                        switch($operation){
                                            case "add":
                                                $result = $num1+$num2;
                                                echo "Result : $result";
                                                break;

                                            case "subtract":
                                                $result = $num1-$num2;
                                                echo "Result : $result";
                                                break;

                                            case "multiply":
                                                $result = $num1 * $num2;
                                                echo "Result : $result";
                                                break;

                                            case "divide":
                                                $result = $num1 / $num2;
                                                echo "Result: $result";
                                                break;
                                        }
                                       
                                    }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



  

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>