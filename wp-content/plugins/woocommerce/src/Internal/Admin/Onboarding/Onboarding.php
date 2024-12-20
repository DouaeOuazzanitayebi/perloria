<?php
/**
 * WooCommerce Onboarding
 */

namespace Automattic\WooCommerce\Internal\Admin\Onboarding;

/**
 * Initializes backend logic for the onboarding process.
 */
class Onboarding {
	/**
	 * Initialize onboarding functionality.
	 *
	 * @internal This method is for internal purposes only.
	 */
	final public static function init() {
		OnboardingHelper::instance()->init();
		OnboardingIndustries::init();
		OnboardingJetpack::instance()->init();
		OnboardingMailchimp::instance()->init();
		OnboardingProfile::init();
		OnboardingSetupWizard::instance()->init();
		OnboardingSync::instance()->init();
<<<<<<< HEAD
=======
		OnboardingThemes::init();
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
		OnboardingFonts::init();
	}
}
