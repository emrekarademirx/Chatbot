<?php
  // Kullanıcının soruları
  $questions = array(
    "ürünleriniz hakkında bilgi verin",
    "ürünlerin fiyatları nedir",
    "ürünlerin teslim süresi nedir",
    "ürünlerin garanti süresi nedir",
    "ürünlerin kargo ücreti nedir",
    "ürünlerin ödeme seçenekleri nelerdir"
  );

  // Soruların cevapları
  $answers = array(
    "Ürünlerimiz hakkında detaylı bilgi almak için lütfen resmi web sitemizi ziyaret edin.",
    "Ürünlerin fiyatları, ürün tipine ve miktarına göre değişebilir. Lütfen resmi web sitemizdeki ürün sayfalarını ziyaret edin.",
    "Teslim süresi, siparişinizin durumuna ve konumunuza göre değişebilir. Lütfen resmi web sitemizdeki teslimat sayfasını ziyaret edin.",
    "Ürünlerimiz genellikle 1 yıl garanti kapsamındadır. Lütfen resmi web sitemizdeki garanti sayfasını ziyaret edin.",
    "Kargo ücreti, siparişinizin durumuna ve konumunuza göre değişebilir. Lütfen resmi web sitemizdeki kargo sayfasını ziyaret edin.",
    "Ödeme seçeneklerimiz arasında kredi kartı, banka havalesi ve PayPal gibi seçenekler bulunmaktadır. Lütfen resmi web sitemizdeki ödeme sayfasını ziyaret edin."
  );

  // Kullanıcının soruyu yanıtla
  echo "Merhaba, nasıl yardımcı olabilirim?<br><br>";
  $question = readline("Soru: ");
  foreach ($questions as $index => $value) {
    if ($question == $value) {
      echo "Cevap: " . $answers[$index] . "<br><br>";
      break;
    }
  }
?>
