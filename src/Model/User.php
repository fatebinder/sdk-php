<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class User extends Response
{
    public $id, $first_name, $last_name, $phone_number, $job_title, $email, $email_notifications,
            $profile_picture, $user_type, $locale, $timezone, $role, $company, $settings,
            $team, $signature, $created_at, $updated_at;
}