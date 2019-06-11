<?php

namespace yii2bundle\model\domain\repositories\ar;

use yii2bundle\model\domain\interfaces\repositories\RuleInterface;
use yii2rails\domain\repositories\BaseRepository;

/**
 * Class RuleRepository
 * 
 * @package yii2bundle\model\domain\repositories\ar
 * 
 * @property-read \yii2bundle\model\domain\Domain $domain
 */
class RuleRepository extends BaseRepository implements RuleInterface {

	protected $schemaClass = true;

}
