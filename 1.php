<!DOCTYPE html>
<html lang="en">
<head>
  <title>Balmiki</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Roll</th>
        <th>Student Name</th>
        <th>Father Name</th>
        <th>Semester</th>
        <th>Branch</th>
        <th>Session</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
    <?php
$conn = mysqli_connect("localhost", "root", "", "cgcicard");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr>
        <td>". $row["roll"]. "</td>
        <td>". $row["student_name"] . "</td>
        <td>". $row["father_name"]. "</td>
        <td>". $row["semester"]. "</td>
        <td>". $row["branch"]. "</td>
        <td>". $row["ession"]. "</td>
        <td>". $row["ddress"]. "</td>
    </tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
    </tbody>
  </table>
</div>

</body>
</html>