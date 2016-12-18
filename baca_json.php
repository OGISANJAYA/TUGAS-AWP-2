<!DOCTYPE html>
<html>
	<head>
		<title>
			baca data json dari data encoding andi
		</title>
	</head>
	<body>
		<div id="demo"></div>
	</body>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript">
			var source = "http://awp2-andi.esy.es/rubah_ke_json.php";
			$.getJSON(source, function(data){
				$("#demo").append("<table border='1'>");
				$("#demo table").append("<tr><td>No.</td><td>nama</td><td>ttl</td><td>jns_kelamin</td><td>alamat</td><td>rt/rw</td><td>kel/desa</td></tr>");
				$.each(data, function(i,ktp){
					$("#demo table").append(
						"<tr><td>" + (i + 1) + ". " + "</td><td>" + ktp.nama + "</td>" +
						"<td>" + ktp.ttl +  "</td>" +
						"<td>" + ktp.jnskelamin +  "</td>" +
						"<td>" + ktp.alamat +  "</td>" +
						"<td>" + ktp.rtrw +  "</td>" +
						"<td>" + ktp.keldesa +  "</td></tr>"
					);
				});
				$("#demo").append("</table>");
			});
		</script>
</html>