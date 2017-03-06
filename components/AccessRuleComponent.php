<?php

namespace app\components;

use Yii;
use yii\base\Component;
use yii\filters\AccessRule;

class AccessRuleComponent extends AccessRule {
	
	/**
	 * @param User $user the user object
	 * @return bool whether the rule applies to the role
	 */
	protected function matchRole($user)
	{
		if (empty($this->roles)) {
			return true;
		}
		foreach ($this->roles as $role) {
			if ($role === '?') {
				if ($user->getIsGuest()) {
					return true;
				}
			} elseif ($role === '@') {
				if (!$user->getIsGuest()) {
					return true;
				}
			} elseif (!$user->getIsGuest() && $user->identity->usertype == $role) {
				return true;
			}
		}
	
		return false;
	}
	
}

?>