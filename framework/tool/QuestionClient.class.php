<?php
 namespace framework\tool;
 class QuestionClient
 {   
	  private $url;
	  private $return_option = true;
	  private $user_agent = 'bob-version5.0';
	  private $header_option = true;
	  private $erroInfo;

	  public function setUrl($url)
	  {   
		 
		  $this->url = $url;
	  }

      
	  public function getErrorInfo()
	  {
		 return $this->errorInfo;
	  }

	  public function get()
	  {
            $curl = curl_init();
			curl_setopt($curl,CURLOPT_URL,$this->url);
			curl_setopt($curl,CURLOPT_USERAGENT,$this->user_agent);
			if($this->return_option)
		    {
				curl_setopt($curl,CURLOPT_RETURNTRANSFER,$this->return_option);
			}
			if($this->header_option)
		    {
			    curl_setopt($curl,CURLOPT_HEADER,$this->header_option);

			}     
			$result = curl_exec($curl);
			if(!$result)
		    {
				 $this->errorInfo= '数据获取失败';
				 curl_close($curl);
				 return false;
			}else
		    {    
				 curl_close($curl);
				 return $result ;
			}
	  }
	  
 }
?>