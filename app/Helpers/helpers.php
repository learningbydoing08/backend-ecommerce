<?php
  // untuk mengubah integral ke format uang dengan . sebagai pemisah ribuan
  // contoh : 1000000 -> Rp. 1.000.000
  if (! function_exists('moneyFormat')) {
    function moneyFormat($str)
    {
      return 'Rp. ' . number_format($str, 0, ',', '.');
    }
  }
?>