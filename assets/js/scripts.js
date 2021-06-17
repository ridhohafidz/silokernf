	window.setTimeout("waktu()", 1000);
 
	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		$('#jam').html(waktu.getHours());
		$('#menit').html(waktu.getMinutes());
		$('#detik').html(waktu.getSeconds());
	}