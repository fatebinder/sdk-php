<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class ContentSuggestion extends Response
{
    public $id, $type, $name, $subject, $content, $template_ids, $team_id;
}