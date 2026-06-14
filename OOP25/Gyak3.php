
<?php

$_POST["name"]="Máté";
$_POST["email"]="a";
$_POST["password"]="c";

$connection=mysqli_connect("localhost","root","","gulyas_mate");

class SqlFunctions{
    public $connection;
    public $table="user3";

    function __construct($connection){$this->connection=$connection;}

    //connection, insert into user, (name, email, password) values ('Angi', 'sss@mg.hu','12jsh')
    function insert($tömb){
        $oszlopnevek=implode(", ",$tömb);
        $beírtérték="";
        foreach ($tömb as $tömbelem){$beírtérték.="'".$_POST[$tömbelem]."',";}
        $beírtérték= rtrim($beírtérték,',');
        print (" insert into $this->table ($oszlopnevek) values ($beírtérték)");
        $sql=  mysqli_query($this->connection," insert into $this->table ($oszlopnevek) values ($beírtérték)");;
    }

    // delete from user3 where name=Angi

        public $sql2="";
        function Delete(){
        $this->sql2=" delete from $this->table"; return $this;}

        function where($oszlopnév, $relációsjel, $érték){
            if(stripos($this->sql2, "where") === false){$whereand="where";} else {$whereand="and";}
         $this->sql2.= " $whereand $oszlopnév $relációsjel '$érték'"; return $this; }

        function törlés() {$törlés=mysqli_query($this->connection,  ($this->sql2));}


// select name, email, password from user3 where email=rec@de.hu and name=Has orderby desc

        public $sql3="";

        function select($tömb){ $oszlopnevek=implode(", ",$tömb);
            $this->sql3 = "Select  $oszlopnevek from $this->table";}

        function where2($oszlopnév, $relációjel, $érték){
            if(stripos($this->sql3, "where") === false){ $whereand="where";} else{$whereand="and";} 
            $this->sql3.=" $whereand $oszlopnév $relációjel '$érték'";return $this;}

        function order($oszlopnév, $irány){
            $this->sql3.=" order by $oszlopnév $irány"; return $this;
            }
        function szűrés(){return $szűrés= mysqli_query($this->connection, $this->sql3);}




//"update user3 set id ='1', name='mate', email='kjnjd@xj.hu' ,password='wexjb66' where name = 'Sanyi' and email ='ednxjw@.hu'"

public $sql4="";
 function Update(){
   return $this->sql4="update $this->table";}

function értékek($mezőnév, $érték){
    if ( stripos($this->sql4, "set") === false) {$setnothing="set";} else{$setnothing=",";}
  $this->sql4.= " $setnothing $mezőnév = '$érték'"; return $this;
    }

function where3($oszlopnév, $relációjel, $érték ){
if(stripos($this->sql4,"where")=== false){$whereand="where";} else{ $whereand="and";} 
return $this->sql4.= " $whereand $oszlopnév $relációjel '$érték'"; return $this;
;}

function Csere(){
    mysqli_query($this->connection," $this->sql4");
}


}


//insert
$insert = new SqlFunctions ($connection);
print $insert->insert(['name','email','password']);

print"<br>";
print"<br>";

//törlés
$törlés =new SqlFunctions($connection);
    $törlés->Delete();
    $törlés->where ('password','=','J');
    $törlés->where('name', '=','Angi');
    $törlés->törlés();
    print $törlés->sql2;

print"<br>";
print"<br>";

//select
$select= new SqlFunctions($connection);
    $select->select(['id','name','email','password']);
    $select->where2('name','=','Csere János');
    $select->where2('password', '!=', 'k');
    $select->order('id','desc');
    $select->szűrés();


    //select eredmény kííratása
    $eredmény=$select->szűrés();
    $kíírt=mysqli_fetch_assoc($eredmény);
    print $kíírt["id"]." ".$kíírt["name"] ." ". $kíírt['email'] .' '. $kíírt['password'];
    print "<br>";
    while ($kíírt=mysqli_fetch_assoc($eredmény)){
    print "<br>"."id szerint csökkenő 'ASC' sorrenben : ".$kíírt["id"];
}

print"<br>";
print"<br>";

$update = new SqlFunctions($connection);
$update->Update();
$update->értékek('name','Csere János');
$update->értékek('email','Csere@csere.hu');
$update->értékek('password','csere123');
$update->where3('name','=','Angi');
print $update->where3('email','=','s@dddgi');
$update->Csere();
