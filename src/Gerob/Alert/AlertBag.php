<?php namespace Gerob\Alert;

use Illuminate\Config\Repository;
use BadMethodCallException;

class AlertBag
{
    /**
     * Illuminate's Config repository
     *
     * @var \Illuminate\Config\Repository
     */
    protected $config;

    /**
     * Construct our AlertBag class
     *
     * @param \Illuminate\Config\Repository $config
     * @param array $messages
     * @return \Gerob\Alert\AlertBag
     */
    public function __construct( Repository $config, array $messages = array() )
    {
        $this->config = $config;
        $this->messages = $messages;

    }

    /**
     * Get the alert levels from our config file
     *
     * @return array
     */
    protected function getLevels()
    {
        return (array) $this->config->get('alert::levels');
    }
 
    /**
     * Build our message array
     *
     * @param string $method
     * @param array $messages
     * @return array
     */
    public function __call( $method, $messages )
    {
        // Method is in our defined levels?
        if (in_array($method, $this->getLevels())) 
        {            
            // Build the array of messages then
            return array(
                $method => $messages
            );
        }
        // Otherwise let them know it's not defined
        throw new BadMethodCallException("The alert level [$method] has not been configured");
    }
}
