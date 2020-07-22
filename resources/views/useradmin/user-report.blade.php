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
				<h3>Daftar User Terdaftar di Weensantai.id</h3>
	</center>
			<hr>
				
				<table id="customers">
				  <tr>
					<th>No</th>
					<th>User Id</th>
					<th>Nama</th>
					<th>Email</th>
				  </tr>
					@php
						$nomer=1;
					@endphp
				  @foreach($user_data as $user)
				  <tr>
					  <td>{{$nomer}}</td>
					  <td><a href="/user/{{$user->id}}/detail">{{$user->user_id}}</a></td>
					  <td>{{$user->name}}</td>
					  <td>{{$user->email}}</td>
				  </tr>
				  @php $nomer++ @endphp
				  @endforeach
				</table>
		

        </div>