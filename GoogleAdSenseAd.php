<?php
/**
 * Class GoogleAnalyticsTracker
 * Inserts Google Adsense tracking code for an ad
 * https://www.google.com/adsense/
 *
 * @author		Gerardo Colorado Diaz-Caneja <gcdiazcaneja@diaz-caneja-consultores.com>
 * @link		http://www.diaz-caneja-consultores.com
 * @link        https://github.com/gerardocdc/google-analytics-tracker
 * @copyright	Copyright (c) 2013 Diaz-Caneja Consultores
 * @license		Creative Commons CC-BY-SA License (http://creativecommons.org/licenses/by-sa/3.0/)
 * @version     1.0
 * @filesource
*/

/**
 * Class GoogleAnalyticsTracker
 * Inserts Google Adsense tracking code for an ad
 * https://www.google.com/adsense/
 *
 * Usage:
 * <code>
 *      $googleAdSenseAd = new GoogleAdSenseAd();
 *      $googleAdSenseAd->setAdClient("XX-YYY-ZZZZZ");
 *      $googleAdSenseAd->setAdSlot("XXXXX");
 *      $googleAdSenseAd->setWidth(123);
 *      $googleAdSenseAd->setHeight(123);
 *      $googleAdSenseAd->render();
 * </code>
 *
 * @package		GoogleAdSense
 * @version     1.0
 * @since		Version 1.0
 */
class GoogleAdSenseAd
{
	/*--------------------------------------------
	|             V A R I A B L E S             |
	============================================*/

	/**
	 * Ad Client account Id number (XX-YYY-ZZZZZ)
	 *
	 * @var string
	 */
	private $adClient;

	/**
	 * Ad Slot Id number (XXXXX)
	 *
	 * @var string
	 */
	private $adSlot;

	/**
	 * Ad width
	 *
	 * @var integer
	 */
	private $width;

	/**
	 * Ad height
	 *
	 * @var integer
	 */
	private $height;

	/*--------------------------------------------
	|           C O N S T R U C T O R           |
	============================================*/

	/**
	 * Constructor
	 */
	function __construct()
	{
	}

	/*--------------------------------------------
	|      G E T T E R S / S E T T E R S        |
	============================================*/

	/**
	 * @param string $adClient
	 */
	public function setAdClient($adClient)
	{
		$this->adClient = $adClient;
	}

	/**
	 * @return string
	 */
	public function getAdClient()
	{
		return $this->adClient;
	}

	/**
	 * @param string $adSlot
	 */
	public function setAdSlot($adSlot)
	{
		$this->adSlot = $adSlot;
	}

	/**
	 * @return string
	 */
	public function getAdSlot()
	{
		return $this->adSlot;
	}

	/**
	 * @param int $height
	 */
	public function setHeight($height)
	{
		$this->height = $height;
	}

	/**
	 * @return int
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * @param int $width
	 */
	public function setWidth($width)
	{
		$this->width = $width;
	}

	/**
	 * @return int
	 */
	public function getWidth()
	{
		return $this->width;
	}

	/*--------------------------------------------
	|        C L A S S   M E T H O D S          |
	============================================*/

	/**
	 * Renderizes and creates the Google AdSense ad code
	 */
	public function render()
	{
		$code = "<script type=\"text/javascript\"><!--\r\n";
		$code .= "google_ad_client = \"".$this->getAdClient()."\";\r\n";
		$code .= "google_ad_slot = \"".$this->getAdSlot()."\";\r\n";
		$code .= "google_ad_width = ".$this->getWidth().";\r\n";
		$code .= "google_ad_height = ".$this->getHeight().";\r\n";
		$code .= "//-->\r\n";
		$code .= "</script>\r\n";
		$code .= "<script type=\"text/javascript\"\r\n";
		$code .= "src=\"http://pagead2.googlesyndication.com/pagead/show_ads.js\">\r\n";
		$code .= "</script>\r\n";

		echo $code;
	}
}