<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Here</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

</head>

<body>


    <form action="" method="post">

        <div class="field_wrapper">
            <div>
                <input type="text" name="field_name[]" value="" />
                <a href="javascript:void(0);" class="add_button" title="Add field">+</a>
            </div>
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>









    <script>
        $(document).ready(function() {
            var maxField = 10; 
            var addButton = $('.add_button'); 
            var wrapper = $('.field_wrapper'); 
            var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button">-</a></div>'; 
            var x = 1; 

            
            $(addButton).click(function() {    
                if (x < maxField) {
                    x++; 
                    $(wrapper).append(fieldHTML); 
                } else {
                    alert('A maximum of ' + maxField + ' fields are allowed to be added. ');
                }
            });

            // Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e) {
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrease field counter
            });
        });
    </script>


</body>

</html>