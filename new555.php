    <?php

    /*
    Basic calculator
    =================

    *   This program takes two inputs.
    *   First it checks whether the input is numeric, if not, it prompts the user to enter a
        numeric value.
    *   Then it checks whether the input is in the range of 0 - 1000, if not, it prompts 
        the user to enter a number within the specified range.
    *   Then user selects one of the four operators and press enter key. 
    *   The result is shown on the screen. 
    *   */

    $invalid= -1;
    
    
    do{
        echo "Enter first number between 0 to 1000.\n";
        fscanf(STDIN, "%d\n", $num1);

        //nested if-else statements
        if(is_numeric($num1)) {  //condition-1
            if($num1 >= 0 && $num1 <= 1000) {     //condition-2
            //statement-1
            }else{
            //statement-2
            $num1=$invalid;     
            echo "OUT OF RANGE.\n";
            echo "Try Again!\n";
            }
        }   //closing bracket for if conditio-1
            else{
            $num1=$invalid;     //statement-3
            echo "This is not a numeric input.\n";
            echo "Try Again!\n";
            }
    }while($num1==$invalid);



    do{
        echo "Enter second number between 0 to 1000.\n";
        fscanf(STDIN, "%d\n", $num2);

        //nested if-else statements
        if(is_numeric($num2)) {  //condition-1
            if($num2 >= 0 && $num2 <= 1000) {     //condition-2
            //statement-1
            }else{
            //statement-2
            $num2=$invalid;     
            echo "OUT OF RANGE.\n";
            echo "Try Again!\n";
            }
        }   //closing bracket for if conditio-1
            else{
            $num2=$invalid;     //statement-3
            echo "This is not a numeric input.\n";
            echo "Try Again!\n";
            }
    }while($num2==$invalid);


        echo "Enter the operator\n";
        fscanf(STDIN, "%s\n", $op);
        
            switch ($op) {
                case "+":
                $result = $num1 + $num2;
                    break;
                case "-":
                $result = $num1 - $num2;
                    break;
                case "*":
                    $result = $num1 * $num2;
                    break;
                case "/":
                    $result = $num1 / $num2;
            }

            echo "The result is: " . $result;

    ?>
