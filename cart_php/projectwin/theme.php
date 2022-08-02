<?php
    function getTheme(){
        return trim(file_get_contents("template.txt"));
    }

    function setTheme($theme) {
        file_put_contents("template.txt", $theme);
    }
    
    $available = ["style", "template1", "template2", "template3"];

    if (isset($_POST["themeSelect"]) && in_array($_POST["themeSelect"], $available)) {
        setTheme($_POST["themeSelect"]);
    }
    


?>

<form action = "<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <select name="themeSelect" id="themeSelect">
        <option value="style" <?= getTheme() === "style" ? "selected" : "" ?> >default</option>
        <option value="template1" <?= getTheme() === "template1" ? "selected" : "" ?> >theme 1</option>
        <option value="template2" <?= getTheme() === "template2" ? "selected" : "" ?> >theme 2</option>
        <option value="template3" <?= getTheme() === "template3" ? "selected" : "" ?> >theme 3</option>
    </select>
   <!-- <input type="submit" value="Change"> -->
</form>


<!-- custom js file link  -->
<script src="js/theme.js"></script>