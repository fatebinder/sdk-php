<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model\GetTeams as GetTeamsModel;
use Easir\SDK\Response\ListCompanyTeams as ListCompanyTeamsResponse;

class GetTeams extends Request
{
    /**
     * @var string
     */
    protected $url = '/teams?page=%d&per_page=%d&q=%s&team_type=%s&sort_by=%s&sort_direction=%s&group_id=%d';
    /**
     * @var string
     */
    public $method = 'GET';
    /**
     * @var bool
     */
    public $requiresAuth = true;
    /**
     * @var string
     */
    public $responseClass = ListCompanyTeamsResponse::class;
    /**
     * @var string
     */
    protected $modelClass = GetTeamsModel::class;

    /**
     * @throws RequestException
     * @return string
     */
    public function getUrl()
    {
        $this->checkModel();

        return sprintf(parent::getUrl(),
            (int)$this->model->page,
            (int)$this->model->perPage,
            urlencode((string)$this->model->searchTerm),
            urlencode((string)$this->model->team_type),
            urlencode((string)$this->model->sort_by),
            urlencode((string)$this->model->sort_direction),
            (int)$this->model->group_id
        );
    }
}