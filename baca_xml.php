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
			var source = "http://awp2-andi.esy.es/rubah_ke_XML.php";
			$.ajax({
				url : source,
				method : 'GET',
				success : function(xml){
						$("#demo").append("<table border='1'>");
						$("#demo table").append("<thead><tr><td>No.</td><td>Nama</td><td>Ttl</td><td>Jenis kelamin</td><td>Alamat</td><td>Rt/Rw</td><td>Kel/Desa</td></tr></thead><tbody></tbody>");
						$(xml).find('ktp').each(function(i){
							var row = $(this);
							$("#demo table tbody").append(
								"<tr><td>"+(i+1)+"</td><td>" + row.find('nama').text() + "</td>" +
								"<td>" + row.find('ttl').text() +  "</td>" +
								"<td>" + row.find('jnskelamin').text() +  "</td>" +
								"<td>" + row.find('alamat').text() +  "</td>" +
								"<td>" + row.find('rtrw').text() +  "</td>" +
								"<td>" + row.find('keldesa').text() +  "</td></tr>"
							);
						});
						$("#demo").append("</table>");
				},
				error : function(data){
					alert(data);
				}
			});
		</script>
</html>