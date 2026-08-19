<!DOCTYPE html>
<html>

<head>
  <title>Student Marks</title>
</head>
<style>
  body {
    background-color: lightblue;
    font-family: verdana;
    font-size: 150%;
    text-align: center;
    margin-top: 200px;
    margin-left: 500px;
    margin-right: 500px;
    border: 5px solid black;


  }
</style>

<body>

  <form method="GET">
    Coding:
    <input type="number" name="coding"><br><br>

    Networking:
    <input type="number" name="networking"><br><br>

    Mathematics:
    <input type="number" name="mathematics"><br><br>

    <input type="submit" value="Calculate">
  </form>

  <?php

  if (isset($_GET["coding"], $_GET["networking"], $_GET["mathematics"])) {

    $coding = $_GET["coding"];
    $networking = $_GET["networking"];
    $mathematics = $_GET["mathematics"];

    // Validation
    if (
      !is_numeric($coding) ||
      !is_numeric($networking) ||
      !is_numeric($mathematics)
    ) {
      echo "Please enter valid numbers.";
    } else {

      $total = $coding + $networking + $mathematics;
      $average = $total / 3;

      if ($average >= 70) {
        $grade = "A";
      } elseif ($average >= 60) {
        $grade = "B";
      } elseif ($average >= 50) {
        $grade = "C";
      } elseif ($average >= 40) {
        $grade = "D";
      } else {
        $grade = "E";
      }

      echo "<h3>Results</h3>";
      echo "Total: $total <br>";
      echo "Average: $average <br>";
      echo "Grade: $grade";
    }
  }

  ?>

</body>

</html>
