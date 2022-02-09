<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>YORUMLAR</h2>

<table>
  <tr>
    <th>İSİM</th>
    <th>SOYİSİM</th>
    <th>YORUM</th>
  </tr>
  <?php
                include("database.php");

                $verial = "Select * From users";

                $sonuc = $connect->query($verial);
                if ($sonuc->num_rows > 0) {
                    while ($cek = $sonuc->fetch_assoc()) {

                        echo "<tr>
                        <td>".$cek['name']."</td>
                        <td>".$cek['surname']."</td>
                        <td>".$cek['comment']."</td>
                       
                      </tr>
                        
                        
                        ";
                    }
                }
else{
    echo "VERİTABANINDA VERİ BULUNAMAMIŞTIR...";

            }

?>
</table>

</body>
</html>
