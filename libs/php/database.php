<?php

class Database extends PDO {
    
    /**
     * Make the connection to the Database 
     * 
     * @param string $dbType    Type of database
     * @param string $dbHost    Server of database 
     * @param string $dbName    Name of database
     * @param string $dbUser    Name of login to Database
     * @param string $dbPass    Password for login to Database
     */
    
    public function __construct($dbType, $dbHost, $dbName, $dbUser, $dbPass) 
    {
        try 
        {
            parent::__construct("$dbType:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
        }
        catch (PDOException $e)
        {
            die("Connessione Fallita: ". $e->getMessage());
        }
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Make the SELECT query
     * 
     * @param string $sql   String sql
     * @param array $array  array the pass WHERE
     * @param parameter $fetchMode  Parameter to set the fetch
     * 
     * @return array/boolean  array associative
     */
    
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC) 
    {
        $sth = $this->prepare($sql);
        
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }
        
        $sth->execute();
        return $sth->fetchAll($fetchMode);       
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Make the INSERT query
     * 
     * @param string $table Name of the table to insert the data
     * @param array $data   Array of the data to insert
     * 
     * @return boolean 
     */
    
    public function insert($table, $data) 
    {
        
        ksort($data);
        
        $fieldsName = implode('`, `', array_keys($data));
        $fieldsValue = ':' . implode(', :', array_keys($data));  
             
        $sth = $this->prepare("INSERT INTO $table (`$fieldsName`) VALUES ($fieldsValue)");
        
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        
        $res = $sth->execute();
        
        if (!$res)
        {
            $err = $sth->errorInfo();
            
            echo $err[2];
        }    
        
    }

//---------------------------------------------------------------------------------------
    
    /**
     * Make the UPDATE query
     * 
     * @param string $table Name of the table to update the data
     * @param array $data   Array of the data to update
     * @param string $where String of where explain
     * 
     * @return boolean 
     */
    
    public function update($table, $data, $where) 
    {
        ksort($data);
        
        $fieldDetails = NULL;
        
        foreach ($data as $key => $value) {
            $fieldDetails .= "`$key` = :$key,";
        }
        
        $fieldDetails = rtrim($fieldDetails, ','); 
        
        $sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
        
        foreach ($data as $key => $value) 
        {
            $sth->bindValue(":$key", $value);
        }
        
        $res = $sth->execute();
        
        if (!$res)
        {
            $err = $sth->errorInfo();
            
            echo $err[2];
        }
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Make the DELETE query
     * 
     * @param string $table Name of the table to delete the data
     * @param string $where String of where explain
     * @param int $limit Number of data to the delete
     * 
     * @return boolean 
     */
    
    public function delete($table, $where, $limit = 1)
    {
        return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Make the query to count item
     * 
     * @param string $sql Query to have the data
     * @param array $array Array of the data to count
     * 
     * @return integer
     */
    
    public function countItem($sql, $array = array()) 
    {
        $sth = $this->prepare($sql);
        
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }
        
        $sth->execute();
        
        return $sth->fetchColumn();
    }

//---------------------------------------------------------------------------------------
    
    /**
     * Make the query to have the MAX data
     * 
     * @param string $table Name of the table to have the data
     * @param string $column Name of column of the data
     * 
     * @return integer 
     */
    
    public function getMaxData($table, $column) 
    {
        $sth = $this->prepare("SELECT max($column) FROM $table");
        
        $sth->execute();
        
        return $sth->fetchColumn();
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Make the query to have the MIN data
     * 
     * @param string $table Name of the table to have the data
     * @param string $column Name of column of the data
     * 
     * @return integer 
     */
    
    public function getMinData($table, $column) 
    {
        $sth = $this->prepare("SELECT min($column) FROM $table");
        
        $sth->execute();
        
        return $sth->fetchColumn();
    }
}
?>