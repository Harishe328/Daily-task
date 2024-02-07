<?php
$result = 0;
if (isset($_POST["submit"])) {
    $Amount = $_POST['amount'];
    $code = $_POST['code'];
    $code = strtoupper($code);
    $arr = array("USA" => 83.4, "SRILANKA" => 0.24, "EURO" => 89.31, "SINGAPORE" => 61.74, "DUBAI" => 22.61);
    if (empty($code)) {
        echo "* Country code  is required" . "<br>";
    } 
        if (array_key_exists($code, $arr)) {
            $result = $Amount * $arr[$code];
        } 
    }
    // switch ($code) {
    //     case "USA":{
    //             $result = $Amount * 83.4;
    //             break;
    //         }
    //     case "SRILANKA":{
    //             $result = $Amount * 0.24;
    //             break;
    //         }
    //     case "EURO":{
    //             $result = $Amount * 89.31;
    //             break;
    //         }
    //     case "SINGAPORE":{
    //             $result = $Amount * 61.74;
    //             break;
    //         }
    //     case "DUBAI":{
    //             $result = $Amount * 22.61;
    //             break;
    //         }
    //     default:{
    //             echo "Given is invalid";
    //             break;}
    // }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="post" id="form">
    <table>
    <tr>
        <td><label for="amount">Amount :</label></td>
        <td><input type="number" name="amount"></td><br>

    </tr>
    <tr>
        <td><label for="countrycode">Country code:</label></td>
        <td><select name="code" >
            <option value="" disabled selected>Select any option</option>
            <option value="usa">USA</option>
            <option value="Srilanka">SL</option>
            <option value="euro">European Country</option>
            <option value="singapore">Singapore</option>
            <option value="dubai">Dubai</option>
        </select></td><br>
    </tr>
    <tr>
        <td><input type="submit" name="submit"></td>
    </tr>
    <?php if (isset($_POST["submit"])) {?>
    <tr>
        <td><label for="ans">ans :</label></td>
        <td><input type="text" name="ans" value="<?php echo $result; ?>"></td>
    </tr>

    <?php }?>
    </table>
   </form>
   <!-- <script >
     let form = document.getElementById("form");
     let result=<?php //echo $result; ?>;
     form.addEventListener("submit", function (event) {

     let tr=document.createElement("tr");
     let td1=document.createElement("td");
     let label=document.createElement("label");
     label.textContent="Result";
     let td2=document.createElement("td");
     let input=document.createElement("input");
    //  input.setAttribute("id","result")
    //  input.setAttribute("type","number");
    //  input.setAttribute("name","result");
     input.setAttribute("value",result)
     input.setAttribute("disabled",true)
     td1.appendChild(label);
     td2.appendChild(input);
     tr.appendChild(td1);
     tr.appendChild(td2);
     table.appendChild(tr);
     event.preventDefault();
     }) -->
   </script>
</body>
</html>