<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
		$form = new Form([
		'base' => [
				'rules' => ['required', 'in' => [['postbase', 'meetbase', 'flexbase', 'workbase']]],
				'message' => 'Please choose a base',
		],
		'first' => [
			 'rules' => ['required'],
			 'message' => 'First Name is required',
		],
		'last' => [
			 'rules' => ['required'],
			 'message' => 'Last Name is required',
		],
		'email' => [
			 'rules' => ['required', 'email'],
			 'message' => 'Please enter a valid email address',
		],
		'phone' => [
			 'rules' => ['required', 'num'],
			 'message' => 'Phone number is required',
		],
		 'date' => [],
		 'company' => [],
		 'team' => [],
		 'how' => [],
		]);

		if (r::is('POST')) {

				$form->emailAction([
						'to' => 'simien@homebase.works',
						'from' => 'info@homebase.works',
						// Dynamically generate the subject with a template.
						'subject' => 'New registration for a {base} membership',
						'service' => 'mailgun',
						'options' => array(
							// Now loaded from environment variables for security
							'key'    => getenv('MAILGUN_KEY') ?: '',
							'domain' => getenv('MAILGUN_DOMAIN') ?: ''
						),
						])
						->logAction([
								'file' => kirby()->roots()->site().'/registrations.log',
						])
						->emailAction([
								// Send the success email to the email address of the submitter.
								'to' => $form->data('email'),
								'from' => 'info@homebase.works',
								// Set replyTo manually, else it would be set to the value of 'email'.
								'replyTo' => 'info@homebase.works',
								'subject' => 'Thank you for your registration!',
								// Use a snippet for the email body (see below).
								'snippet' => 'emails/success',
						]);

				if ($form->success() && !defined('STATIC_BUILD')) {
						go(page('registration/success')->url());
				}
		}

		return compact('form');
};
