   
	<div class="row form-group">
		<p class="text-danger" id=""></p>
		<label class="col-sm-3 col-form-label">Username</label>		
		<div class="col-sm-9">
			<input class="form-control" type="text" name="username" id="username" placeholder="Username" required >
		</div>
	</div>
	<div class="row form-group">
		<p class="text-danger" id=""></p>
		<label class="col-sm-3 col-form-label">Email</label>		
		<div class="col-sm-9">
			<input class="form-control" type="text" name="email" id="email" placeholder="Email" required >
		</div>
	</div>
	
	<div class="row form-group">
		<p class="text-danger" id=""></p>
		<label class="col-sm-3 col-form-label">Level</label>		
		<div class="col-sm-9">
			<select name="level_user" id="level_user" class="col-12 form-control" required>
				<option value="">Pilih</option>
				<?=$this->lookUpLevelUser?>
			</select>
		</div>
	</div>
	
	<div class="row form-group">
		<p class="text-danger" id=""></p>
		<label class="col-sm-3 col-form-label">Status</label>		
		<div class="col-sm-9">
			<select name="status" id="status" class="col-12 form-control" required>
				<option value="active">Aktif</option>
				<option value="">Tidak Aktif</option>
			</select>
		</div>
	</div>
	
	<input type="hidden" name="id" id="id" >
