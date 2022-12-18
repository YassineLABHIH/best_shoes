<?php

class Category
{

        private $error = "";
        private $message = "";
        
        
        
        public function create($POST)
        {

          $data = array();
        	$data['category'] = trim($POST['category']);

      
            $db = Database::getInstance();

         //check all fields are filled in
         if (empty($data['category'])) 
         {
             $this->error .= "Please complete all fields !<br>";
         }

         //check only contain letters
         preg_match("/([^A-Za-z\s])/",$data['category'],$content);
         if(!empty($content)){
          $this->error .= "The category can only contain letters !<br>";
        }
    
        //check if category already exists
          $sql = "select * from categories where category = :category limit 1";
          $arr['category'] = $data['category'];
          $check = $db->read($sql,$arr);
          
    
          if(!empty($check))
          {
            $this->error .= "This category already exists !";
           
          }
    
          //register in the database
          if($this->error == "")
          {
             
            $query = "insert into categories (category) values (:category)";
            $result = $db->write($query,$data);
    
            if($result)
            {
              
              $this->message .= "The category has been successfully added";
              $_SESSION['message'] = $this->message;
              header("Location:".ROOT."admin/category");
              die;
            }
              
          }
    
          $_SESSION['error'] = $this->error;
          
      
      
        }

        public function affich(){
          $category_list = array();
          $db = Database::getInstance();

    // START : trier par ordre croissant ou décroissant


    $query = "select * from category";
    $category_recup = $db->prepare($query);
    $category_recup->execute();
    $category_list = $category_recup->fetchAll(PDO::FETCH_ASSOC);

// END : trier par ordre croissant ou décroissant
        }
    
          


    public function edit()
    {
        
    }


    public function delete()
    {
        
    }
}