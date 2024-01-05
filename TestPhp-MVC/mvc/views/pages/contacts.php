<h2>
    <?php
   echo $data["Hobbies"][0];
   echo "<br>";
   echo $data["Number"]
    ?>
</h2>

<?php
while ($row = mysqli_fetch_array($data["SinhVien"])) {
    echo $row["hoten"]."<BR>";
}
?>