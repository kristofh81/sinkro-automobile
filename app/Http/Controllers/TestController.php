<?php

/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
class Test
{
	protected $variable;
	private $PROPERTY;

	public function __construct($PROPERTY)
	{
		$this->PROPERTY = $PROPERTY;
	}

	protected function name($name)
	{
		forgot somrreees;
	}
}


    /**
     * Gets the value of variable.
     *
     * @return mixed
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Sets the value of variable.
     *
     * @param mixed $variable the variable
     *
     * @return self
     */
    protected function setVariable($variable)
    {
        $this->variable = $variable;

        return $this;
    }

    /**
     * Gets the value of PROPERTY.
     *
     * @return mixed
     */
    public function getPROPERTY()
    {
        return $this->PROPERTY;
    }

    /**
     * Sets the value of PROPERTY.
     *
     * @param mixed $PROPERTY the 
     *
     * @return self
     */
    private function _setPROPERTY($PROPERTY)
    {
        $this->PROPERTY = $PROPERTY;

        return $this;
    }
} // END class 