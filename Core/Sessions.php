<?php
namespace Core;

class Sessions extends Model{
    //name of collection where sessions will be stored
    const COLLECTION = 'sessions';
    //Expire session after 10 mins in inactivity
    const SESSION_TIMEOUT = 6000;
    //Expire session after 1 hour
    const SESSION_LIFESPAN = 36000;
    //name of the session cookie
    const SESSION_NAME = 'mongosessid';
    const SESSION_COOKIE_PATH = 'sessions';
    //Should be the domain name of you web app, for example
    //mywebapp.com. DO NOT use empty string unless you are
    //running on a local environment.
    const SESSION_COOKIE_DOMAIN = 'mvcframework.com';
    private $db;
    private $_collection;
    //represents the current session
    private $_currentSession;

    public function __construct(){
        $this->db = static::getDB();
        $this->_collection = $this->db->sessions;
        //$this->_collection = $this->db0->getCollection(SessionManager::COLLECTION);

        session_set_save_handler(array(&$this, 'open'), array(&$this, 'close'), array(&$this, 'read'), array(&$this, 'write'), array(&$this, 'destroy'), array(&$this, 'gc'));
        //Set session garbage collection period
        ini_set('session.gc_maxlifetime', Sessions::SESSION_LIFESPAN);
        //set session cookie configurations
        //start the session
        ob_start();session_start();ob_clean();
        session_set_cookie_params(Sessions::SESSION_LIFESPAN, Sessions::SESSION_COOKIE_PATH, Sessions::SESSION_COOKIE_DOMAIN);
        //Replace 'PHPSESSID' with 'mongosessid' as the
        //session name
        session_name(Sessions::SESSION_NAME);
        session_cache_limiter('nocache');
    }

    public function open($path, $name) {
        return true;
    }

    public function close() {
        return true;
    }

    public function read($sessionId) {
        $query = array('session_id'=>$sessionId,'timedout_at'=> array('$gte' => time()), 'expired_at' => array('$gte'=>time()));
        $result = $this->db->sessions->findOne($query);
        $this->_currentSession = $result;
        if(!isset($result['data'])) {
            return '';
        }
        return $result['data'];
    }

    public function write($sessionId, $data) {
        $expired_at = time() + self::SESSION_TIMEOUT;
        $new_obj = array('data' => $data, 'timedout_at' => time() + self::SESSION_TIMEOUT, 'expired_at' => (empty($this->_currentSession)) ? time()+ Sessions::SESSION_LIFESPAN : $this->_currentSession['expired_at']);
        $query = array('session_id' => $sessionId);
        $this->_collection->updateOne($query, array('$set' => $new_obj), array('upsert' => true));
        return true;
    }

    public function destroy($sessionId) {
        $this->_collection->remove(array('session_id' => $sessionId));
        return true;
    }

    public function gc(){
        $query = array( 'expired_at' => array('$lt' => time()));
        $this->_collection->remove($query);
        return true;
    }

    public function __destruct() {
        session_write_close();
    }
}
?>