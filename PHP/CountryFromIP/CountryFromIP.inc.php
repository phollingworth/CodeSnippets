<?Php
/**
 * This class generates the country name and its flag from its IP address
 *
 *
 * @author Rochak Chauhan
 */

 class CountryFromIP {

	 private $CountryIPDatabase = 'CountryIPDatabase.txt';
	 private $ip = '';

	/**
	 * Function to validate IP ( please modify it according to your needs)
	 *
	 * @param $ip - string
	 *
	 * @return boolean
	 */
	public function ValdateIP($ip) {
		$ipArray = explode(',',$ip);

		if(count($ipArray) != 4) {
			echo "<font color='red' size='3'> <b>ERROR: </b> Invalid IP</font>";
			return false;
		}
		else {
			return true;
		}
	}

	/**
	 * Function to return Country name from the IPDatabase
	 *
	 * @param $ip string
	 * 
	 * @return string - name of the country, false otherwise
	 */
	public function GetCountryName($ip) {
		$this->ip = $ip;
		$ip = sprintf("%u", ip2long($ip));
	
		$csvArray = file($this->CountryIPDatabase);
	
		for($i=0; $i<count($csvArray); $i++) {
			$arrayOfLine = explode(',', $csvArray[$i]);
			if($ip >= $arrayOfLine[0] && $ip <= $arrayOfLine[1] ) {
				return $countryName = $arrayOfLine[2];
			}
		}
		return false;
	}

	/**
	 *  Function to return local path to Country's flag
	 *
	 * @param $ip - string
	 *
	 * @return string - local path to flag image
	 */
	public function ReturnFlagPath() {

		if($countryName = trim(ucwords(strtolower($this->GetCountryName($this->ip))) )) {
                        $countryName = str_replace(' ','%20',$countryName);
			return "flag/$countryName.gif";
		}
		else {
		    return false;
		}
	}
	
 }
?>