<?php
	/**
	*@author liang zhao
	*
	*
	*/
class Student{
	/**
	*constructor
	*
	*
	*/
	function __construct(){
		$this->surname = '';
		$this->first_name = '';
		$this->emails = array();
		$this->grades = array();
	}
	/**
	*add email function
	*
	*
	*/	
	function add_email($which,$address) {
		$this->emails[$which] = $address;
	}
	
	/**
	*add grade function
	*
	*
	*/
	function add_grade($grade) {
		$this->grades[] = $grade;
	}
	
	/**
	*calculate average score
	*
	*
	*/	
	function average() {
		$total = 0;
		foreach ($this->grades as $value)
			$total += $value;
		return $total / count($this->grades);
	}
	
	/**
	*print method
	*
	*
	*/	
	function toString() {
		$result = $this->first_name . ' ' . $this->surname;
		$result .= ' ('.$this->average().")\n\n";
		foreach($this->emails as $which=>$what)
			$result .= $which . ': '. $what. "\n\n";
		$result .= "\n\n";
		return '<pre>'.$result.'</pre>';
	}
}
?>