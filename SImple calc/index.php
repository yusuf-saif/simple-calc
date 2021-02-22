<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>My Mini Calculator</h1>
    <p>Here you can perform basic addition,subtraction and multiplication
    </p>

    <form> 
        <input type="text" name="opt1" placeholder="Try me">
        <select name="operator">
            <option>   </option>
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
            
        </select>
        <input type="text" name="opt2" placeholder="Try me too">
        <br>
        <button type="submit" namae="submit" value="submit">Calculate</button>    
    </form>
    <p>Your Answer is :</p>
    <?php
        if (isset($_GET['submit'])) {
            $result1 = $_GET['opt1'];
            $result2 = $_GET['opt2'];
            $operator = $_GET['operator'];
                switch ($operator) {
                    case "none":
                        echo "You need a method to go further";
                       
                        break;
                        case "+":
                            echo "$result1 + $result2";
                    
                        break;
                        case "-":
                            echo "$result1 - $result2";
                            
                            break;
                            case "*":
                                echo "$result1 * $result2";
                                
                                break;
                        case "/":
                            echo "$result1 / $result2";
                }
        }
    
    
    
    
    ?>
</body>
</html>