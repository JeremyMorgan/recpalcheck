<?php

class RecPalCheckTest extends PHPUnit_Framework_TestCase
{
       

    function __construct() {
       //require_once("../src/recpalcheck.class.php");
       
       require __DIR__ . "/../src/recpalcheck.class.php";

    }

    public function testSomePalindromes()
    {
        // create some instances with different strings
        // alternating palindrome and non palindrome 

        $a = new RecPalCheck("racecar");        // palindrome
        $b = new RecPalCheck("slkjdaflkjsdd");  // not a palindrome
        $c = new RecPalCheck("bob");
        $d = new RecPalCheck("sadfsaf");
        $e = new RecPalCheck("oceanaeco");
        $f = new RecPalCheck("abcbaad");
        $g = new RecPalCheck("deleveled");
        $h = new RecPalCheck("rqwerwe");
        $i = new RecPalCheck("evitative");
        $j = new RecPalCheck("eoiusel");
        $k = new RecPalCheck("redivider");
        $l = new RecPalCheck("lkjlekje");
        $m = new RecPalCheck("releveler");
        $n = new RecPalCheck("dfjdlde");
        $o = new RecPalCheck("adinida");
        $p = new RecPalCheck(";oi;e;l");
        $q = new RecPalCheck("deified");
        $r = new RecPalCheck("sdkjdlkjde");



        // Asserts, also alternating order
        
        $this->assertEquals(1, $a->checkPalindrome());
        $this->assertEquals(0, $b->checkPalindrome());
        $this->assertEquals(1, $c->checkPalindrome());
        $this->assertEquals(0, $d->checkPalindrome());
        $this->assertEquals(1, $e->checkPalindrome());
        $this->assertEquals(0, $f->checkPalindrome());
        $this->assertEquals(1, $g->checkPalindrome());
        $this->assertEquals(0, $h->checkPalindrome());
        $this->assertEquals(1, $i->checkPalindrome());
        $this->assertEquals(0, $j->checkPalindrome());
        $this->assertEquals(1, $k->checkPalindrome());
        $this->assertEquals(0, $l->checkPalindrome());
        $this->assertEquals(1, $m->checkPalindrome());
        $this->assertEquals(0, $n->checkPalindrome());
        $this->assertEquals(1, $o->checkPalindrome());
        $this->assertEquals(0, $p->checkPalindrome());
        $this->assertEquals(1, $q->checkPalindrome());
        $this->assertEquals(0, $r->checkPalindrome());


    }

    // ...
}
