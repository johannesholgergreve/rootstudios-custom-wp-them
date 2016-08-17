<?php
/*
Template Name: Prisberegner
*/
?>

<?php include("header.php") ?>




<div class="priceCalculatorHero priceCalculatorHeroSmaller" style="background-color: #2A5063;">
	<div class="container">
		<div id="priceCalculatorHeroTableCell">
			<div class="col-xs-5 col-md-9">
				<h1 class="smallHeroTitleH1" style="color: #FFFFFF; "><?php echo get_field("overskrift");?></h1>
			</div>
			<div class="col-xs-7 col-md-3 rightHeadingPrice">
				<div class="smallHeroTitlePrice">
					<p style="color: #FFFFFF; ">0</p>
				</div>
				
				<div class="singlePriceSubHeading">
					<p class="singlePriceSubHeading" style="color: #FFFFFF; ">Værdi:&nbsp; 0 &nbsp;DKK</p>
				</div>
			</div>
		</div>
	</div>
</div>



<div id="priceCalculatorWrap" class="container">
	<div class="col-md-12">
		<div class="clearfix"></div><br>
		
		<div class="priceCalculatorTable">
			<div class="priceTableText">
				<p>
					Skal du have et domæne?
					<span data-link="https://rootstudios.dk/faq/hvad-er-et-domaene/">i</span>
				</p>
			</div>
			<div class="priceTableRightSide">
				<div class="optionsBtn onOffBtn" data-name="Domæne" data-value="99">
					<div class="optionsBtnCircle"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>


		<div class="priceCalculatorTable">
			<div class="priceTableText">
				<p>
					Skal du have hosting?
					<span data-link="https://rootstudios.dk/faq/hvad-er-webhotel-og-hosting/">i</span>
				</p>
			</div>
			<div class="priceTableRightSide">
				<div class="optionsBtn onOffBtn" data-name="Hosting" data-value="588">
					<div class="optionsBtnCircle"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>


		<div class="priceCalculatorTable">
			<div class="priceTableTextSelectCount">
				<p>Hvor mange sider skal din hjemmeside indeholde?</p>
			</div>
			<div class="priceTableRightSide">
				<div class="selectPageCountBtn" data-name="1 - 5 sider" data-design-price="7200" data-dev-price="9600">
					<p>1 - 5</p>
				</div>
				<div class="selectPageCountBtn"  data-name="5 - 10 sider" data-design-price="10800" data-dev-price="14400">
					<p>5 - 10</p>
				</div>
				<div class="selectPageCountBtn" data-name="10 - 15 sider" data-design-price="13500" data-dev-price="18000">
					<p>10 - 15</p>
				</div>
				<div class="selectPageCountBtn" data-name="15+ sider" data-design-price="15525" data-dev-price="20700">
					<p>15 +</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="priceCalculatorTable">
			<div class="priceTableText">
				<p>
					Skal vi designe din hjemmeside?
					<span data-link="https://rootstudios.dk/faq/hvad-er-webdesign/">i</span>
				</p>
			</div>
			<div class="priceTableRightSide">
				<div id="designBtn" class="optionsBtn onOffBtn optDisabled" data-name="Webdesign" data-value="0">
					<div class="optionsBtnCircle"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="priceCalculatorTable">
			<div class="priceTableText">
				<p>
					Skal vi udvikle din hjemmeside?
					<span data-link="https://rootstudios.dk/faq/hvad-er-webudvikling/">i</span>
				</p>
			</div>
			<div class="priceTableRightSide">
				<div id="devBtn" class="optionsBtn onOffBtn optDisabled" data-name="Webudvikling" data-value="0">
					<div class="optionsBtnCircle"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>


		<div class="priceCalculatorTable">
			<div class="priceTableText">
				<p>
					Skal din hjemmeside tilpasse sig mobil, tablet og desktop?
					<span data-link="https://rootstudios.dk/faq/hvad-er-responsive-webdesign/">i</span>
				</p>
			</div>
			<div class="priceTableRightSide">
				<div class="optionsBtn onOffBtn optDisabled" data-name="Responsive" data-value="2400">
					<div class="optionsBtnCircle"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>


		<div class="priceCalculatorTable">
			<div class="priceTableText">
				<p>
					Skal du selv rette tekster, billeder og andet indhold?
					<span data-link="https://rootstudios.dk/faq/hvad-er-et-cms-system/">i</span>
				</p>
			</div>
			<div class="priceTableRightSide">
				<div class="optionsBtn onOffBtn optDisabled" data-name="CMS System" data-value="2400" >
					<div class="optionsBtnCircle"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>


		<div class="priceCalculatorTable">
			<div class="priceTableText">
				<p>
					Skal din hjemmeside integreres med sociale medier?
					<span data-link="https://rootstudios.dk/faq/hvad-er-et-cms-system/">i</span>
				</p>
			</div>
			<div class="priceTableRightSide">
				<div class="optionsBtn onOffBtn optDisabled" data-name="Social integration" data-value="1800">
					<div class="optionsBtnCircle"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>


		<div class="priceCalculatorTable">
			<div class="priceTableText">
				<p>
					Skal du have specialudviklet et ekstra modul?
					<span data-link="https://rootstudios.dk/faq/hvad-er-et-hjemmeside-modul/">i</span>
				</p>
			</div>
			<div class="priceTableRightSide">
				<div class="optionsBtn onOffBtn optDisabled" data-name="Ekstra Modul" data-value="12000">
					<div class="optionsBtnCircle"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>


		<div class="priceCalculatorTable">
			<div class="priceTableText">
				<p>
					Skal du modtage betaling med kreditkort på din hjemmeside?
					<span data-link="https://rootstudios.dk/faq/hvad-er-et-betalingsmodul/">i</span>
				</p>
			</div>
			<div class="priceTableRightSide">
				<div class="optionsBtn onOffBtn optDisabled" data-name="Betalingsmodul" data-value="6000">
					<div class="optionsBtnCircle"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>


		<div class="priceCalculatorTitle">
			<h3>Tilkøbsprodukter</h3>
		</div>	

		<div class="clearfix"></div><br>

		<div class="extraProductsWrap">
			<div class="priceCalculatorTableExtra">
				<div class="priceTableText">
					<p>
						Vil du have SEO optimeret din hjemmeside?
						<span data-link="https://rootstudios.dk/faq/hvad-er-seo-optimering/">i</span>
					</p>
				</div>
				<div class="priceTableRightSide">
					<div class="optionsBtn onOffToggleBtnSEO optDisabled" data-name="SEO optimering" data-value="3450">
						<div class="optionsBtnCircle"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="TableExtraToggle">
				<div class="col-md-12">
					<div class="radioBtnSEO" data-name="SEO Starter" data-value="3450"></div>
					<h5>SEO / Starterpakke &nbsp;- &nbsp;3.450 &nbsp;<span>DKK</span></h5>
					<p>(Betales som engangsbeløb)</p>	
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12">
					<div class="radioBtnSEO" data-name="SEO Basis abn." data-value="2990"></div>
					<h5>SEO / Basis abonnement &nbsp;- &nbsp;2.990 &nbsp;<span>DKK / Måned</span></h5>
					<p>(Betales hver måned)</p>	
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12">
					<div class="radioBtnSEO" data-name="SEO Pro abn." data-value="5950"></div>
					<h5>SEO / Pro abonnement &nbsp;- &nbsp;5.950 &nbsp;<span>DKK / Måned</span></h5>
					<p>(Betales hver måned)</p>	
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="extraProductsWrap">
			<div class="priceCalculatorTableExtra">
				<div class="priceTableText">
					<p>
						Vil du have løbende support til din hjemmeside?
						<span data-link="https://rootstudios.dk/faq/vores-mail-telefonsupport/">i</span>
					</p>
				</div>
				<div class="priceTableRightSide">
					<div class="optionsBtn onOffToggleBtnSupport optDisabled" data-name="Support" data-value="599">
						<div class="optionsBtnCircle"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="TableExtraToggle">
				<div class="col-md-12">
					<div class="radioBtnSupport" data-name="Basis Support" data-value="599"></div>
					<h5>Supportaftale / Basis &nbsp;- &nbsp;599 &nbsp;<span>DKK / Måned<span></h5>
					<p>(Betales hver måned)</p>	
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12">
					<div class="radioBtnSupport" data-name="Udvidet Support" data-value="1499"></div>
					<h5>Supportaftale / Udvidet &nbsp;- &nbsp;1.499 &nbsp;<span>DKK / Måned</h5>
					<p>(Betales hver måned)</p>	
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<a href="https://rootstudios.dk/prisberegner-indsendelse/" id="continueBtn" class="productHeroBtn">Fortsæt</a>
	
	</div>
</div>



<?php include("footer.php") ?>



