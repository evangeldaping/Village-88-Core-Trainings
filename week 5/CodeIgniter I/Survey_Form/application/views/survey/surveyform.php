<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey Form</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css"/>
</head>

<style>
	html {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}

#wrapper {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 500px;
  margin: 0 auto;
}

.error {
    color: red;
}

.success {
    color: green;
}

h1{
	margin-left: 150px;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #2B78E4;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  box-shadow: 10px 10px;
}

input[type=submit]:hover {
  background-color: blue;
  color: white;
}

textarea {
  resize: vertical;
  width: 495px;
}
</style>

<body>

<div id="wrapper">
	
    <h1>Survey Form</h1>

    <?php echo form_open('results/submit_form'); ?>
        <p>Your Name: <input type="text" name="name"/></p>

        <p>Dojo Location: <select name="dojo_location">
            <option name="dojo_location" value="Mountain View">Mountain View</option>
            <option name="dojo_location" value="San Fernando">San Fernando</option>
            <option name="dojo_location" value="La Trinidad">La Trinidad</option>
        </select></p>

        <p>Favorite Language: <select name="fav_language">
                <option name="fav_language" value="SQL">SQL</option>
                <option name="fav_language" value="Java">Java</option>
                <option name="fav_language" value="JavaScript">JavaScript</option>
                <option name="fav_language" value="C#">C#</option>
                <option name="fav_language" value="Python">Python</option>
                <option name="fav_language" value="C++">C++</option>
                <option name="fav_language" value="Ruby on Rails">Ruby on Rails</option>
                <option name="fav_language" value="iOS/Swift">iOS/Swift</option>
        </select></p>

        <p>Comments (optional):<br /><textarea name="comments"></textarea></p>
        
        <input type="submit" value="Submit"/>
    <?php echo form_close(); ?> 

</div>


</body>
</html>