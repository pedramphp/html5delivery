<?php 

	class Urls extends SiteObject {
		
		public function __construct(){
			parent::__construct();
		}
		
		
		public function process(){
		
			
			$siteUrls = array();
			$siteUrls["how_it_works"] = LiteFrame::BuildActionUrl( "how-it-works" );
			$siteUrls["examples"] = LiteFrame::BuildActionUrl( "examples" );
			$siteUrls["services"] = LiteFrame::BuildActionUrl( "services" );
			$siteUrls["faq"] = LiteFrame::BuildActionUrl( "faq" );
			$siteUrls["about"] = LiteFrame::BuildActionUrl( "about" );
			$siteUrls["order"] = LiteFrame::BuildActionUrl( "order" );
			$siteUrls["privacy_policy"] = LiteFrame::BuildActionUrl( "privacy-policy" );
			
			$external = array();
			$external["mexoinc"] = "http://www.mexoinc.com";
			
			$this->results = array(
				"site" 		=> $siteUrls,
				"external"	=> $external
			);
		}
		
		
		public static function getProfileUrl($userId){
			return LiteFrame::BuildActionUrl( "profile", array("user_id" => $userId));
		}
		
		public static function getUserReviewsUrl($userId){
			return LiteFrame::BuildActionUrl( "user-reviews", array("user_id" => $userId));
		}
		
		public static function getUserLikesUrl($userId){
			return LiteFrame::BuildActionUrl( "user-likes", array("user_id" => $userId));
		}
				
		public static function getUserOwnsUrl($userId){
			return LiteFrame::BuildActionUrl( "user-owns", array("user_id" => $userId));
		}
						
		public static function getUserWishesUrl($userId){
			return LiteFrame::BuildActionUrl( "user-wishes", array("user_id" => $userId));
		}
		
		public static function getProductUrl($productId){
			return LiteFrame::BuildActionUrl( "product", array("product_id" => $productId));
		}
		
		public static function getProductReviewsUrl($productId){
			return LiteFrame::BuildActionUrl( "product-reviews", array("product_id" => $productId));
		}
		
		public static function getUserFollowingsUrl($productId){
			return LiteFrame::BuildActionUrl( "followings", array("user_id" => $productId));
		}
		
		public static function getUserFollowersUrl($productId){
			return LiteFrame::BuildActionUrl( "followers", array("user_id" => $productId));
		}
		
	}
?>