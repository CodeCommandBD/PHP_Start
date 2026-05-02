<?php 

    // Encapsulation using closures

    
    class FatherEnc {
        // ১. ডাটা হাইড করার জন্য private ব্যবহার করা হয়েছে (Encapsulation)
        private $count = 0;
        // ২. ডাটা পরিবর্তন করার জন্য public মেথড
        public function inc() {
            $this->count++; // PHP-তে প্রপার্টি এক্সেস করতে $this-> লাগে
        }
        public function dec() {
            $this->count--;
        }
        // ৩. ডাটা দেখার জন্য Getter মেথড
        public function getCount() {
            return $this->count;
        }
    }
    $obj = new FatherEnc();
    $obj->inc();
    $obj->inc();
    $obj->inc();
    $obj->inc();
    $obj->inc();
    $obj->dec();
    echo $obj->getCount();

?>