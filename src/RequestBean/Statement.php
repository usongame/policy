<?php
/**
 *
 * Copyright  FaShop
 * License    http://www.fashop.cn
 * link       http://www.fashop.cn
 * Created by FaShop.
 * User: usongame
 * Date: 2019-02-20
 * Time: 13:11
 *
 */
namespace usongame\policy\RequestBean;

class Statement
{
	private $Statement ;
	public function __construct($Statement)
	{
		$this->Statement = $Statement;
	}

	/**
	 * @return string
	 */
	public function getEffect() : string
	{
		return $this->Statement[0]['Effect'];
	}


	/**
	 * @return array
	 */
	public function getAction() : array
	{
		return $this->Statement[0]['Action'];
	}

}