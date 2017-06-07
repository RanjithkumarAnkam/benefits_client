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
		
		//print_r(\Yii::$app->session['permissions']); die();
		foreach ($this->roles as $role) {
			if ($role === '?') {
				if ($user->getIsGuest()) {
					return true;
				}
			} elseif ($role === '@') {
				if (!$user->getIsGuest()) {
					return true;
				}
			} elseif (!$user->getIsGuest() && in_array($role, \Yii::$app->session['permissions'])) {
				return true;
			}
		}
	
		return false;
	}
	
}

?>