<?php

namespace Blog\BlogDomain\Repository;
use Blog\BlogDomain\Model\Entry;


interface IEntryRepository {
    
    public function findEntryByID($id);
    public function findAll();
    public function saveEntry(Entry $entry);
    public function removeEntry(Entry $entry);
    
    
}
