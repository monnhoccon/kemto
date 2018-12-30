<?php
/**Config File Bot
* Pastikan snif/ambil capture di path /apps/daily_khaber/api/add_coin.php (untuk daily khaber)
* /apps/news/api/add_coin.php (untuk newsline)
* ambil data yang di perlukan sebagai berikut
* token
* session
* data (pada request header body copy semua)
* Dan apabila session sudah expired
* Silahkan snif lagi data capture nya
* Cukup ganti session dan data aja, token masih sama
/*
/** Config bot Daily Khaber */
//contoh pengisian token
//$khaber_token='cukup isi token yg didapat dari capture';
$khaber_token='uyYrfsWOSO2LMkWwKFO7f';
//contoh penisian sessiony
//$khaber_session='Etxxxxxxxxxxxxxx==';
$khaber_session='WRaIfTYrJdKhVl+nYYLPfQ==';
//contoh pengisian data
//$khaber_data='data=xxxxxxx&d_info=xxxxxxxxxx';
$khaber_data='YeNLZytaGpCTNsh8Di0CAg==&d_info=3r0vfhWfKOGaTTFsTy26dnRMz5PT3tWbmGccaSySb1pGQ+76YPMFm811DaIatu2q5Vj4U9wyO3RP3Da/xj4CmKpZ13lPq6th/x41li1/joth40tnK1oakJM2yHwOLQIC';
/** Config bot News Line */
//contoh pengisian token
//$news_token='cukup isi token yang di dapat dari capture';
$news_token='GVQhmBR2x2ajnyiSbfxjU';
//contoh penisian session
//$news_session='Etxxxxxxxxxxxxxx==';
$news_session='HmyGiXwxVpv6HsOkbrAGtg==';
//contoh pengisian data
//$news_data='data=xxxxxxx&d_info=xxxxxxxxxx';
$news_data='WNWBm7EpN4ww8LcxiQsl5Q==&d_info=GduYEGUaKeo4NvWiPl96u5VVWZsm9iaYc0jkqx5yV/Qsx0mbbDlog0BFQv0G++Gpbck/fpK7ugFNdlT9/xUQtbC7ZKEzQU2+mvUYFSYC+6ZY1YGbsSk3jDDwtzGJCyXl';
?>
