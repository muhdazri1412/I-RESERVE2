<style>
            table, th, td {
                
    border: 2px solid black;
    border-collapse: collapse;
    margin-left: auto;
    margin-right: auto;
}

<?php
$con = mysqli_connect("localhost","root","","ireserve") or die ("could not connect to mysql");
$sql = "SELECT * ,a.matricno AS 'matricnumber'
        FROM  form a 
        inner join bookings b on a.book_id=b.id 
        inner join pdf_file c on  a.book_id=c.id ";
$result = $con->query($sql);

header('Content-type: application/vnd-ms-excel');
$filename="user_data.xls";
header("Content-Disposition:attachment;filename=\"$filename\"");

echo "<table ><tr>
<th>id</th><th>date</th><th>timeslot</th><th>status</th>
<th>venue_id</th><th>book_id</th><th>First Name</th>
<th>Last Name</th><th>Email</th><th>Matric No</th>
<th>Phone Number</th><th>Advisor Phone number</th>
<th>Address</th><th>Organisation</th><th>Programme Name</th>
<th>Programme type</th><th>Total participant</th><th>Category</th>
echo '<th style='column-size: 4px;'>file name</th>'</tr>";

while ($row = $result->fetch_assoc()) {
    
    echo "<tr>";
    echo "<td>" .$row['id']. "</td>";
    echo "<td>" .$row['date']. "</td>";
    echo "<td>" .$row['timeslot']. "</td>";
    echo "<td>" .$row['status']. "</td>";
    echo "<td>" .$row['venue_id']. "</td>";
    echo "<td>" .$row['book_id']. "</td>";
    echo "<td>" .$row['User_fname']. "</td>";
    echo "<td>" .$row['User_lname']. "</td>";
    echo "<td>" .$row['User_email']. "</td>";
    echo "<td>" .$row['matricno']. "</td>";
    echo "<td>" .$row['User_phone']. "</td>";
    echo "<td>" .$row['User_advisor']. "</td>";
    echo "<td>" .$row['User_address']. "</td>";
    echo "<td>" .$row['User_org']. "</td>";
    echo "<td>" .$row['Prog_name']. "</td>";
    echo "<td>" .$row['Prog_type']. "</td>";
    echo "<td>" .$row['part_tot']. "</td>";
    echo "<td>" .$row['Prog_cat']. "</td>";
    echo "<td>" .$row['name']. "</td>";
    
   
}
echo "</table>";
?>
