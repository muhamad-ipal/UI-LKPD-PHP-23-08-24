<?php
$title = 'Multiply Without Zero';
ob_start();

$output = '';

if (isset($_POST['btn'])) {
  $x = htmlspecialchars($_POST['input']);

  for ($i = 1; $i <= (($x / 10) * 2); $i++) {
    if ($i % 2 !== 0) {
      $output .= "$i x 5 : " . ($i * 5) . "<br>";
    }
  }
}
?>

<div class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
  <form method="post" class="max-w-screen-sm p-10 mx-auto sm:dark:bg-gray-800 sm:bg-gray-100 rounded-xl">
    <div class="mb-5">
      <label for="input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Input Perkalian</label>
      <input type="number" id="input" name="input"
        class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Input" required />
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