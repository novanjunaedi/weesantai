<style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table {
	width: 200px;
}

</style>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">List User</h1>
          </div>
			
		
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th max-width="20px" >User Id</th>
								<th>Nama</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>
							@foreach($user_data as $user)
							<tr>
								<td><a href="/user/{{$user->id}}/detail">{{$user->user_id}}</a></td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
							</tr>
							@endforeach
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
		

        </div>
        <!-- /.container-fluid -->
