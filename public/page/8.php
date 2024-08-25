<?php
$title = 'Count Specific Number';
ob_start();

$output = '';

if (isset($_POST['submit'])) {
  $data = array_map('intval', explode(',', $_POST['data']));
  $cari = intval($_POST['cari']);

  $counts = array_count_values($data);
  $jumlah = isset($counts[$cari]) ? $counts[$cari] : 0;

  $output = "Jumlah angka $cari : $jumlah";
}
?>

<div class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
  <form method="post" class="max-w-screen-sm p-10 mx-auto sm:dark:bg-gray-800 sm:bg-gray-100 rounded-xl">
    <div class="mb-5">
      <label for="data" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Input Data (comma-separated)</label>
      <input type="text" id="data" name="data"
        class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="80, 90, 75, 100, 85, 100, 66" required />
    </div>

    <div class="mb-5">
      <label for="cari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Input Number to Search</label>
      <input type="number" id="cari" name="cari"
        class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Input number to search" required />
    </div>

    <button type="submit" name="submit"
      class="w-full px-6 py-3 mb-5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
    </button>

    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Output:</label>
    <div class="w-full h-32 p-2 overflow-auto text-gray-900 bg-white border border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
      <?= htmlspecialchars($output) ?>
    </div>
  </form>
</div>

<?php
$content = ob_get_clean();
?>