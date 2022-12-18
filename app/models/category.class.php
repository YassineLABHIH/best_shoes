<?php

class Category
{

  private $error = "";
  private $message = "";

  private $id;
  private $category;

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId($id)
  {
    $this->id = $id;

  }

   /**
   * Get the value of category
   */ 
  public function getCategory()
  {
    return $this->category;
  }

  /**
   * Set the value of category
   *
   * @return  self
   */ 
  public function setCategory($category)
  {
    $this->category = $category;

  }

  /**
     * Database class
     * @return void
     */
    public function create($POST) :void
  {

    $data = array();
    $data['category'] = trim($POST['category']);


    $db = Database::getInstance();

    //check all fields are filled in
    if (empty($data['category'])) {
      $this->error .= "Please complete all fields !<br>";
    }

    //check only contain letters
    preg_match("/([^A-Za-z\s])/", $data['category'], $content);
    if (!empty($content)) {
      $this->error .= "The category can only contain letters !<br>";
    }

    //check if category already exists
    $sql = "select * from categories where category = :category limit 1";
    $arr['category'] = $data['category'];
    $check = $db->read($sql, $arr);


    if (!empty($check)) {
      $this->error .= "This category already exists !";
    }

    //register in the database
    if ($this->error == "") {

      $query = "insert into categories (category) values (:category)";
      $result = $db->write($query, $data);

      if ($result) {

        $this->message .= "The category has been successfully added";
        $_SESSION['message'] = $this->message;
        header("Location:" . ROOT . "admin/category");
        die;
      }
    }

    $_SESSION['error'] = $this->error;
  }




  public function edit()
  {
  }


  public function delete()
  {
  }

  

 
}
