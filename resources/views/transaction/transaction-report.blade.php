<style>
	#customers {
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}
	
	#customers td, #customers th {
	  border: 1px solid #ddd;
	  padding: 8px;
	}
	
	#customers tr:nth-child(even){background-color: #f2f2f2;}
	
	#customers tr:hover {background-color: #ddd;}
	
	#customers th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #ffb300;
	  color: white;
	}
	</style> 
	 

	 <img src="img/ic_logo.png" width="170" height="60" alt="">
	 <center>
				<h3>Daftar Transaksi berhasil User di Weensantai.id</h3>
	</center>
			<hr>
				
				<table id="customers">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>email</th>
                        <th>Jenis Pembayaran</th>
                        <th>Nama Destinasi</th>
                        <th>Harga</th>
                        <th>tanggal pembelian</th>
                        <th>tiket valid hingga</th>
                    </tr>
					@php
						$nomer=1;
					@endphp
				 @foreach($trans_data as $transaksi)
                 <tr>
                     <td>{{$nomer}}</td>
                     <td>{{$transaksi->name}}</td>
                     <td>{{$transaksi->email}}</td>
                     <td>{{$transaksi->payment}}</td>
                     <td>{{$transaksi->destination_name}}</td>
                     <td>{{$transaksi->price}}</td>
                     <td>{{$transaksi->buy_date}}</td>
                     <td>{{$transaksi->valid_until}}</td>
                 </tr>
                 $nomer++;
                 @endforeach
				</table>
		

        </div>