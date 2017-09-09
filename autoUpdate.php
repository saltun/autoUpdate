<?php
/**
* @author Savaş Can ALTUn <savascanaltun@gmail.com>
* @link  http://savascanaltun.com.tr
* @link  http://github.com/saltun
* @since  31.08.2014
* @example example.php
* @version 1.0
*/

class autoUpdate{
	public $sourceurl;
	public $file;


    public function getSource($url){
		    $user = getenv('USER_AGENT');
		    $curl = curl_init();
		    curl_setopt($curl, CURLOPT_URL, $url);
		    curl_setopt($curl, CURLOPT_USERAGENT, $user);
		    curl_setopt($curl, CURLOPT_TIMEOUT, 5);
		    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		    curl_setopt($curl, CURLOPT_REFERER, 'http://www.savascanaltun.com.tr');
		    curl_setopt($curl, CURLOPT_VERBOSE, true);
		    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		    curl_setopt($curl, CURLOPT_HEADER, false);
		    $data = curl_exec($curl);
		    curl_close($curl);

		    if($data) return $data; else return false;
    }

    public function dateControl($myDate,$updateDate){

	
	  $ilk = strtotime($myDate);
	  $son = strtotime($updateDate);
	  $sf=$ilk-$son;
	  if ($sf==0) {
	  	exit();
	  }
	  if ($ilk-$son > 0)
	  { return 1; } 
	  else
	  {
	   return 0;
	  } 
			   
	}

    protected function updateControl($source){
         preg_match_all('#/* * Update :(.*?) */#si',$source,$update);
         $updateDate=$update[1][0];
         $updateDate=str_replace("*","",$updateDate);


         return $updateDate;
         
    }
	public function control(){
		$gitsource=$this->getSource($this->sourceurl);
		$myfileSource=file_get_contents($this->file);
		$myDate=$this->updateControl($myfileSource);
		$myDate=date('Y-m-d',strtotime($myDate));
		$updateDate=$this->updateControl($gitsource);		
                $updateDate=date('Y-m-d',strtotime($updateDate));

      
  		 if (!$this->dateControl($myDate,$updateDate)) {
         	$dosya = fopen($this->file, 'w');
			fwrite($dosya, $gitsource);
			fclose($dosya);
         }
	     
	
	}
}
?>
