autoUpdate Class
==========
Sınıf yardımı ile oluşturmuş olduğunuz projeleri uzaktan otomatik olarak güncelleştire bilirsiniz yapmanız gereken tek şey sınıf adresini ve uzaktaki adresini belirlemektir.
ardından belirleyeceğiniz güncelleme tarihi daha doğrusu etiketi ile otomatik kontrolü sınıf sağlayacak daha detaylı anlamak için örneği inceleye bilirsiniz.

Kullanımı
=========
Sınıfı dahil edelim ve calıştıralım
``` php
require_once "autoUpdate.class.php";
$autoUpdate=new autoUpdate;

```
Ardından 2 adet method ve 1 adet fonksiyon kullanmamız gerekecek bunlardan birincisi " sourceurl " burada karşı taraftaki adresimizi yazacağız. ( direk dosyanın kaynağı olmalı )
``` php
$autoUpdate->sourceurl="https://gist.githubusercontent.com/saltun/f0232a87c4cdc272ac70/raw/63c290ed54d0b98ab6ae7832052f0ca2aeb7fd38/testClass.php";
```
ben örnek olarak "testClass.php" adında bir dosyadan gideceğim örneği example klasöründe bulabilirsiniz.

bir sonraki methodumuz ise bizim dosyamızın yolu olmalı bunun için ise " file " methodunu kullanacağız.
``` php
$autoUpdate->file="testClass.php";
```
son olarak kontrolü aktif etmek için fonksiyonumuzu calıştıralım
``` php
$autoUpdate->control();
```

eğer güncelleme var mı yokmu diye merak ediyor ve bunu göstermek istiyor iseniz if sorgusu ile bunu yapa bilirsiniz örnek
``` php
if ($autoUpdate) {
	echo "Update";
}
```

İletişim
=========
Author : Savaş Can Altun
Mail : savascanaltun@gmail.com
Web : http://savascanaltun.com.tr