<?php snippet('header') ?>

	<main id="hb-topscroll" class="main" role="main" uk-height-viewport="expand:true">

		<?php if($image = $page->image()): ?>

		<div class="uk-section uk-section-secondary uk-padding-remove">
		    <div class="uk-background-cover hb-overlay-container uk-blend-screen uk-flex uk-flex-column uk-flex-center" style="background-image: url(<?php echo $page->file($page->cover())->url() ?>)" uk-parallax="bgy: -50" uk-height-viewport="offset-top: true; offset-bottom: 25">
					<div class="uk-container uk-container-expand  uk-width-1-2@m uk-width-1-1@s hb-overlay-content">
							<h1 class="rohn-b hb-text-light uk-text-uppercase"><?= $page->title()->html() ?></h1>
	            <p class="uk-h4 uk-margin-remove hb-text-secondary"><?= $page->intro()->html() ?></p>
	        </div>
		    </div>
		</div>

		<?php endif ?>


		<section class="uk-section-muted uk-padding-remove">
			<div class="uk-container uk-container-expand uk-padding">
				<p class="uk-h1 uk-text-bold uk-text-center">Browse Topics</p>
				<p class="uk-width-1-2 uk-margin-auto uk-text-center">Get your answers fast with supporting documentation. <br>Help for the users of an <a href="https://optixapp.com" class="hb-link" target="_blank">Optix</a>-powered venue.</p>
				<div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-3@xl uk-flex-center uk-padding" uk-grid uk-height-match="target: div">
					<div>
							<div class="uk-card uk-card-default uk-card-body">
									<p class="uk-h4 uk-text-bold uk-heading-bullet">Basics</p>
									<ul class="uk-list uk-list-divider uk-link-reset">
										<li><a href="https://support.optixapp.com/hc/en-us/articles/228713027-How-do-I-download-my-venue-s-app-">How do I download my venue's app?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115006260127-How-do-I-access-the-iOS-FAQ-">How do I access the iOS FAQ?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115006438868-How-do-I-access-the-Android-FAQ-">How do I access the Android FAQ?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115013075768-How-do-I-check-into-my-venue-">How do I check into my venue?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115015729747-How-do-I-switch-locations-">How do I switch locations?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115010422467-How-do-I-set-up-the-app-to-automatically-update-">How do I set up the app to automatically update?</a></li>
									</ul>
							</div>
					</div>
					<div>
							<div class="uk-card uk-card-default uk-card-body">
									<p class="uk-h4 uk-text-bold uk-heading-bullet">Account</p>
									<ul class="uk-list uk-list-divider uk-link-reset">
										<li><a href="https://support.optixapp.com/hc/en-us/articles/226516907-How-do-I-edit-my-profile-account-details-">How do I edit my profile/account details?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/235528268-How-do-I-change-my-email-and-or-push-notification-settings-">How do I change my email and/or push notification settings?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/229860808-How-do-I-change-my-profile-picture-">How do I change my profile picture?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/229860868-How-do-I-change-the-email-address-associated-with-my-account-">How do I change the email address associated with my account?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115012645728-How-do-I-change-my-password-">How do I change my password?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115006413547-How-do-I-reset-my-password-">How do I reset my password?</a></li>
									</ul>
							</div>
					</div>
					<div>
							<div class="uk-card uk-card-default uk-card-body">
									<p class="uk-h4 uk-text-bold uk-heading-bullet">Bookings</p>
									<ul class="uk-list uk-list-divider uk-link-reset">
										<li><a href="https://support.optixapp.com/hc/en-us/articles/227770407-How-do-I-book-a-meeting-room-">How do I book a meeting room?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/227867688-How-do-I-book-a-desk-">How do I book a desk?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/235623387-How-do-I-view-my-past-and-upcoming-room-or-desk-bookings-">How do I view my past and upcoming room or desk bookings?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/227770487-How-do-I-edit-or-cancel-my-room-booking-">How do I edit or cancel my room booking?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115010852488-How-do-I-end-or-cancel-an-active-desk-booking-">How do I end or cancel an active desk booking?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/235553908-How-do-I-send-a-meeting-invite-to-others-">How do I send a meeting invite to others?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115001463487-Who-can-cancel-a-booking-">Who can cancel a booking?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115012566388-Why-isn-t-my-discount-or-plan-applied-to-my-room-desk-booking-">Why isn't my discount or plan applied to my room/desk booking?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115012409447-How-do-I-see-which-invitees-have-replied-Attending-to-my-room-booking-">How do I see which invitees have replied 'Attending' to my room booking?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005276288-How-are-the-desks-and-meeting-rooms-in-my-app-sorted-">How are the desks and meeting rooms in my app sorted?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005576968-How-does-Bluetooth-work-with-meeting-room-and-desk-bookings-Enterprise-Only-">How does Bluetooth work with meeting room and desk bookings? (Enterprise Only)</a></li>
									</ul>
							</div>
					</div>
					<div>
							<div class="uk-card uk-card-default uk-card-body">
									<p class="uk-h4 uk-text-bold uk-heading-bullet">Community</p>
									<ul class="uk-list uk-list-divider uk-link-reset">
										<li><a href="https://support.optixapp.com/hc/en-us/articles/360000858407-How-do-I-control-if-I-appear-in-my-venue-s-member-directory-">How do I control if I appear in my venue's member directory?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/360000296127-Can-I-create-a-post-on-my-in-app-community-feed-">Can I create a post on my in-app community feed?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115010686688-What-do-the-dots-next-to-each-of-the-users-in-the-directory-mean-">What do the 'dots' next to each of the users in the directory mean?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005599307-How-can-I-message-other-Optix-users-at-my-venue-">How can I message other Optix users at my venue?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005599367-Where-can-I-find-information-about-other-users-at-my-venue-">Where can I find information about other users at my venue?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005762908-How-can-I-send-a-message-out-to-multiple-users-at-once-">How can I send a message out to multiple users at once?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005762048-How-is-the-user-directory-sorted-">How is the user directory sorted?</a></li>
									</ul>
							</div>
					</div>
					<div>
							<div class="uk-card uk-card-default uk-card-body">
									<p class="uk-h4 uk-text-bold uk-heading-bullet">Teams</p>
									<ul class="uk-list uk-list-divider uk-link-reset">
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005082567-What-are-teams-">What are teams?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005152587-What-is-a-team-admin-">What is a team admin?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005264448-How-does-the-team-admin-setup-their-team-in-Optix-">How does the team admin setup their team in Optix?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005103167-How-do-I-add-new-members-to-my-existing-team-">How do I add new members to my existing team?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005136427-How-does-the-team-admin-remove-existing-members-from-their-team-">How does the team admin remove existing members from their team?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115007838087-How-does-the-team-admin-accept-a-team-plan-">How does the team admin accept a team plan?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115007067027-How-can-the-team-admin-review-their-team-s-plan-details-">How can the team admin review their team's plan details?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005102567-As-a-user-can-I-be-listed-in-Optix-as-both-an-individual-user-and-a-member-of-a-team-">As a user, can I be listed in Optix as both an individual user and a member of a team?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005275548-What-are-the-differences-in-responsibility-between-a-team-admin-and-a-venue-admin-">What are the differences in responsibility between a team admin and a venue admin?</a></li>
									</ul>
							</div>
					</div>
					<div>
							<div class="uk-card uk-card-default uk-card-body">
									<p class="uk-h4 uk-text-bold uk-heading-bullet">Payment</p>
									<ul class="uk-list uk-list-divider uk-link-reset">
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115012238928-How-do-I-email-or-download-an-invoice-">How do I email or download an invoice?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115003948728-What-will-I-be-billed-for-">What will I be billed for?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115003948688-Will-I-be-billed-if-I-m-part-of-a-team-">Will I be billed if I'm part of a team?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115003669067-How-do-team-admins-add-payments-methods-">How do team admins add payments methods?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/226674988-How-do-I-add-or-remove-my-payment-card-information-">How do I add or remove my payment card information?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/226517007-When-will-I-be-billed-">When will I be billed?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/226675048-Where-can-I-review-my-past-due-and-upcoming-invoices-">Where can I review my past, due, and upcoming invoices?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/226675008-How-do-I-enable-or-disable-auto-payments-">
How do I enable or disable auto-payments?</a></li>
									</ul>
							</div>
					</div>
					<div>
							<div class="uk-card uk-card-default uk-card-body">
									<p class="uk-h4 uk-text-bold uk-heading-bullet">Plans</p>
									<ul class="uk-list uk-list-divider uk-link-reset">
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115013266627-If-I-m-on-a-yearly-plan-when-does-my-access-reset-">If I'm on a yearly plan, when does my access reset?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115003679687-What-is-a-plan-">What is a plan?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/226516827-How-do-I-accept-a-pending-plan-">How do I accept a pending plan?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/228652368-How-do-I-review-my-plan-s-">How do I review my plan(s)?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/226674908-How-do-I-change-edit-or-cancel-my-plan-">How do I change, edit, or cancel my plan?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115003866967-How-do-I-apply-a-plan-to-my-booking-">How do I apply a plan to my booking?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115008133967-Why-is-some-of-my-plan-already-consumed-on-the-1st-day-of-the-month-">Why is some of my plan already consumed on the 1st day of the month?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115003833447-How-do-I-understand-how-much-of-my-plan-I-ve-used-">How do I understand how much of my plan I've used?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115003830527-Can-I-be-added-to-more-than-one-plan-">Can I be added to more than one plan?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005269768-What-happens-if-I-ve-used-up-my-plan-before-the-end-of-the-month-">What happens if I've used up my plan before the end of the month?</a></li>
									</ul>
							</div>
					</div>
					<div>
							<div class="uk-card uk-card-default uk-card-body">
									<p class="uk-h4 uk-text-bold uk-heading-bullet">Integrations</p>
									<ul class="uk-list uk-list-divider uk-link-reset">
										<li><a href="https://support.optixapp.com/hc/en-us/articles/226675068-How-do-I-sync-Optix-bookings-to-my-personal-calendar-">How do I sync Optix bookings to my personal calendar?</a></li>
									</ul>
									<p class="uk-h4 uk-text-bold uk-heading-bullet">Support</p>
									<ul class="uk-list uk-list-divider uk-link-reset">
										<li><a href="https://support.optixapp.com/hc/en-us/articles/226517047-How-do-I-contact-the-venue-administrator-">How do I contact the venue administrator?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115010087767-How-do-I-report-an-issue-in-my-venue-">How do I report an issue in my venue?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115005763188-Where-can-I-review-my-past-support-messages-with-the-venue-admin-">Where can I review my past support messages with the venue admin?</a></li>
										<li><a href="https://support.optixapp.com/hc/en-us/articles/115001879748-How-do-I-contact-the-Optix-Support-Team-">How do I contact the Optix Support Team?</a></li>
									</ul>
							</div>
					</div>
				</div>
			</div>
		</section>

	</main>

<?php snippet('footer') ?>
