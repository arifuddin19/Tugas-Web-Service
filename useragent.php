<?php					//script utk menampilkan user agent
						//User Agent adalah script yang dikirimkan oleh web browser
						//ke web server yang kita tuju, atau ke setiap situs yang kita
						//kunjungi, jadi setiap situs yang kita kunjungi dapat mengetahui
						//browser dan sistem operasi yang kita gunakan sehingga
						//konten dapat disesuaikan dengan jenis sistem operasi kita.
	
	\echo "this request made by: ".
	filter_var($_SERVER['HTTP_USER_AGENT'],FILTER_SANITIZE_STRING);
?>