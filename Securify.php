<?php 
/**
*Copyright 2012 amir hoseinian
*
*   Licensed under the Apache License, Version 2.0 (the "License");
*   you may not use this file except in compliance with the License.
*   You may obtain a copy of the License at
*
*     http://www.apache.org/licenses/LICENSE-2.0
*
*   Unless required by applicable law or agreed to in writing, software
*   distributed under the License is distributed on an "AS IS" BASIS,
*   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
*   See the License for the specific language governing permissions and
*   limitations under the License.
*/

class Securify{
	protected $str;
	
	protected $hashes = array(
		"a"=>array("a","A","@","/-\\"),
		"b"=>array("b","B"),
		"c"=>array("c","C"),
		"d"=>array("d","D","|)"),
		"e"=>array("e","E","3"),
		"f"=>array("f","F"),
		"g"=>array("g","G"),
		"h"=>array("h","H","#"),
		"i"=>array("i","I","!","|"),
		"j"=>array("j","J"),
		"k"=>array("k","K"),
		"l"=>array("l","L","|_"),
		"m"=>array("m","M","/\/\\"),
		"n"=>array("n","N","/\/"),
		"o"=>array("o","O","0"),
		"p"=>array("p","P"),
		"q"=>array("q","Q"),
		"r"=>array("r","R"),
		"s"=>array("s","S","$"),
		"t"=>array("t","T"),
		"u"=>array("u","U"),
		"v"=>array("v","V"),
		"w"=>array("w","W","\/\/"),
		"x"=>array("x","X"),
		"y"=>array("y","Y"),
		"z"=>array("z","Z"),
	);

	/**
	*@param string $str
	*/
	protected function setString($str){
		$this->str = $str;
	}

	/**
	*@param int $level (1-100)
	*/
	protected function secure($lvl){
		$secure = $this->str;

		foreach ($this->hashes as $key => $value) {
			if(rand(1,100) <= $lvl){			
				$randomHashKey = array_rand($value);
				$secure = str_replace($key, $value[$randomHashKey], $secure);
			}
		}
		return $secure;
	}

	/**
	*get secured string
	*/
	protected function getSecureString($lvl){
		$secureString = $this->secure($lvl);
		return $secureString;
	}

	/**
	*invoke funcion 
	*@param string $str this is the string to be securified
	*@param int $lvl between 1-100 define percent of securifieg as it grows chance of replace word with hashes grows
	*/
	public function __Invoke($str,$lvl = 100){
		$this->setString(strtolower($str));
		if($lvl>=0 && $lvl<=100)
			return $this->getSecureString($lvl);
		throw new Exception("securing lvl must between 1-100", 1);
		
	}
}