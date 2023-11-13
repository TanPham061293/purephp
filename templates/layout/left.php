<h2> Danh mục sản phẩm  </h2>
<div class="box-left-menu">
	<ul class="list-btn-position show">
		<li>
			<a href="" title="Trang chủ" >
				Trang chủ
			</a>	
		</li>
		<li>
			<a href="gioi-thieu" title="Giới thiệu" >
				Giới thiệu
			</a>	
		</li>

		<li>
			<a href="dich-vu" title="Dịch vụ" >
				Dịch vụ
			</a>	
		</li>

		<li>
			<a href="san-pham" title="Sản phẩm" >
				Sản phẩm
			</a>			
			<ul>
			<?php foreach ($splistmenu as $key => $value) {
				$spcatmenu = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id from #_product_cat where id_list = ? and type = ? and hienthi > 0 order by stt,id desc",array($value['id'],'san-pham'));
			?>
				<li>
					<a href="<?=$value[$sluglang]?>" title="<?=$value['ten']?>" >
						<?=$value['ten']?>
					</a>
					<?php if(count($spcatmenu) > 0){ ?>
					<ul>
						<?php foreach ($spcatmenu as $key1 => $value1) {?>
							<li>
								<a href="<?=$value1[$sluglang]?>" title="<?=$value1['ten']?>" >
									<?=$value1['ten']?>
								</a>
							</li>
						<?php } ?>
					</ul>
					<?php }?>
				</li>
			<?php } ?>
			</ul>
		</li>

		<li>
			<a href="tin-tuc" title="Tin tức" >
				Tin tức
			</a>	
		</li>

		<li>
			<a href="lien-he" title="Liên hệ" >
				Liên hệ
			</a>	
		</li>


	</ul>
	<div class="box-menu-bottom-left">
		<p class="bottom-menu">
			<a href="check" title="Thông tin sản phẩm"> <i class="fas fa-info-circle"></i> Thông tin sản phẩm </a>
		</p>


		<p class="bottom-menu1">
			<a href="dia-diem-ban-hang" title="Địa điểm bán hàng"> <i class="fas fa-map-marker-alt"></i> Địa điểm bán hàng </a>
		</p>
	</div>

</div>
