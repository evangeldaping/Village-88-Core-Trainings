<?php
//Create  array.
$sample_array = array(
    "CA",
    "WA",
    "UT",
    "TX",
    "AZ",
    "NY"
);
class Select
{
    //Property
    private $name;   //String variable.
    private $value;  //Array variable.

    //Methods
    //The string set by this method will be the name of the select field.
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    //This method provides the values used for the options
    //in the select field and checks to be sure the value is an array. 
    public function setValue($value)
    {
        if (!is_array($value)) {
            die("Error: value is not an array.");
        }
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    //This method creates the actual select options. It is private, 
    //since there is no need for it outside the operations of the class.
    private function makeOptions($value)
    {
        foreach ($value as $v) {
            echo "<option value=\"$v\">" . ucfirst($v) . "</option>\n";
        }
    }

    //This method puts it all together to create the select field.
    public function print_select()
    {
        echo "<select name=\"" . $this->getName() . "\">\n";
        //Create options.
        echo "<option value=\"No response\">--Select one--</option>\n";
        $this->makeOptions($this->getValue());
        echo "</select>";
    }
} //end class

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Helper</title>
</head>

<body>

    <?php
    //Instantiate object.
    $states = new Select();

    //Set properties.
    $states->setName('states');
    $states->setValue($sample_array);

    //The object has the data it needs from the preceding commands.
    //Tell it to make the select field.
    $states->print_select();
    var_dump($states);
    //Destroy the object.
    unset($states);
    ?>
    </p>

    </form>
</body>

</html>