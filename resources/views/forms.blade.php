<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form action="" method="post" class="form-horizontal">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" @if(isset($nama)) value="{{ $nama }}" @endif>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" @if(isset($email)) value="{{ $email }}" @endif>
					</div>
					<button type="submit" class="btn btn-warning">Submit</button>
					<br>
					<br>
					<label>Jenis Kelamin</label>
					<div class="radio">
						<input type="radio" name="gender" value="Male" @if(isset($gender)) && $gender == "Male" checked= @endif>Male
					</div>
					<div class="radio">
						<input type="radio" name="gender" value="Female" @if(isset($gender)) && $gender == "Female" checked= @endif>Female
					</div>
					<div class="radio">
						<input type="radio" name="gender" value="Other" @if(isset($gender)) && $gender == "Other" checked= @endif>Other
					</div>
					<br>
					<br>
					<div class="form-group">
						<label for="hobby">
							<label>HOBBY</label>
							<p>Bisa Pilih Lebih Dari satu</p>
						</label>
						<br>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="hobby[]" value="Motoran" @if(isset($hobby) && in_array('Motoran', $hobby)) checked @endif>Motor
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="hobby[]" value="jalan-jalan" @if(isset($hobby) && in_array('jalan-jalan', $hobby)) checked @endif>jalan-jalan
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="hobby[]" value="Basket" @if(isset($hobby) && in_array('Basket', $hobby)) checked @endif>Basket
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="hobby[]" value="Belanja" @if(isset($hobby) && in_array('Belanja', $hobby)) checked @endif>Belanja
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="hobby[]" value="Badminton" @if(isset($hobby) && in_array('Badminton', $hobby)) checked @endif>Badminton
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="hobby[]" value="Masak" @if(isset($hobby) && in_array('Masak', $hobby)) checked @endif>Masak
							</label>
						</div>		
					</div>
					
					
					<br>
					<br>

				</form>
				
				<label>Data Diri</label>
				<br>

				@if(isset($nama))
					Halo {{ $nama }}
				@endif
				<br>
				@if(isset($email))
					Email kamu {{ $email }}
				@endif
				<br>
				@if(isset($gender))
				Kamu seorang : 
					@if ($gender == "Male")
					Laki-Laki
					@elseif ($gender == "Female")
					Perempuan
					@else
					ngak jelas
					@endif
				@endif
				<br>
				@if(isset($hobby))
				Hobby mu : 
				@foreach ($hobby as $hoby)
				<br>
				:: {{ ucwords($hoby) }}
				@endforeach
				@endif
				
				<br>
				<br>
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
</body>
</htm



