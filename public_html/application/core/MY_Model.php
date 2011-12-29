<?php
class MY_Model extends CI_Model
{
    /**
     * The database table to use.
     * @var string
     */
    public $table_name = '';
    
    /**
     * Primary key field
     * @var string
     */
    public $primary_key = '';
    
    /**
     * The filter that is used on the primary key. Since most primary keys are 
     * autoincrement integers, this defaults to intval. On non-integers, you would 
     * typically use something like xss_clean of htmlentities.
     * @var string
     */
    public $primaryFilter = 'intval'; // htmlentities for string keys
    
    /**
     * Order by fields. Default order for this model.
     * @var string
     */
    public $order_by = '';
    
    public function __construct ()
    {
        parent::__construct();
    }
    
    /**
     * Get one record, based on ID, or get all records. You can pass a single 
     * ID, an array of IDs, or no ID (in which case the  method will return 
     * all records)
     * 
     * By default, this method will return an array of records. array(array('id' => 1))
     * By passing $single as TRUE, it will return an associative array with the 
     * values for a single record: array('id' => 1) 
     * 
     * @param mixed $id An ID or an array of IDs (optional, default = 0)
     * @param boolean $single Whether to return an assoc array holding the values for a single record, or an array of records (optional, default = FALSE)
     * @return array
     * @author Joost van Veen
     */
    public function get ($ids = 0, $single = FALSE)
    {
        $filter = $this->primaryFilter;
        
        // Limit results to one or more ids
        if ($ids != 0) {
            is_array($ids) || $ids = array($ids);
            foreach ($ids as $id) {
                $id = $filter($id);
                
                if (count($ids) == 1) {
                    // We need just one where statement
                    $this->db->where($this->primary_key, $id);
                }
                else {
                    // We need multiple where statements
                    $this->db->or_where($this->primary_key, $id);
                }
            }
        }
        
        // Set order by if it was not already set
        count($this->db->ar_orderby) || $this->db->order_by($this->order_by);
        
        // Return results
        $single == FALSE || $this->db->limit(1);
        $method = $single == TRUE ? 'row_array' : 'result_array';
        return $this->db->get($this->table_name)->$method();
    }
    
    public function get_by ($key, $val = null, $orwhere = FALSE, $single = FALSE) {
        if (! is_array($key)) {
            $this->db->where(htmlentities($key), htmlentities($val));
        }
        else {
            foreach ($key as $k => $v){
                $key[htmlentities($k)] = htmlentities($v);
                if ($orwhere == TRUE) {
                    $this->db->or_where($key);
                }
                else {
                    $this->db->where($key);
                }
            }
        }
        
        $single == FALSE || $this->db->limit(1);
        $method = $single == TRUE ? 'row_array' : 'result_array';
        return $this->db->get($this->table_name)->$method();
    }
    
    /**
     * Return records as an associative array, where the key is the value of the 
     * first key for that record. Typical return array:
     * $return[18] = array(18 => array('id' => 18,
     * 'title' => 'Example record'),
     * 23 => array('id' => 23,
     * 'title' => 'Example record 2');
     * 
     * @param integer $id An ID or an array of IDs (optional, default = 0)
     * @param boolean $single Whether to return an assoc array holding the values for a single record, or an array of records (optional, default = FALSE)
     * @return array
     * @author Joost van Veen
     */
    public function get_assoc ($id = 0, $single = FALSE){
        // Get records
        $result = $this->get($id, $single);
        
        // Store records in associative array
        $ret_array = array();
        if (count($result) > 0) {
            if ($single == FALSE) {
                $ret_array = $this->to_assocc($result);
            }
            else {
                reset($result);
                $ret_array[$result[key($result)]] = $result;
            }
        }
        
        // Return results
        unset($result);
        return $ret_array;
    }
    
    /**
     * Get one or more records as a key=>value pair array.
     *
     * @param string $key_field The field that holds the key
     * @param string $value_field The field that holds the value
     * @return array
     * @author Joost van Veen
     */
    public function get_key_value ($key_field, $value_field){
        $this->db->select($key_field . ', ' . $value_field);
        
        // Set order by if it was not already set
        count($this->db->ar_orderby) || $this->db->order_by($this->order_by);
        
        $result = $this->db->get($this->table_name)->result_array();
        
        $ret_array = array();
        if (count($result) > 0) {
            foreach ($result as $row) {
                $ret_array[$row[$key_field]] = $row[$value_field];
            }
        }
        
        return $ret_array;
    }
    
	/**
     * Turn a multidimensional array into an associative array, where the index 
     * equals the value of the first index. 
     * 
     * Example output:
     * array(0 => array('pag_id' => 23, 'pag_title' => 'foo'))
     * becomes
     * array(23 => array('pag_id' => 23, 'pag_title' => 'foo'))
     * @param $array
     * @return array
     * @author Joost van Veen
     */
    public function to_assocc ($array)
    {
        $ret_array = array();
        if (count($array) > 0) {
            foreach ($array as $row) {
                reset($row);
                $ret_array[$row[key($row)]] = $row;
            }
        }
        return $ret_array;
    }
}