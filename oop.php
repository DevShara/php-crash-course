<?php
    class User{
        //Properties are attributes that belong to a class
        
        //Access modifiers: public, private, protected
        //public: can be accessed from anywhere
        //private: can only be accessed from inside the class
        //protected: can only be accessed from inside the class and by inheriting class

        public function __construct($name, $email, $password){
             $this->name =$name;
             $this->email =$email;
             $this->password =$password;
        }

        public $name;
        public $email;
        public $password;

        function set_name($name){
            $this->name =$name; 
        }

        function get_name(){
            return $this->name;
        }
    }

    $user1 = new User('Man', 'man@mnm.man', '1234');
    echo $user1->email;  
    
    
    class Employee extends User {

        public function __construct($name, $email , $password, $title ){
            parent::__construct($name, $email, $password);
            $this->title =  $title;
        }

     public function getTitle(){
        return $this->title;
     }
    }

    $emp1 = new Employee('sam', 'sam2@as.as', '3454', 'Manager');
    echo $emp1->getTitle() 


?>