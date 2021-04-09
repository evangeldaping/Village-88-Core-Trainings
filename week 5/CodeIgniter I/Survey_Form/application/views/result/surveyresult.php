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

    <p class="success">Thanks for submitting this form! You have submitted this form <?php echo $this->session->userdata('counter');; ?> times!</p>

    <h2>Submitted Information</h2>

    <?php
    if($this->session->userdata('name'))
    {
        echo '<p><strong>Name:</strong> ' . $this->session->userdata('name') . '</p>';
    }

    if($this->session->userdata('dojo_location'))
    {
        echo '<p><strong>Dojo Location:</strong> ' . $this->session->userdata('dojo_location') . '</p>';
    }

    if($this->session->userdata('fav_language'))
    {
        echo '<p><strong>Favorite Language:</strong> ' . $this->session->userdata('fav_language') . '</p>';
    }

    if($this->session->userdata('comments'))
    {
        echo '<p><strong>Comments:</strong> ' . $this->session->userdata('comments') . '</p>';
    }

    ?>
    <?php echo form_open('return'); ?>
		<input type="submit" value="Go Back"/>
    <?php echo form_close(); ?> 


</div>

</body>
</html>