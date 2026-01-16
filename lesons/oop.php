<?php
// ....Encapsulation....
// class Person{
//     private $id;
//     private $name;
//     private $gender;

//     public function data($id,$name,$gender){
//         $this->id = $id;
//         $this->name = $name;
//         $this->gender = $gender;
//     }
//     public function show(){
//         echo 'ID: '. $this->id.'</br>';
//         echo 'Name: '. $this->name.'</br>';
//         echo 'Gender: '. $this->gender.'</br>';
//     }
// }
// $person = new Person();
// $person->data(1,'nana','female');
// $person->show()


// ....override....polymorphism
// class Person{
//     protected $id;
//     protected $name;
//     public function __construct($id, $name){
//         $this->id=$id;
//         $this->name=$name;
//     }
//     public function show(){
//        echo 'ID: ' .$this->id.'</br>';
//        echo 'Name: '.$this->name.'</br>';

//     }
// }
// class Teacher extends Person{
//     private $gender;
//     private $room;

//     public function __construct($id,$name,$gender,$room){

//         parent:: __construct($id,$name,$gender,$room);
//         $this->gender=$gender;
//         $this->room=$room;
//     }
//     public function show(){
//         parent::show();
//         echo'Gender: '. $this->gender,'</br>';
//         echo 'Room: '.$this->room;
//     }
// }
// $teacher = new Teacher(1,'Bopha','Female','M3');
// $teacher->show();


//Abstraction
abstract class Animal{
    protected $name;
    protected $gender;
    public function __construct($name,$gender)
    {
        $this->name=$name;
        $this->gender=$gender;
    }
    abstract public function show();
}
class Dog extends Animal{
    public function show(){
        echo'Name: '. $this->name,'</br>';
        echo 'Gender: '.$this->gender,'</br>';
    }
} 
class Cat extends Animal{
    public function show()
    {
        echo'Name: '. $this->name,'</br>';
        echo 'Gender: '.$this->gender,'</br>';
    }
}
class Dog1 extends Animal{
    public function show()
    {
        echo'Name: '. $this->name,'</br>';
        echo 'Gender: '.$this->gender,'</br>';
    }
}
$dog = new Dog('Bam','Male');
$cat = new Cat('Tang','Male');
$dog1 = new Cat('Yountan','Male');
$dog->show();
$cat->show();
$dog1->show();

?>