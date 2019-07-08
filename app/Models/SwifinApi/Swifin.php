<?php
namespace App\Models\SwifinApi;
	Class Swifin {
		private
			$headers = array(
				'Content-Type: application/json',
				'Accept: application/json'
			),
			 $logins='9343467550625200:8282';
			// $logins;
		
		public function Logins($user,$pin){
			return $this->logins = $user.':'.$pin;
		}
		
		public function TransactionDetails($transactionNumber,$login=null){
			$url = 'https://app.swifin.com/api/transactions/'.$transactionNumber.'?fields='.urlencode('date,amount,fromUser.display,toUser.display,description,customValues.stringValue,customValues.field.internalName');
			if($login){				
				$transactionDetails = $this->curlPost($url,$this->headers,$login);
			}else{				
				$transactionDetails = $this->curlPost($url,$this->headers,$this->logins);
			}
			return $transactionDetails;
		}
		
		public function ConfirmUser($number,$other=null){		
			$url='https://app.swifin.com/api/self/payments/preview?fields=toAccount.user.display,toAccount.user.image.url';
			if($other){
				//login name, e-mail, mobile phone, account number
				$subject = $other.":'".$number."'";
			}else{
			      $subject = "mobilePhone:'".$number."'";
			}
			$data = '{"amount":"0.1","description":"User Preview","type":"ugxAccount.ugxPayment","subject":"'.$subject.'"}';
			return $this->curlPost($url,$this->headers,$this->logins,$data);
		}
		
		public function CheckBalance($type=false,$login=NULL){
			if($type){				
			    $url='https://app.swifin.com/api/self/accounts/'.$type.'?fields=status.balance';
			}else{	
			    $url='https://app.swifin.com/api/self/accounts?fields=type.internalName,status.availableBalance';
			}
			if($login){
				return $this->curlPost($url,$this->headers,$login);
			}else{
				return $this->curlPost($url,$this->headers,$this->logins);
			}
		}
		
		public function POSpreviewPayment($data,$login=NULL){
			$url='https://app.swifin.com/api/pos/preview?fields='.urlencode('toAccount.user.display,fromAccount.user.display,totalAmount,mainAmount,fees.amount');
			if($login){
				return $this->curlPost($url,$this->headers,$login,$data);
			}else{
				return $this->curlPost($url,$this->headers,$this->logins,$data);
			}
		}
		
		public function POSpaymentTypes($login=NULL){
			$url = 'https://app.swifin.com/api/pos/data-for-pos?fields='.urlencode('paymentTypes.name,paymentTypes.internalName');
			if($login){
				return $this->curlPost($url,$this->headers,$login);
			}else{
				return $this->curlPost($url,$this->headers,$this->logins);
			}
		}
		
		public function POSsendOTP($medium,$data,$login=NULL){
			$url = 'http://demoapp.swifin.com/api/pos/otp?medium='.$medium;
			if($login){
				return $this->curlPost($url,$this->headers,$login,$data);
			}else{
				return $this->curlPost($url,$this->headers,$this->logins,$data);
			}
		}
		
		public function PreviewSwifinPayment($data,$login=NULL){
			$url='https://app.swifin.com/api/self/payments/preview?fields='.urlencode('toAccount.user.display,fromAccount.user.display,totalAmount,mainAmount,fees.amount');
			if($login){
				return $this->curlPost($url,$this->headers,$login,$data);
			}else{
				return $this->curlPost($url,$this->headers,$this->logins,$data);
			}
		}
		
		public function MakeSwifinPayment($data,$login=NULL){
			$url = 'https://app.swifin.com/api/self/payments?fields='.urlencode('transactionNumber,kind,date,amount,fromUser.display,toUser.display,description');
			if($login){
				return $this->curlPost($url,$this->headers,$login,$data);
			}else{
				return $this->curlPost($url,$this->headers,$this->logins,$data);
			}
		}
		public function getTransactionNumbers($data,$login=Null){
			
		}
		/*
		You can Have Other Functions
		*/
		private function curlPost($url,$headers=NULL,$login=NULL,$data=NULL){
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			if (!empty($headers)){
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			}
			if(!empty($login)){
				curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
				curl_setopt($ch, CURLOPT_USERPWD, $login);
			}
			if(!empty($data)){
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			}
			curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, true);
			curl_setopt($ch, CURLOPT_USERAGENT,'SWIFIN UGANDA');
			$response['Details'] = json_decode(curl_exec($ch));
			if (curl_error($ch)) {
				trigger_error('Curl Error:' . curl_error($ch));
			}
			$response['Code'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
			return json_encode($response);
		}
	}
