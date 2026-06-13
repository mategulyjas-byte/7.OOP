
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
        //print (" insert into $this->table ($oszlopnevek) values ($beírtérték)");
        $sql=  mysqli_query($this->connection," insert into $this->table ($oszlopnevek) values ($beírtérték)");;
    }

    // delete from user3 where name=Angi

        public $sql2="";
        function Delete(){
        $this->sql2="Delete from $this->table"; return $this;}

        function where($oszlopnév, $relációsjel, $érték){
            if(stripos($this->sql2, "where") === false){$whereand="where";} else {$whereand="and";}
            $this->sql2.=" $whereand $oszlopnév $relációsjel '$érték'"; return $this;}

        function törlés(){ $törlés=mysqli_query($this->connection,  ($this->sql2));}


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

}


//insert
$insert = new SqlFunctions ($connection);
print $insert->insert(['name','email','password']);

print"<br>";
//törlés
// $törlés =new SqlFunctions($connection);
//     $törlés->Delete();
//     $törlés->where ('password','=','J');
//     $törlés->where('name', '=','Angi');
//     $törlés->törlés();

//select
$select= new SqlFunctions($connection);
    $select->select(['name','email','password']);
    $select->where2('name','=','Máté');
    $select->where2('password', '!=', 'k');
    $select->order('password','desc');
    $select->szűrés();

print "<br>";

    //select eredmény kííratása
    $eredmény=$select->szűrés();

    //$kíírt=mysqli_fetch_assoc($eredmény);

    //print $kíírt["name"] ." ". $kíírt['email'] .' '. $kíírt['password'];

    print "<br>";

    while ($kíírt=mysqli_fetch_assoc($eredmény)){
    print "<br>".$kíírt["password"];
}



