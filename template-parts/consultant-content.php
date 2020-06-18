<div class="cahnrswsuwp-c-dir__profile-consultant">
	<div class="cahnrswsuwp-c-dir__profile-consultant__service-type__wrapper">
		<h2 class="cahnrswsuwp-c-dir__profile-consultant__section-title">Service Type</h2>
		<ul class="cahnrswsuwp-c-dir__profile-consultant__service-type__details">
			<?php if ( ! empty( $consultant->get_option( '_service_forestry' ) ) ) : ?><li class="cahnrswsuwp-c-dir__profile-consultant__service-type">
				Forestry Consultant
			</li><?php endif; ?>
			<?php if ( ! empty( $consultant->get_option( '_service_silvicultural' ) ) ) : ?><li class="cahnrswsuwp-c-dir__profile-consultant__service-type">
			Silvicultural Contractor
			</li><?php endif; ?>
		</ul>
	</div>
	<div class="cahnrswsuwp-c-dir__profile-consultant__contact__wrapper">
		<h2 class="cahnrswsuwp-c-dir__profile-consultant__section-title">Contact Information</h2>
		<ul class="cahnrswsuwp-c-dir__profile-consultant__contact__details">
			<?php if ( ! empty( $consultant->get_option( '_address' ) ) ) : ?><li class="cahnrswsuwp-c-dir__profile-consultant__contact__address">
			<?php echo esc_html( $consultant->get_option( '_address' ) ); ?>
			</li><?php endif; ?>
			<?php if ( ! empty( $consultant->get_option( '_city' ) ) ) : ?><li class="cahnrswsuwp-c-dir__profile-consultant__contact__state">
			<?php echo esc_html( $consultant->get_option( '_city' ) ); ?>, <?php echo esc_html( $consultant->get_option( '_state' ) ); ?>, <?php echo esc_html( $consultant->get_option( '_zip' ) ); ?>
			</li><?php endif; ?>
			<?php if ( ! empty( $consultant->get_option( '_phone' ) ) ) : ?><li class="cahnrswsuwp-c-dir__profile-consultant__contact__phone">
			<span class="cahnrswsuwp-c-dir__profile_label">Phone</span>: <a href="tel:<?php echo esc_attr( $consultant->get_option( '_phone' ) ); ?>"><?php echo esc_html( $consultant->get_option( '_phone' ) ); ?></a>
			</li><?php endif; ?>
			<?php if ( ! empty( $consultant->get_option( '_fax' ) ) ) : ?><li class="cahnrswsuwp-c-dir__profile-consultant__contact__fax">
			<span class="cahnrswsuwp-c-dir__profile_label">Fax</span>: <?php echo esc_html( $consultant->get_option( '_fax' ) ); ?>
			</li><?php endif; ?>
			<?php if ( ! empty( $consultant->get_option( '_email' ) ) ) : ?>
			<li class="cahnrswsuwp-c-dir__profile-consultant__contact__email">
			<span class="cahnrswsuwp-c-dir__profile_label">Email</span>: <a href="mailto:<?php echo esc_attr( $consultant->get_option( '_email' ) ); ?>"><?php echo esc_html( $consultant->get_option( '_email' ) ); ?></a>
			</li><?php endif; ?>
			<?php if ( ! empty( $consultant->get_option( '_website' ) ) ) : ?><li class="cahnrswsuwp-c-dir__profile-consultant__contact__website">
			<a href="<?php echo esc_url( $consultant->get_option( '_website' ) ); ?>"><?php echo esc_html( $consultant->get_option( '_website' ) ); ?></a>
			</li><?php endif; ?>
		</ul>
	</div>
	<div class="cahnrswsuwp-c-dir__profile-consultant__remarks__wrapper">
		<h2 class="cahnrswsuwp-c-dir__profile-consultant__section-title">Business Description and Remarks</h2>
		<p>
		<?php echo $content; ?>
		</p>
	</div>
	<div class="cahnrswsuwp-c-dir__profile-consultant__service__wrapper">
		<h2 class="cahnrswsuwp-c-dir__profile-consultant__section-title">Services</h2>
		<ul class="cahnrswsuwp-c-dir__profile-consultant__service__details">
			<?php foreach ( $services as $service ) : ?>
			<li class="cahnrswsuwp-c-dir__profile-consultant__service">
				<?php echo esc_html( $service ); ?>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="cahnrswsuwp-c-dir__profile-consultant__county__wrapper">
		<h2 class="cahnrswsuwp-c-dir__profile-consultant__section-title">Counties Served</h2>
		<ul class="cahnrswsuwp-c-dir__profile-consultant__county__details">
			<?php foreach ( $counties as $county ) : ?>
			<li class="cahnrswsuwp-c-dir__profile-consultant__county">
				<?php echo esc_html( $county ); ?>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="cahnrswsuwp-c-dir__profile-consultant__optional__wrapper">
		<h2 class="cahnrswsuwp-c-dir__profile-consultant__section-title">Optional Information</h2>
		<ul class="cahnrswsuwp-c-dir__profile-consultant__optional__details">
			<li class="cahnrswsuwp-c-dir__profile-consultant__optional">
				<span>Experience/Education of Key Personnel:</span> <?php echo esc_html( $consultant->get_option( '_education' ) ); ?>
			</li>
			<li class="cahnrswsuwp-c-dir__profile-consultant__optional">
				<span>Carries Liability Insurance:</span> <?php echo esc_html( $consultant->get_option( '_liablility_insurance' ) ); ?>
			</li>
			<li class="cahnrswsuwp-c-dir__profile-consultant__optional">
				<span>Carries Surety Bond:</span> <?php echo esc_html( $consultant->get_option( '_surety_bond' ) ); ?>
			</li>
			<li class="cahnrswsuwp-c-dir__profile-consultant__optional">
				<span>Licensed Pesticide Applicators on staff:</span> <?php echo esc_html( $consultant->get_option( '_pesticide_applicators' ) ); ?>
			</li>
			<li class="cahnrswsuwp-c-dir__profile-consultant__consulting">
				<span>Certified Wildfire Mitigation Specialist(s) (CWMS) on staff:</span> <?php echo esc_html( $consultant->is_yes( $consultant->get_option( '_cwms' ) ) ); ?>
			</li>
			<li class="cahnrswsuwp-c-dir__profile-consultant__consulting">
				<span>NRCS Technical Service Provider (TSP):</span> <?php echo esc_html( $consultant->is_yes( $consultant->get_option( '_tsp' ) ) ); ?>
				<?php if ( ! empty( $consultant->get_option( '_tsp' ) ) ) : ?><ul>
					<li class="cahnrswsuwp-c-dir__profile-consultant__consulting">
						<span>TSP ID Number:</span> <?php echo esc_html( $consultant->is_na( $consultant->get_option( '_tsp_number' ) ) ); ?>
					</li>
				</ul><?php endif; ?>
			</li>
			<li class="cahnrswsuwp-c-dir__profile-consultant__consulting">
				<span>Professional Affiliations:</span> <?php echo esc_html( $consultant->get_option( '_affiliations' ) ); ?>
			</li>
		</ul>
	</div>
</div>