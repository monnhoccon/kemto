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
$khaber_token='gDljrwFqTFmuxZq7sznIi';
//contoh penisian sessiony
//$khaber_session='Etxxxxxxxxxxxxxx==';
$khaber_session='z8yvq203shqkznbu';
//contoh pengisian data
//$khaber_data='data=xxxxxxx&d_info=xxxxxxxxxx';
$khaber_data='data=fKggr9YxaHfiAW9QfiHxKSpzYqeZiysR/xmA9UoJpD4=&d_info=x/uqcEEu+mOGurIsGIjI77CFPq2umyBDhi8tQaRjKg+OXc3GuhQ4J85FX7z7wDDIA4kcW1P75wEUgJOhd1DddxFpX4iOE6QgDzmoN9kQ/9I=';
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
