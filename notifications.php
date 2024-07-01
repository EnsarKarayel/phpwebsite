<div class="container">
    <h2>Yaklaşan Takipler</h2>
    <?php
    // Ensar tablo adı takibi ve detaylarını ekle
    $result = $con->query("SELECT * FROM takipler WHERE tarih <= DATE_ADD(CURDATE(), INTERVAL 7 DAY)");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . $row['baslik'] . ": " . $row['tarih'] . "</p>";
        }
    } else {
        echo "<p>Yaklaşan takip yok.</p>";
    }
    ?>
</div>
