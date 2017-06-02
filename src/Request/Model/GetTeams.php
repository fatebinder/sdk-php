<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class GetTeams extends Model
{
    /**
     * @var integer
     */
    public $group_id;
    /**
     * @var string
     */
    public $searchTerm = '';
    /**
     * @var integer
     */
    public $page = 1;
    /**
     * @var integer
     */
    public $perPage = 15;
    /**
     * @var string
     */
    public $team_type = '';
    /**
     * @var string
     */
    public $sort_by = '';
    /**
     * @var string
     */
    public $sort_direction = 'desc';
}