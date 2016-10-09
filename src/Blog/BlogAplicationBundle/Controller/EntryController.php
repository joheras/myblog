<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Blog\BlogAplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class EntryController extends Controller {

    public function showAllAction() {
        $entries = $this->get('entryrepository')->findAll();
        return new Response(implode("<br/>", $entries));
    }

    public function showEntryAction($id) {
        $entry = $this->get('entryrepository')->findEntryByID($id);
        if ($entry != null) {
            return new Response($entry);
        }else{
            return new Response("There is no entry with id " . $id);
        }
    }

}
