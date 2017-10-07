<?php

namespace Blog\BlogInfrastructure\Repository;
use Blog\BlogDomain\Repository\IEntryRepository;
use Blog\BlogDomain\Model\Entry;


class InMemoryEntryRepository implements IEntryRepository {
    
    private $entries;
    
    function __construct() {
        $this -> entries[] = new Entry(1,"Primera entrada", "Esta es la primera entrada");
        $this -> entries[] = new Entry(2,"Segunda entrada", "Esta es la segunda entrada");    
    }

    
    public function findAll() {
        return $this->entries;
    }

    public function findEntryByID($id) {
        foreach($this->entries as $entry){
            if($entry->getId()==$id){
                return $entry;
            }            
        }
        
    }

    public function removeEntry(Entry $entry) {
        
    }

    public function saveEntry(Entry $entry) {
        
    }

}
