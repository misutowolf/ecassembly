                <div class="col-md-3">
					<div class="sidebar-box">
						<img src="<?php bloginfo('template_directory'); ?>/img/promo.png" />
					</div>
					<div class="sidebar-box">
						<div class="sidebar-box-title">
							Fast Quote
						</div>
						<div class="sidebar-box-content">
							<form role="form" id="comparisonForm">
								<div class="form-group">
									<label for="inputCost">Your Furniture Cost (<b>Full</b> Price)</label>
									<div class="input-group">
										<span class="input-group-addon">$</span>
										<input type="text" class="form-control" id="inputCost" placeholder="100">
										<span class="input-group-addon">.00</span>
									</div>
									<button class="btn btn-warning btn-sidebar" type="submit">Compare</button>
								</div>
							</form>
                            <div class="sidebar-compare-box">
                                <form role="form" id="resultComparison">
                                    <div class="form-group">
                                        <label for="ourCost">Our Cost</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control" id="ourCost" placeholder="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="theirCost">Competitor Cost</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control" id="theirCost" placeholder="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="theSavings">Your Savings:</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control" id="theSavings" placeholder="" disabled>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
				</div>