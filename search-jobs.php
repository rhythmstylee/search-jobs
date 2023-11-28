<?php
if (isset($_GET['query'])) {
  $query = $_GET['query'];

$results = cari-lowongan-kerja($query);
  echo "Hasil pencarian untuk: " . $query;
  // Tampilkan $results atau hasil pencarian lainnya
} else {
  echo "Tidak ada hasil pencarian.";
}
?>
