	<!-- ---------------------Sidebar------------------------ -->
	<div class="sidebar">
		<div class="top-sidebar"></div>
		<div class="shortcut-links">
			{{-- <div class="dasar active"> --}}
			<div class="bar">
				<a href="/" class="{{ ($active === 'home')? 'active': '' }}">
					<img src="img/home1.png" alt="">
					<p>Home</p>
				</a>
			</div>
			<div class="bar">
				<a href="barang?active=dasar" class="{{ ($active === 'dasar')? 'active': '' }}">
					<img src="img/home1.png" alt="">
					<p>Psikologi Dasar</p>
				</a>
			</div>
			<div class="bar" >
				<a href="barang?active=menengah" class="{{ ($active == 'menengah')? 'active': '' }}">
					<img src="img/home1.png" alt="">
					<p>Psikologi Menengah</p>
				</a>
			</div>
			<div class="bar">
				<a href="barang?active=lanjut" class="{{ ($active == 'lanjut')? 'active': '' }}">
					<img src="img/home1.png" alt="">
					<p>Psikologi Lanjut</p>
				</a>
			</div>
		</div>
	</div>