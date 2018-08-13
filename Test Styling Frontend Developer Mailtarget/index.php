<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/iconmonstr-iconic-font.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/index.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title></title>
</head>
<body>

	<!-- Header -->
	<div class="row white" style="padding: 10px; margin: 0;">
		<div class="col s4" >
			<div class="x grey-text"></div>
		</div>
		<div class="col s4 center">
			<a href="#!" class="breadcrumb">Create</a>
			<a href="#!" class="breadcrumb currBreadcrumb">Compose</a>
		</div>
		<div class="col s4 right-align">
			<div class="btn-flat btn-simpan"><i class="material-icons" style="vertical-align: top;">save</i>Simpan</div>
			<div class="btn-flat btn-publish">Publish</div>
		</div>
	</div>

	<!-- Content -->
	<div class="row" id="contents" style="margin: 0; background-color: #edf1f1;">

		<!-- Left Side -->
		<div class="col s12 m3 content-left" style="padding: 0; border-right: 1px solid #becece;">
			<div class="white-text" style="background-color: #364561;">
				<h6 style="margin: 0; padding: 15px;">Setting</h6>
			</div>
			<!-- Choosing Social Media -->
			<div style="padding: 15px;">
				<div class="card">
					<div class="card-content" style="padding: 5px 20px;">
						<span class="card-title" style="font-weight: 500; font-size: 1.2rem;">Choose Social Media</span>
					</div>
					<div class="card-action" style="padding: 10px;">
						<div class="row">
							<div class="col s12 m12 l2 center">
								<a href="" style="line-height: 75px; padding: 0; margin: 0;"><i class="tiny im im-twitter white-text blue" style="border-radius: 50%; padding: 10px;"></i></a>
							</div>
							<div class="col s12 m12 l8 center">
								<div class="input-field" style="padding: 0 10px; border: 1px solid #becece; border-radius: 5px;">
									<select>
										<option value="" disabled hidden selected>@sugengsr</option>
										<option value="gvnards">@gvnards</option>
										<option value="gvnardsx">@gvnardsx</option>
									</select>
								</div>
							</div>
							<div class="col s12 m12 l2 center">
								<a href="" class="grey-text" style="line-height: 90px; padding: 0; margin: 0;"><i class="small material-icons">delete</i></a>
							</div>
							<div class="col s12 center">
								<div class="btn-flat white-text btn-add" style="width: 100%;">Add</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Form -->
				<form class="center" style="padding: 10px 0;">
					<div class="input-field">
						<input type="text" name="campaignName" placeholder="Masukkan Nama Campaign" class="validate" style="margin: 20px 0;">
						<label for="campaignName" class="black-text" style="font-size: 1.25rem;">Campaign Name <span class="red-text">*</span></label>
					</div>
					<div class="input-field" style="position: relative;">
						<div style="position: absolute; right: 0; top: -24px; z-index: 2;">
							<div class="btn right off">Off</div>
							<div class="btn right on">On</div>
							<div class="clearfix"></div>
						</div>
						<input type="text" name="scheduler" placeholder="2018-04-27 14:30" class="validate" style="margin: 20px 0;">
						<label for="scheduler" class="black-text" style="font-size: 1.25rem;">Scheduler <a href="" class="tooltipped im im-question grey-text text-darken-3" data-position="right" data-tooltip="Lorem ipsum dolor sit amet,<br>consectetur adipisicing elit,<br>sed do eiusmod
						tempor incididunt<br>ut labore et dolore magna aliqua."></a>
						</label>
					</div>
					<div class="input-field">
						<input type="text" name="tag" placeholder="Buat atau pilih tag" class="validate" style="margin: 20px 0;">
						<label for="tag" class="black-text" style="font-size: 1.25rem;">Tag <a href="" class="tooltipped im im-question grey-text text-darken-3" data-position="right" data-tooltip="Lorem ipsum dolor sit amet,<br>consectetur adipisicing elit,<br>sed do eiusmod
						tempor incididunt<br>ut labore et dolore magna aliqua."></a>
						</label>
					</div>
				</form>
			</div>
		</div>

		<!-- Middle -->
		<div class="col s12 m5 content-middle" style="padding: 15px; border-right: 1px solid #becece;">
			<!-- Upload Image -->
			<div class="card" style="padding: 15px; padding-top: 0;">
				<!-- Button -->
				<div class="buttons center">
					<a href="#" class="btn-small grey darken-4"><i class="material-icons">chevron_left</i></a>
					<a href="#" class="btn-small grey darken-4"><i class="material-icons">chevron_right</i></a>
					<a href="#" class="btn-small grey darken-4"><i class="material-icons">delete</i></a>
				</div>
				<!-- Show Image -->
				<div class="row show-image">
					<div class="col s10 center" style="border: 1px dashed #becece; padding: 10px 0;">
						<img src="img/img-1.png" style="width: 150px; border: 1px dashed #becece;">
						<img src="img/img-2.png" style="width: 150px; border: 1px dashed #becece;">
						<img src="img/img-3.png" style="width: 150px; border: 1px dashed #becece;">
					</div>
					<div class="col s2" style="min-height: 150px; line-height: 150px;">
						<a href="#" class="btn-flat grey lighten-2 white-text" style="position: relative; padding: 0;"><i class="material-icons">chevron_left</i></a>
					</div>
				</div>
				<p><span class="red-text">*</span> Upload media maksimal 3 gambar</p>
				<p><span class="red-text">*</span> Ukuran file maksimal 1MB, ukuran frame maksimal 1280x720</p>
				<p><span class="red-text">*</span> Penyuntingan media berlaku untuk semua social media yang aktif</p>
			</div>
			<!-- Upload Caption -->
			<div class="card" style="padding: 15px;">
				<div class="input-field">
					<div style="border: 1px solid #becece; padding: 10px; padding-bottom: 30px; border-radius: 5px; min-height: 200px;">
						<textarea id="caption" class="materialize-textarea" data-length="280" style="height: 175px;">Halo teman-teman, ini nih tas baru kita yang pernah kita janjikan rilis bulan ini. Yuk check bio :)</textarea><a href="" class="black-text"><i class="small material-icons" style="position: absolute;left: 10px; bottom: 5px;">mood</i></a>
					</div>
					<span style="float: right">Saved Caption <a class="black-text" href="" style="vertical-align: middle;"><i class="tiny material-icons">add_box</i></a></span>
					<span class="clearfix"></span>
				</div>
			</div>
			<!-- Update Preview -->
			<div class="right-align">
				<a class="btn-flat white-text btn-update">Update Preview</a>
			</div>
		</div>

		<!-- Right Side -->
		<div class="col s12 m4 content-right" style="padding: 0; background-color: #859595;">
			<div class="white-text" style="background-color: #364561;">
				<h6 style="margin: 0; padding: 15px;">Preview</h6>
			</div>
			<div style="padding: 30px;">
				<div class="card">
					<div class="card-content grey lighten-3" style="padding: 10px;">
						<div class="row" style="margin: 0;">
							<div class="col s2 center">
								<i class="im im-twitter blue-text" style="vertical-align: middle;"></i>
							</div>
							<div class="col s9">
								<span>@sugengsr</span>
							</div>
						</div>
					</div>
					<div class="card-action">
						<div class="row">
							<div class="col s1 center">
								<img src="img/thumbsup.png" alt="photo profile" class="circle grey darken-1" style="width: 40px; height: 40px;">
							</div>
							<div class="col s11">
								<div class="account-name" style="padding-left: 15px;">
									<span style="font-weight: bold;">Sugeng Sarasvati</span>
									<span class="grey-text text-darken-1"></span>
								</div>
								<div class="account-tweet" style="padding: 0 15px;">
									<p>Halo teman-teman, ini nih tas baru kita yang pernah kita janjikan rilis bulan ini. Yuk check bio :)</p>
								</div>
								<div class="row" style="margin: 0 15px; border-radius: 15px; overflow: hidden;">
									<div class="col s12 m12 l6" style="padding: 0;">
										<img src="img/img-1.png" style="height: 200px; width: 175px;">
									</div>
									<div class="col s12 m12 l6" style="padding: 0;">
										<img src="img/img-2.png" style="height: 97.5px; width: 175px;">
									</div>
									<div class="col s12 m12 l6" style="padding: 0;">
										<img src="img/img-3.png" style="height: 97.5px; width: 175px;">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>