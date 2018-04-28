						<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Static &amp; Dynamic Tables
								</small>
							</h1>
						</div><!-- /.page-header -->
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Kuisioner Dosen </a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Kuisioner Manajemen</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Kuisioner Mahasantri</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Simpan</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home"><div class="row">
    	<div class="col-xs-7"><h3>Dosen</h3></div>
    	<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
										<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover" >
											<thead >
												<tr >
													<th class="detail-col" bgcolor="aqua">No</th>
													<th bgcolor="aqua">Pertanyaan</th>
													<th bgcolor="aqua" colspan="5" class="center">Pilihan</th>
													
												</tr>
											</thead>
											<tbody>
												<?php
									            $start = 0;
									            foreach ($tb_pertanyaan_data as $tb_pertanyaan)
									            {
									                ?>
									                <tr>											
													
													<td >
														<?php echo ++$start ?>
													</td>

													<td>
														<?php echo $tb_pertanyaan->pertanyaan ?>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '1') ?></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '2') ?></span>
													</td>
													<td><input type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '3') ?></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '4') ?></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '5') ?></span>
													</td>
												</tr>
    <?php
            }
            ?>
											</tbody>
										</table>
										<button type="submit" class="btn btn-info">Save</button>
										<button class="btn btn-danger">Next</button>
									</div><!-- /.span -->
								</div><!-- /.row -->
								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
    		</div>
    	</div>
    <div role="tabpanel" class="tab-pane" id="profile"><div class="row">
    	<div class="col-xs-7"><h3>Manajeman</h3></div>
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover" >
											<thead>
												<tr>
													<th bgcolor="aqua" class="detail-col">No</th>
													<th bgcolor="aqua">Pertanyaan</th>
													<th bgcolor="aqua" colspan="5" class="center">Pilihan</th>
													
												</tr>
											</thead>

											<tbody>
												<tr>
													
													<td class="center">
														1
													</td>

													<td>
														<a href="#">Siapa pencipta dari PHP ?</a>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td><input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
												</tr>

												<tr><td class="center">
													2
													</td>

													<td>
														<a href="#">Siapa pencipta dari PHP ?</a>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td><input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
												</tr>
												<tr>
													<td class="center">
														3
													</td>

													<td>
														<a href="#">Siapa pencipta dari PHP ?</a>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td><input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
												</tr>
												<tr>
													<td class="center">
													4
													</td>
													<td>
														<a href="#">Siapa pencipta dari PHP ?</a>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td><input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
												</tr>
												<tr>
													<td class="center">
														5
													</td>
												<td>
														<a href="#">Siapa pencipta dari PHP ?</a>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td><input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
												</tr>
											</tbody>
										</table>
										<button class="btn btn-info">Save</button>
										<button class="btn btn-danger">Next</button>
									</div><!-- /.span -->
								</div><!-- /.row -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row --></div>
    <div role="tabpanel" class="tab-pane" id="messages"><div class="row">
    	<div class="col-xs-7"><h3>Mahasantri</h3></div>
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover" >
											<thead>
												<tr>
													<th bgcolor="aqua" class="detail-col">No</th>
													<th bgcolor="aqua">Pertanyaan</th>
													<th bgcolor="aqua" colspan="5" class="center">Pilihan</th>
													
												</tr>
											</thead>

											<tbody>
												<tr>
													
													<td class="center">
														1
													</td>

													<td>
														<a href="#">Siapa pencipta dari PHP ?</a>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td><input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
												</tr>

												<tr><td class="center">
													2
													</td>

													<td>
														<a href="#">Siapa pencipta dari PHP ?</a>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td><input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
												</tr>
												<tr>
													<td class="center">
														3
													</td>

													<td>
														<a href="#">Siapa pencipta dari PHP ?</a>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td><input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
												</tr>
												<tr>
													<td class="center">
													4
													</td>
													<td>
														<a href="#">Siapa pencipta dari PHP ?</a>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td><input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
													<td>
														<input type="radio" class="ace" />
														<span class="lbl"></span>
													</td>
												</tr>
											</tbody>
										</table>
										<button class="btn btn-info">Save</button>
										<button class="btn btn-danger">Next</button>
									</div><!-- /.span -->
								</div><!-- /.row -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row --></div>
    <div role="tabpanel" class="tab-pane" id="settings">
    	<button class="btn btn-info">Simpan</button>
    	<button class="btn btn-danger">Back</button>
    </div>
  </div>




						