<?php
//pdo da veritabanı bağlantısı
try {
     $db = new PDO("mysql:host=localhost;dbname=test", "root", "123456");
} catch ( PDOException $e ){
     print $e->getMessage();
}
//karakter seti ayarlama
$db = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "123456");
//pdo da select işlemi
$query = $db->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
          print $row['kulanici_adi']."<br />";
     }
}
//pdo da insert işlemi
$query = $db->prepare("INSERT INTO uyeler SET
uye_adi = ugur,
uye_sifre = 12345,
uye_eposta = ugur@gmail.com");
$insert = $query->execute(array(
     "Tayfun Erbilen", "123456", "ugur6057@gmail.com"
));
if ( $insert ){
    $last_id = $db->lastInsertId();
    print "insert işlemi başarılı!";
}

//pdo da update işlemi
$query = $db->prepare("UPDATE uyeler SET
uye_kadi = :yeni_kadi
WHERE uye_kadi = :eski_kadi");
$update = $query->execute(array(
     "yeni_kadi" => "prototürk",
     "eski_kadi" => "Tayfun Erbilen"
));
if ( $update ){
     print "güncelleme başarılı!";
}
//pdo da silme işlemi
$delete = $db->exec("DELETE FROM uyeler");
print 'Toplam '.$delete.' üye silindi!';
//pdo da veritabanı sonlandırma
$db = null;



//Object Mapping
//Pdo veri çekme olayı

class Uye {
   
   public function adsoyad(){
      return $this->uye_ad . ' ' . $this->uye_soyad;
   }

   public function rutbe(){
      if ( $this->uye_rutbe == 1 )
         return 'Yönetici';
      else
         return 'Üye';
   }

}


$query = $db->query("SELECT * FROM uyeler");
$query->setFetchMode(PDO::FETCH_CLASS, 'Uye');

foreach ( $query as $row ){
   print $row->adsoyad() . ': ' . $row->rutbe() . '<br />';
}
?>
