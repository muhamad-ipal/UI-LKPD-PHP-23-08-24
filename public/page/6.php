<?php
$title = 'Average Score';
ob_start();

$output = '';

if (isset($_POST['btn'])) {
  $nama = $_POST['nama'];
  $nilai = $_POST['nilai'];

  $total_nilai = array_sum($nilai);
  $jumlah_nilai = count($nilai);
  $rata_rata = $jumlah_nilai > 0 ? $total_nilai / $jumlah_nilai : 0;

  $output .= "Nama: " . htmlspecialchars($nama) . "<br>";
  $output .= "Nilai Rata-rata: " . number_format($rata_rata, 2) . "<br>";
}
?>

<div class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
  <form method="post" class="max-w-screen-sm p-10 mx-auto dark:bg-gray-800 sm:bg-gray-100 rounded-xl">
    <div class="mb-5">
      <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Input Nama</label>
      <input type="text" id="nama" name="nama"
        class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Input Nama" required />
    </div>

    <div class="mb-5">
      <label for="nilai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Input Nilai</label>
      <div class="flex gap-2">
        <?php for ($i = 0; $i < 6; $i++): ?>
          <input type="number" name="nilai[]"
            class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="" required />
        <?php endfor; ?>
      </div>
    </div>

    <button type="submit" name="btn"
      class="w-full px-6 py-3 mb-5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
    </button>

    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Output:</label>
    <div class="w-full h-32 p-2 overflow-auto text-gray-900 bg-white border border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
      <?= $output ?>
    </div>
  </form>
</div>

<?php
$content = ob_get_clean();
?>