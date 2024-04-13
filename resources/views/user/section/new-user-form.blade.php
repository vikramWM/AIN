<form id="" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" enctype="multipart/form-data" action="{{ route('usercreate') }}">
						@csrf
						
						<div class="card-body border-top p-9">
							<!-- ... (other form fields) -->
							<div class="row mb-6">
								<label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
								<div class="col-lg-8">
									<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
										<div class="image-input-wrapper w-125px h-125px" style="background-image:  url(assets/media/avatars/blank.png)"></div>
										<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
											<i class="bi bi-pencil-fill fs-7"></i>
											<input type="file" name="photo" accept=".png, .jpg, .jpeg">
										</label>
										<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
											<i class="bi bi-x fs-2"></i>
										</span>
										<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
											<i class="bi bi-x fs-2"></i>
										</span>
									</div>
									<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
								</div>
							</div>
							<!-- ... (other form fields) -->


							<div class="row mb-12">
								<label class="col-lg-4 col-form-label required fw-bold fs-6">Name</label>
								<div class="col-lg-8">
									<div class="row">
										<div class="col-lg-12 fv-row fv-plugins-icon-container">
											<input required type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Name"  value="">
										<div class="fv-plugins-message-container invalid-feedback"></div></div>
										
									</div>
								</div>
							</div>
							<div class="row mb-6">
								<label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
								<div class="col-lg-8 fv-row fv-plugins-icon-container">
									<input required type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Youremail@gmail.com"  >
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
							</div>

                            <div class="row mb-6">
								<label class="col-lg-4 col-form-label required fw-bold fs-6">Role</label>
								<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <select required name="role" aria-label="Select a Language" data-control="select2" data-placeholder="Role" class="form-select form-select-solid form-select-lg select2-hidden-accessible" data-select2-id="select2-data-13-mh4q" tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="select2-data-15-jtqd"></option>
                                    @foreach($data['role'] as $role)
									<option value="{{ $role->id}}" >{{ $role->role}}</option>
                                    @endforeach
                                </select>
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
							</div>
							<!-- Country Code input -->
							<div class="row mb-6">
								<label class="col-lg-4 col-form-label fw-bold fs-6">Primary Country Code</label>
								<div class="col-lg-8 fv-row fv-plugins-icon-container">
									<input type="text" name="country_code" class="form-control form-control-lg form-control-solid" placeholder="Primary Country Code">
									<div class="fv-plugins-message-container invalid-feedback"></div>
								</div>
							</div>
							<div class="row mb-6">
								<label class="col-lg-4 col-form-label fw-bold fs-6">
									<span class="required">Primary Mobile Number</span>
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i>
								</label>
								
								<div class="col-lg-8 fv-row fv-plugins-icon-container">
									<input required type="tel" name="primary_mobile" class="form-control form-control-lg form-control-solid" placeholder="Primary Mobile Number" >
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
							</div>
							<!-- Country Code input -->
							<div class="row mb-6">
								<label class="col-lg-4 col-form-label fw-bold fs-6">Secondary Country Code</label>
								<div class="col-lg-8 fv-row fv-plugins-icon-container">
									<input type="text" name="country_code2" class="form-control form-control-lg form-control-solid" placeholder="Secondary Country Code">
									<div class="fv-plugins-message-container invalid-feedback"></div>
								</div>
							</div>

							<!-- Secondary Mobile Number input with Country Code -->
							<div class="row mb-6">
								<label class="col-lg-4 col-form-label fw-bold fs-6">Secondary Mobile Number</label>
								<div class="col-lg-8 fv-row fv-plugins-icon-container">
									<input type="tel" name="secondary_mobile" class="form-control form-control-lg form-control-solid" placeholder="Secondary Mobile Number">
									<div class="fv-plugins-message-container invalid-feedback"></div>
								</div>
							</div>

                            <div class="row mb-6">
								<label class="col-lg-4 col-form-label fw-bold fs-6">
									<span class="required">Address</span>
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i>
								</label>
								<div class="col-lg-8 fv-row fv-plugins-icon-container">
									<input  type="text" name="address" class="form-control form-control-lg form-control-solid" placeholder="Enter YOur Address" >
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
							</div>
							
						</div>
						<div class="card-footer d-flex justify-content-end py-6 px-9">
							<!-- <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button> -->
							<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
						</div>
					<input type="hidden">
					<div>

					</div>
				</form>