<?php

//		Checks that are common to the controllers for user/message/comment
//	(and dashboard, which is basically users/index)

date_default_timezone_set("America/Los_Angeles");

function check_logged_in($session, $verb = NULL)
{
    if (!$session->userdata('is_logged_in')) {
        $session->set_flashdata('validation_error', "Must be signed in {$verb}");
        redirect(base_url("signin"));
        exit;
    }
}
