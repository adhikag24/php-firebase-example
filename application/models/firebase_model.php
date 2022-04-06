<?php
require __DIR__.'/../../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


class Firebase_model extends CI_Model{

    private $firebase;
    private $database;


    public function __construct()
    {
        parent::__construct();
        $databaseUrl = "https://auction-website-1cc67-default-rtdb.asia-southeast1.firebasedatabase.app/";
		$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secret/auction-website-1cc67-firebase-adminsdk-nsroe-81786452c6.json');
		
		$this->firebase = (new Factory)->withServiceAccount($serviceAccount)->withDatabaseUri($databaseUrl)->create();


        $this->database = $this->firebase->getDatabase();
        
    }

    public function get($path){
        
		$reference = $this->database->getReference($path);

		$snapshot = $reference->getSnapshot();

		$value = $snapshot->getValue();

        return $value;
    }

    public function insert($path, $data){

        return $this->database->getReference($path)->push($data);
    }

    public function update($path, $updates){

        return $this->database->getReference($path)->update($updates);
    }

    public function delete($path){
        return $this->database->getReference($path)->remove();

    }


}