<?php
class Coupon extends Model {
	public $errors;
	public $code;
	public $websiteid;
	public $usersid;
	public function checkUser()
	{
		$c = $this->query('SELECT * FROM coupons WHERE claimed_by_users_id="'.$this->usersid.'" AND expires > NOW()');
		return $c[0];
	}
	public function useCoupon()
	{
		$codeSafe = $this->escapeString($this->code);
		if (!is_numeric($this->usersid)) { die(); }
		
		$coupon = $this->query('SELECT * FROM coupons WHERE code="'.$codeSafe.'"');
		
		if (!count($coupon)) {
			$this->errors[''] = "Incorrect coupon code";
			return false;
		}
		if ($coupon[0]->claimed_by_users_id!=0&&$coupon[0]->claimed_by_users_id!=$this->usersid) {
			$this->errors[''] = "Coupon already in use";
			return false;
		}
		if ($coupon) {
			$this->query('UPDATE coupons SET claimed_by_users_id="'.$this->usersid.'" WHERE couponsid="'.$coupon[0]->couponsid.'"');
			return true;
		}
		
	}
	public function generateCoupons($months,$discount,$quantity)
	{
		if (!is_numeric($months)||!is_numeric($discount)) {
			$errors[''] = "Months or Discount Not Set";
			return false;
		}
		$x=1;
		$collisions=0;
		while ($x <= $quantity) {
			$password = $this->createCode(2).'-'.$this->createCode(2).'-'.$this->createCode(2);
			$exists = $this->query('SELECT 1 FROM coupons WHERE code="'.$password.'"');
			if ($exists) {
				$collisions++;
			} else {		
						
				$new = $this->insert(
				'INSERT INTO coupons 
					(
						code
						,expires
						,discount
					) 
					VALUES(
						"'.$password.'"
						, DATE_ADD(NOW(),INTERVAL '.$months.' MONTH)
						,"'.$discount.'"
					)
				');
				if ($new) {
					$codes[] = $password;						
				}
			}
			if ($collisions>1000) {
				$errors[] = "Error - Too Many Coupons Have Been Generated";
				break;
			}
			$x++;
		}
		return $codes;
	}
	private function createCode($length)
	{
	    $chars = 'ABCDEFGHJKMNOPQRSTUVWXYZ23456789';
	    $count = mb_strlen($chars);

	    for ($i = 0, $result = ''; $i < $length; $i++) {
	        $index = rand(0, $count - 1);
	        $result .= mb_substr($chars, $index, 1);
	    }
		
		return $result;
	}
}
	
	
?>